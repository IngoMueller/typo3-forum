<?php
// DO NOT CHANGE THIS FILE! It is automatically generated by extdeveval::buildAutoloadRegistry.
// This file was generated on 2012-04-16 12:20

$extensionPath = t3lib_extMgm::extPath('mm_forum');
return array(
	'tx_mmforum_ajax_dispatcher' => $extensionPath . 'Classes/Ajax/Dispatcher.php',
	'tx_mmforum_cache_cache' => $extensionPath . 'Classes/Cache/Cache.php',
	'tx_mmforum_cache_cachemanager' => $extensionPath . 'Classes/Cache/CacheManager.php',
	'tx_mmforum_controller_abstractbackendcontroller' => $extensionPath . 'Classes/Controller/AbstractBackendController.php',
	'tx_mmforum_controller_abstractcontroller' => $extensionPath . 'Classes/Controller/AbstractController.php',
	'tx_mmforum_controller_backendcontroller' => $extensionPath . 'Classes/Controller/BackendController.php',
	'tx_mmforum_controller_forumcontroller' => $extensionPath . 'Classes/Controller/ForumController.php',
	'tx_mmforum_controller_moderationcontroller' => $extensionPath . 'Classes/Controller/ModerationController.php',
	'tx_mmforum_controller_postcontroller' => $extensionPath . 'Classes/Controller/PostController.php',
	'tx_mmforum_controller_reportcontroller' => $extensionPath . 'Classes/Controller/ReportController.php',
	'tx_mmforum_controller_topiccontroller' => $extensionPath . 'Classes/Controller/TopicController.php',
	'tx_mmforum_controller_usercontroller' => $extensionPath . 'Classes/Controller/UserController.php',
	'tx_mmforum_domain_exception_authentication_noaccessexception' => $extensionPath . 'Classes/Domain/Exception/Authentication/NoAccessException.php',
	'tx_mmforum_domain_exception_authentication_notloggedinexception' => $extensionPath . 'Classes/Domain/Exception/Authentication/NotLoggedInException.php',
	'tx_mmforum_domain_exception_textparser_exception' => $extensionPath . 'Classes/Domain/Exception/TextParser/Exception.php',
	'tx_mmforum_domain_factory_abstractfactory' => $extensionPath . 'Classes/Domain/Factory/AbstractFactory.php',
	'tx_mmforum_domain_factory_forum_postfactory' => $extensionPath . 'Classes/Domain/Factory/Forum/PostFactory.php',
	'tx_mmforum_domain_factory_forum_topicfactory' => $extensionPath . 'Classes/Domain/Factory/Forum/TopicFactory.php',
	'tx_mmforum_domain_factory_moderation_reportfactory' => $extensionPath . 'Classes/Domain/Factory/Moderation/ReportFactory.php',
	'tx_mmforum_domain_model_accessibleinterface' => $extensionPath . 'Classes/Domain/Model/AccessibleInterface.php',
	'tx_mmforum_domain_model_notifiableinterface' => $extensionPath . 'Classes/Domain/Model/NotifiableInterface.php',
	'tx_mmforum_domain_model_readableinterface' => $extensionPath . 'Classes/Domain/Model/ReadableInterface.php',
	'tx_mmforum_domain_model_subscribeableinterface' => $extensionPath . 'Classes/Domain/Model/SubscribeableInterface.php',
	'tx_mmforum_domain_model_format_abstracttextparserelement' => $extensionPath . 'Classes/Domain/Model/Format/AbstractTextParserElement.php',
	'tx_mmforum_domain_model_format_bbcode' => $extensionPath . 'Classes/Domain/Model/Format/BBCode.php',
	'tx_mmforum_domain_model_format_listbbcode' => $extensionPath . 'Classes/Domain/Model/Format/ListBBCode.php',
	'tx_mmforum_domain_model_format_quotebbcode' => $extensionPath . 'Classes/Domain/Model/Format/QuoteBBCode.php',
	'tx_mmforum_domain_model_format_smilie' => $extensionPath . 'Classes/Domain/Model/Format/Smilie.php',
	'tx_mmforum_domain_model_format_syntaxhighlighting' => $extensionPath . 'Classes/Domain/Model/Format/SyntaxHighlighting.php',
	'tx_mmforum_domain_model_forum_access' => $extensionPath . 'Classes/Domain/Model/Forum/Access.php',
	'tx_mmforum_domain_model_forum_attachment' => $extensionPath . 'Classes/Domain/Model/Forum/Attachment.php',
	'tx_mmforum_domain_model_forum_forum' => $extensionPath . 'Classes/Domain/Model/Forum/Forum.php',
	'tx_mmforum_domain_model_forum_post' => $extensionPath . 'Classes/Domain/Model/Forum/Post.php',
	'tx_mmforum_domain_model_forum_shadowtopic' => $extensionPath . 'Classes/Domain/Model/Forum/ShadowTopic.php',
	'tx_mmforum_domain_model_forum_topic' => $extensionPath . 'Classes/Domain/Model/Forum/Topic.php',
	'tx_mmforum_domain_model_moderation_report' => $extensionPath . 'Classes/Domain/Model/Moderation/Report.php',
	'tx_mmforum_domain_model_moderation_reportcomment' => $extensionPath . 'Classes/Domain/Model/Moderation/ReportComment.php',
	'tx_mmforum_domain_model_moderation_reportworkflowstatus' => $extensionPath . 'Classes/Domain/Model/Moderation/ReportWorkflowStatus.php',
	'tx_mmforum_domain_model_user_frontenduser' => $extensionPath . 'Classes/Domain/Model/User/FrontendUser.php',
	'tx_mmforum_domain_model_user_frontendusergroup' => $extensionPath . 'Classes/Domain/Model/User/FrontendUserGroup.php',
	'tx_mmforum_domain_model_user_userfield_dateuserfield' => $extensionPath . 'Classes/Domain/Model/User/Userfield/DateUserfield.php',
	'tx_mmforum_domain_model_user_userfield_textuserfield' => $extensionPath . 'Classes/Domain/Model/User/Userfield/TextUserfield.php',
	'tx_mmforum_domain_model_user_userfield_typoscriptuserfield' => $extensionPath . 'Classes/Domain/Model/User/Userfield/TyposcriptUserfield.php',
	'tx_mmforum_domain_model_user_userfield_value' => $extensionPath . 'Classes/Domain/Model/User/Userfield/Value.php',
	'tx_mmforum_domain_repository_abstractrepository' => $extensionPath . 'Classes/Domain/Repository/AbstractRepository.php',
	'tx_mmforum_domain_repository_format_bbcoderepository' => $extensionPath . 'Classes/Domain/Repository/Format/BBCodeRepository.php',
	'tx_mmforum_domain_repository_format_smilierepository' => $extensionPath . 'Classes/Domain/Repository/Format/SmilieRepository.php',
	'tx_mmforum_domain_repository_format_syntaxhighlightingrepository' => $extensionPath . 'Classes/Domain/Repository/Format/SyntaxHighlightingRepository.php',
	'tx_mmforum_domain_repository_forum_forumrepository' => $extensionPath . 'Classes/Domain/Repository/Forum/ForumRepository.php',
	'tx_mmforum_domain_repository_forum_postrepository' => $extensionPath . 'Classes/Domain/Repository/Forum/PostRepository.php',
	'tx_mmforum_domain_repository_forum_topicrepository' => $extensionPath . 'Classes/Domain/Repository/Forum/TopicRepository.php',
	'tx_mmforum_domain_repository_moderation_reportrepository' => $extensionPath . 'Classes/Domain/Repository/Moderation/ReportRepository.php',
	'tx_mmforum_domain_repository_moderation_reportworkflowstatusrepository' => $extensionPath . 'Classes/Domain/Repository/Moderation/ReportWorkflowStatusRepository.php',
	'tx_mmforum_domain_repository_user_frontenduserrepository' => $extensionPath . 'Classes/Domain/Repository/User/FrontendUserRepository.php',
	'tx_mmforum_domain_repository_user_userfieldrepository' => $extensionPath . 'Classes/Domain/Repository/User/UserfieldRepository.php',
	'tx_mmforum_extdirect_abstractdataprovider' => $extensionPath . 'Classes/ExtDirect/AbstractDataProvider.php',
	'tx_mmforum_extdirect_forumdataprovider' => $extensionPath . 'Classes/ExtDirect/ForumDataProvider.php',
	'tx_mmforum_service_extbaseconnectorservice' => $extensionPath . 'Classes/Service/ExtBaseConnectorService.php',
	'tx_mmforum_service_authentication_authenticationservice' => $extensionPath . 'Classes/Service/Authentication/AuthenticationService.php',
	'tx_mmforum_service_authentication_authenticationserviceinterface' => $extensionPath . 'Classes/Service/Authentication/AuthenticationServiceInterface.php',
	'tx_mmforum_service_mailing_abstractmailingservice' => $extensionPath . 'Classes/Service/Mailing/AbstractMailingService.php',
	'tx_mmforum_service_mailing_htmlmailingservice' => $extensionPath . 'Classes/Service/Mailing/HTMLMailingService.php',
	'tx_mmforum_service_mailing_mailingserviceinterface' => $extensionPath . 'Classes/Service/Mailing/MailingServiceInterface.php',
	'tx_mmforum_service_mailing_plainmailingservice' => $extensionPath . 'Classes/Service/Mailing/PlainMailingService.php',
	'tx_mmforum_service_notification_notificationservice' => $extensionPath . 'Classes/Service/Notification/NotificationService.php',
	'tx_mmforum_service_notification_notificationserviceinterface' => $extensionPath . 'Classes/Service/Notification/NotificationServiceInterface.php',
	'tx_mmforum_service_notification_subscriptionlistener' => $extensionPath . 'Classes/Service/Notification/SubscriptionListener.php',
	'tx_mmforum_textparser_textparserservice' => $extensionPath . 'Classes/TextParser/TextParserService.php',
	'tx_mmforum_textparser_panel_abstractpanel' => $extensionPath . 'Classes/TextParser/Panel/AbstractPanel.php',
	'tx_mmforum_textparser_panel_bbcodepanel' => $extensionPath . 'Classes/TextParser/Panel/BbCodePanel.php',
	'tx_mmforum_textparser_panel_markitupexportableinterface' => $extensionPath . 'Classes/TextParser/Panel/MarkItUpExportableInterface.php',
	'tx_mmforum_textparser_panel_panelinterface' => $extensionPath . 'Classes/TextParser/Panel/PanelInterface.php',
	'tx_mmforum_textparser_panel_smiliepanel' => $extensionPath . 'Classes/TextParser/Panel/SmiliePanel.php',
	'tx_mmforum_textparser_panel_syntaxhighlightingpanel' => $extensionPath . 'Classes/TextParser/Panel/SyntaxHighlightingPanel.php',
	'tx_mmforum_textparser_service_abstracttextparserservice' => $extensionPath . 'Classes/TextParser/Service/AbstractTextParserService.php',
	'tx_mmforum_textparser_service_bbcodeparserservice' => $extensionPath . 'Classes/TextParser/Service/BBCodeParserService.php',
	'tx_mmforum_textparser_service_basicparserservice' => $extensionPath . 'Classes/TextParser/Service/BasicParserService.php',
	'tx_mmforum_textparser_service_listparserservice' => $extensionPath . 'Classes/TextParser/Service/ListParserService.php',
	'tx_mmforum_textparser_service_quoteparserservice' => $extensionPath . 'Classes/TextParser/Service/QuoteParserService.php',
	'tx_mmforum_textparser_service_smilieparserservice' => $extensionPath . 'Classes/TextParser/Service/SmilieParserService.php',
	'tx_mmforum_textparser_service_syntaxhighlightingparserservice' => $extensionPath . 'Classes/TextParser/Service/SyntaxHighlightingParserService.php',
	'tx_mmforum_textparser_service_tidyservice' => $extensionPath . 'Classes/TextParser/Service/TidyService.php',
	'tx_mmforum_utility_file' => $extensionPath . 'Classes/Utility/File.php',
	'tx_mmforum_utility_localization' => $extensionPath . 'Classes/Utility/Localization.php',
	'tx_mmforum_utility_typoscript' => $extensionPath . 'Classes/Utility/TypoScript.php',
	'tx_mmforum_view_forum_updatejson' => $extensionPath . 'Classes/View/Forum/UpdateJson.php',
	'tx_mmforum_viewhelpers_ifinstanceofviewhelper' => $extensionPath . 'Classes/ViewHelpers/IfInstanceOfViewHelper.php',
	'tx_mmforum_viewhelpers_authentication_ifaccessviewhelper' => $extensionPath . 'Classes/ViewHelpers/Authentication/IfAccessViewHelper.php',
	'tx_mmforum_viewhelpers_authentication_ifloggedinviewhelper' => $extensionPath . 'Classes/ViewHelpers/Authentication/IfLoggedInViewHelper.php',
	'tx_mmforum_viewhelpers_bootstrap_buttonviewhelper' => $extensionPath . 'Classes/ViewHelpers/Bootstrap/ButtonViewHelper.php',
	'tx_mmforum_viewhelpers_bootstrap_form_rowviewhelper' => $extensionPath . 'Classes/ViewHelpers/Bootstrap/Form/RowViewHelper.php',
	'tx_mmforum_viewhelpers_control_bigbuttonviewhelper' => $extensionPath . 'Classes/ViewHelpers/Control/BigButtonViewHelper.php',
	'tx_mmforum_viewhelpers_control_pagebrowserviewhelper' => $extensionPath . 'Classes/ViewHelpers/Control/PageBrowserViewHelper.php',
	'tx_mmforum_viewhelpers_control_smallbuttonviewhelper' => $extensionPath . 'Classes/ViewHelpers/Control/SmallButtonViewHelper.php',
	'tx_mmforum_viewhelpers_control_submitbuttonviewhelper' => $extensionPath . 'Classes/ViewHelpers/Control/SubmitButtonViewHelper.php',
	'tx_mmforum_viewhelpers_form_bbcodeeditorviewhelper' => $extensionPath . 'Classes/ViewHelpers/Form/BbCodeEditorViewHelper.php',
	'tx_mmforum_viewhelpers_form_forumselectviewhelper' => $extensionPath . 'Classes/ViewHelpers/Form/ForumSelectViewHelper.php',
	'tx_mmforum_viewhelpers_format_filesizeviewhelper' => $extensionPath . 'Classes/ViewHelpers/Format/FileSizeViewHelper.php',
	'tx_mmforum_viewhelpers_format_jsonviewhelper' => $extensionPath . 'Classes/ViewHelpers/Format/JsonViewHelper.php',
	'tx_mmforum_viewhelpers_format_textparserviewhelper' => $extensionPath . 'Classes/ViewHelpers/Format/TextParserViewHelper.php',
	'tx_mmforum_viewhelpers_forum_forumiconviewhelper' => $extensionPath . 'Classes/ViewHelpers/Forum/ForumIconViewHelper.php',
	'tx_mmforum_viewhelpers_forum_rootlineviewhelper' => $extensionPath . 'Classes/ViewHelpers/Forum/RootlineViewHelper.php',
	'tx_mmforum_viewhelpers_forum_topiciconviewhelper' => $extensionPath . 'Classes/ViewHelpers/Forum/TopicIconViewHelper.php',
	'tx_mmforum_viewhelpers_moderation_reporticonviewhelper' => $extensionPath . 'Classes/ViewHelpers/Moderation/ReportIconViewHelper.php',
	'tx_mmforum_viewhelpers_user_avatarviewhelper' => $extensionPath . 'Classes/ViewHelpers/User/AvatarViewHelper.php',
	'tx_mmforum_viewhelpers_user_ifsubscribedviewhelper' => $extensionPath . 'Classes/ViewHelpers/User/IfSubscribedViewHelper.php',
	'tx_mmforum_viewhelpers_user_linkviewhelper' => $extensionPath . 'Classes/ViewHelpers/User/LinkViewHelper.php',
	'tx_mmforum_viewhelpers_user_userfieldviewhelper' => $extensionPath . 'Classes/ViewHelpers/User/UserfieldViewHelper.php',
	'tx_mmforum_unit_basetestcase' => $extensionPath . 'Tests/Unit/BaseTestCase.php',
	'tx_mmforum_domain_factory_forum_postfactorytest' => $extensionPath . 'Tests/Unit/Domain/Factory/Forum/PostFactoryTest.php',
	'tx_mmforum_domain_factory_forum_topicfactorytest' => $extensionPath . 'Tests/Unit/Domain/Factory/Forum/TopicFactoryTest.php',
	'tx_mmforum_service_authentication_authenticationservicetest' => $extensionPath . 'Tests/Unit/Service/Authentication/AuthenticationServiceTest.php',
	'tx_mmforum_service_notification_notificationservicetest' => $extensionPath . 'Tests/Unit/Service/Notification/NotificationServiceTest.php',
	'tx_mmforum_service_notification_subscriptionlistenertest' => $extensionPath . 'Tests/Unit/Service/Notification/SubscriptionListenerTest.php',
);
?>