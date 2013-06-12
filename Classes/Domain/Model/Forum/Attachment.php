<?php

/*                                                                      *
 *  COPYRIGHT NOTICE                                                    *
 *                                                                      *
 *  (c) 2012 Martin Helmich <m.helmich@mittwald.de>                     *
 *           Mittwald CM Service GmbH & Co KG                           *
 *           All rights reserved                                        *
 *                                                                      *
 *  This script is part of the TYPO3 project. The TYPO3 project is      *
 *  free software; you can redistribute it and/or modify                *
 *  it under the terms of the GNU General Public License as published   *
 *  by the Free Software Foundation; either version 2 of the License,   *
 *  or (at your option) any later version.                              *
 *                                                                      *
 *  The GNU General Public License can be found at                      *
 *  http://www.gnu.org/copyleft/gpl.html.                               *
 *                                                                      *
 *  This script is distributed in the hope that it will be useful,      *
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of      *
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the       *
 *  GNU General Public License for more details.                        *
 *                                                                      *
 *  This copyright notice MUST APPEAR in all copies of the script!      *
 *                                                                      */



/**
 *
 * A file attachment. These attachments can be attached to any forum post.
 *
 * @author     Martin Helmich <m.helmich@mittwald.de>
 * @package    MmForum
 * @subpackage Domain_Model_Format
 * @version    $Id$
 * @license    GNU Public License, version 2
 *             http://opensource.org/licenses/gpl-license.php
 *
 */

class Tx_MmForum_Domain_Model_Forum_Attachment extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity {



	/*
	 * ATTRIBUTES
	 */



	/**
	 * The attachment file name.
	 * @var string
	 */
	protected $filename;



	/**
	 * The attachment file name on file system.
	 * @var string
	 */
	protected $realFilename;



	/**
	 * The MIME type of the attachment.
	 * @var string
	 */
	protected $mimeType;



	/**
	 * A download counter.
	 * @var integer
	 */
	protected $downloadCount;



	/*
	 * GETTERS
	 */



	/**
	 * Gets the attachment's filename.
	 * @return string The attachment's filename.
	 */
	public function getFilename() {
		return $this->filename;
	}


	/**
	 * Gets the attachment's filename on file system.
	 * @return string The attachment's filename on file system.
	 */
	public function getRealFilename() {
		return $this->realFilename;
	}


	/**
	 * Gets the whole TCA config of tx_mmforum_domain_model_forum_attachment
	 * @return array The whole TCA config of tx_mmforum_domain_model_forum_attachment
	 */
	private function getTCAConfig() {
		global $TCA;
		$GLOBALS['TSFE']->includeTCA();
		\TYPO3\CMS\Core\Utility\GeneralUtility::loadTCA('tx_mmforum_domain_model_forum_attachment');

		return $TCA['tx_mmforum_domain_model_forum_attachment'];
	}


	/**
	 * Gets the absolute filename of this attachment.
	 * @return string The absolute filename of this attachment.
	 */
	public function getAbsoluteFilename() {
		$tca = $this->getTCAConfig();

		$uploadPath = $tca['columns']['real_filename']['config']['uploadfolder'];

		return $uploadPath . $this->getRealFilename();
	}


	/**
	 * Gets the allowed mime types.
	 * @return array The allowed mime types.
	 */
	public function getAllowedMimeTypes() {
		$tca = $this->getTCAConfig();
		return $tca['columns']['real_filename']['config']['allowedMimeTypes'];
	}


	/**
	 * Gets the allowed max size of a attachment.
	 * @return int The allowed max size of a attachment.
	 */
	public function getAllowedMaxSize() {
		$tca = $this->getTCAConfig();
		return $tca['columns']['real_filename']['config']['allowedSizeInByte'];
	}




	/**
	 * Gets the filesize.
	 * @return integer The filesize.
	 */
	public function getFilesize() {
		return filesize($this->getAbsoluteFilename());
	}



	/**
	 * Gets the MIME type.
	 * @return string The MIME type.
	 */
	public function getMimeType() {
		return $this->mimeType;
	}



	/**
	 * Gets the download count.
	 * @return integer The download count.
	 */
	public function getDownloadCount() {
		return $this->downloadCount;
	}



	/*
	 * SETTERS
	 */



	/**
	 * Sets the filename.
	 *
	 * @param string $filename The filename
	 * @return void
	 */
	public function setFilename($filename) {
		$this->filename = $filename;
	}


	/**
	 * Sets the filename on file system.
	 *
	 * @param string $realFilename The filename on file system
	 * @return void
	 */
	public function setRealFilename($realFilename) {
		$this->realFilename = $realFilename;
	}


	/**
	 * Sets the MIME type.
	 *
	 * @param string $mimeType The MIME type.
	 * @return void
	 */
	public function setMimeType($mimeType) {
		$this->mimeType = $mimeType;
	}



	/**
	 * Increases the download counter by 1.
	 * @return void
	 */
	public function increaseDownloadCount() {
		$this->downloadCount++;
	}


	/**
	 * Adds an attachment.
	 * @param array $attachments
	 * @return  \TYPO3\CMS\Extbase\Persistence\ObjectStorage<Tx_MmForum_Domain_Model_Forum_Attachment>
	 */
	public function addAttachments(array $attachments){
		$objAttachments = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		foreach($attachments AS $attachmentID => $attachment) {
			$tmp_name = $_FILES['tx_mmforum_pi1']['tmp_name']['attachments'][$attachmentID];
			//Security part
			$mime_type = mime_content_type($tmp_name);
			if(array_search($mime_type,$this->getAllowedMimeTypes()) === false) continue;
			if($_FILES['tx_mmforum_pi1']['size']['attachments'][$attachmentID] > $this->getAllowedMaxSize())
				continue;
			//Save in Repository and in file system
			$this->setFilename($attachment['name']);
			$this->setRealFilename(sha1($attachment['name'].time()));
			$this->setMimeType($mime_type);
			$res = \TYPO3\CMS\Core\Utility\GeneralUtility::upload_copy_move($tmp_name,$this->getAbsoluteFilename());
			if($res === true) {
				$objAttachments->attach($this);
			}
		}
		return $objAttachments;
	}

}
