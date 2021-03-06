<?php

$lllPath = 'LLL:EXT:typo3_forum/Resources/Private/Language/locallang_db.xml:tx_typo3forum_domain_model_moderation_reportworkflowstatus.';

return [
	'ctrl' => [
		'title' => 'LLL:EXT:typo3_forum/Resources/Private/Language/locallang_db.xml:tx_typo3forum_domain_model_moderation_reportworkflowstatus',
		'label' => 'name',
		'type' => 'login_level',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'versioningWS' => 2,
		'versioning_followPages' => TRUE,
		'origUid' => 't3_origuid',
		'languageField' => 'sys_language_uid',
		'delete' => 'deleted',
		'enablecolumns' => [
			'disabled' => 'hidden'
		],
		'iconfile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath('typo3_forum') . 'Resources/Public/Icons/Moderation/ReportWorkflowStatus.png'
	],
	'interface' => [
		'showRecordFieldList' => 'name,icon,followup_status,initial,final'
	],
	'types' => [
		'1' => ['showitem' => 'name,icon,followup_status,initial,final'],
	],
	'columns' => [
		'hidden' => [
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.xml:LGL.hidden',
			'config' => [
				'type' => 'check'
			],
		],
		'crdate' => [
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.xml:LGL.crdate',
			'config' => [
				'type' => 'passthrough'
			],
		],
		'name' => [
			'label' => $lllPath . 'name',
			'config' => [
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			],
		],
		'followup_status' => [
			'exclude' => 1,
			'label' => $lllPath . 'followup_status',
			'config' => [
				'type' => 'select',
				'foreign_table' => 'tx_typo3forum_domain_model_moderation_reportworkflowstatus',
				'MM' => 'tx_typo3forum_domain_model_moderation_reportworkflowstatus_mm',
				'maxitems' => 9999,
				'size' => 5
			],
		],
		'initial' => [
			'label' => $lllPath . 'initial',
			'config' => [
				'type' => 'check'
			],
		],
		'final' => [
			'label' => $lllPath . 'final',
			'config' => [
				'type' => 'check'
			],
		],
		'icon' => [
			'label' => $lllPath . 'icon',
			'config' => [
				'type' => 'group',
				'internal_type' => 'file',
				'uploadfolder' => 'uploads/tx_typo3forum/workflowstatus/',
				'minitems' => 1,
				'maxitems' => 1,
				'allowed' => '*',
				'disallowed' => ''
			],
		],
	],
];
