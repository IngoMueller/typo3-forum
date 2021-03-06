<?php

$lllPath = 'LLL:EXT:typo3_forum/Resources/Private/Language/locallang_db.xml:tx_typo3forum_domain_model_forum_tag.';

return [
	'ctrl' => [
		'title' => 'LLL:EXT:typo3_forum/Resources/Private/Language/locallang_db.xml:tx_typo3forum_domain_model_forum_tag',
		'label' => 'name',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'delete' => 'deleted',
		'iconfile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath('typo3_forum') . 'Resources/Public/Icons/Forum/Tag.png',
	],
	'interface' => [
		'showRecordFieldList' => 'name,tstamp,crdate,topic_count,feuser',
	],
	'types' => [
		'1' => ['showitem' => 'name,tstamp,crdate,topic_count,feuser'],
	],
	'columns' => [
		'name' => [
			'label' => $lllPath . 'name',
			'config' => [
				'type' => 'input',
			]
		],
		'tstamp' => [
			'label' => $lllPath . 'tstamp',
			'config' => [
				'type' => 'none',
				'format' => 'date',
				'eval' => 'date',
			]
		],
		'crdate' => [
			'label' => $lllPath . 'crdate',
			'config' => [
				'type' => 'none',
				'format' => 'date',
				'eval' => 'date',
			]
		],
		'topic_count' => [
			'label' => $lllPath . 'topicCount',
			'config' => [
				'type' => 'none',
			],
		],
		'feuser' => [
			'label' => $lllPath . 'feuser',
			'config' => [
				'type' => 'select',
				'size' => 10,
				'maxitems' => 99999,
				'foreign_table' => 'fe_users',
				'MM' => 'tx_typo3forum_domain_model_forum_tag_user',
			],
		],
	]
];
