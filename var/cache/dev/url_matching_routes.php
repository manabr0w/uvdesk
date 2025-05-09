<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/' => [[['_route' => 'base_route', '_controller' => 'App\\Controller\\BaseController::base'], null, null, null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/wizard/xhr/check-requirements' => [[['_route' => 'uvdesk_community_installation_wizard_check_requirements', '_controller' => 'App\\Controller\\ConfigureHelpdesk::evaluateSystemRequirements'], null, ['POST' => 0], null, false, false, null]],
        '/wizard/xhr/verify-database-credentials' => [[['_route' => 'uvdesk_community_installation_wizard_verify_database_credentials', '_controller' => 'App\\Controller\\ConfigureHelpdesk::verifyDatabaseCredentials'], null, ['POST' => 0], null, false, false, null]],
        '/wizard/xhr/intermediary/super-user' => [[['_route' => 'uvdesk_community_installation_wizard_store_super_user_credentials', '_controller' => 'App\\Controller\\ConfigureHelpdesk::prepareSuperUserDetailsXHR'], null, ['POST' => 0], null, false, false, null]],
        '/wizard/xhr/website-configure' => [[['_route' => 'uvdesk_community_installation_wizard_store_website_configuration', '_controller' => 'App\\Controller\\ConfigureHelpdesk::websiteConfigurationXHR'], null, null, null, false, false, null]],
        '/wizard/xhr/load/configurations' => [[['_route' => 'uvdesk_community_installation_wizard_update_configurations_xhr', '_controller' => 'App\\Controller\\ConfigureHelpdesk::updateConfigurationsXHR'], null, ['POST' => 0], null, false, false, null]],
        '/wizard/xhr/load/migrations' => [[['_route' => 'uvdesk_community_installation_wizard_migrate_database_schema_xhr', '_controller' => 'App\\Controller\\ConfigureHelpdesk::migrateDatabaseSchemaXHR'], null, ['POST' => 0], null, false, false, null]],
        '/wizard/xhr/load/entities' => [[['_route' => 'uvdesk_community_installation_wizard_populate_database_entities_xhr', '_controller' => 'App\\Controller\\ConfigureHelpdesk::populateDatabaseEntitiesXHR'], null, ['POST' => 0], null, false, false, null]],
        '/wizard/xhr/load/super-user' => [[['_route' => 'uvdesk_community_installation_wizard_create_default_super_user_xhr', '_controller' => 'App\\Controller\\ConfigureHelpdesk::createDefaultSuperUserXHR'], null, ['POST' => 0], null, false, false, null]],
        '/wizard/xhr/load/website-configure' => [[['_route' => 'uvdesk_community_installation_wizard_update_website_configuration', '_controller' => 'App\\Controller\\ConfigureHelpdesk::updateWebsiteConfigurationXHR'], null, ['POST' => 0], null, false, false, null]],
        '/tracker/xhr/get/cacheImage' => [[['_route' => 'uvdesk_community_tracker_cache_image', '_controller' => 'App\\Controller\\ImageCache\\ImageCacheController::getCachedImage'], null, ['GET' => 0], null, false, false, null]],
        '/mailbox/listener' => [[['_route' => 'helpdesk_member_mailbox_notification', '_controller' => 'Webkul\\UVDesk\\MailboxBundle\\Controller\\MailboxChannelXHR::processMailXHR', '_locale' => 'en'], null, null, null, false, false, null]],
        '/api/v1/me' => [[['_route' => 'uvdesk_api_bundle_v1.0.0_me_api_load_current_agent_details', '_controller' => 'Webkul\\UVDesk\\ApiBundle\\API\\Me::loadCurrentAgentDetails'], null, ['GET' => 0], null, false, false, null]],
        '/api/v1/agents' => [[['_route' => 'uvdesk_api_bundle_v1.0.0_agents_api_load_agents', '_controller' => 'Webkul\\UVDesk\\ApiBundle\\API\\Agents::loadAgents'], null, ['GET' => 0], null, false, false, null]],
        '/api/v1/customers' => [[['_route' => 'uvdesk_api_bundle_v1.0.0_agents_api_load_customers', '_controller' => 'Webkul\\UVDesk\\ApiBundle\\API\\Customers::loadCustomers'], null, ['GET' => 0], null, false, false, null]],
        '/api/v1/teams' => [[['_route' => 'uvdesk_api_bundle_v1.0.0_team_api_load_teams', '_controller' => 'Webkul\\UVDesk\\ApiBundle\\API\\Team::loadTeams'], null, ['GET' => 0], null, false, false, null]],
        '/api/v1/groups' => [[['_route' => 'uvdesk_api_bundle_v1.0.0_groups_api_load_groups', '_controller' => 'Webkul\\UVDesk\\ApiBundle\\API\\Group::loadGroup'], null, ['GET' => 0], null, false, false, null]],
        '/api/v1/tickets' => [[['_route' => 'uvdesk_api_bundle_api_tickets_v1.0_fetch_tickets', '_controller' => 'Webkul\\UVDesk\\ApiBundle\\API\\Tickets::fetchTickets'], null, ['GET' => 0], null, false, false, null]],
        '/api/v1/tickets/metadata' => [[['_route' => 'uvdesk_api_bundle_api_tickets_v1.0_load_ticket_attributes', '_controller' => 'Webkul\\UVDesk\\ApiBundle\\API\\Tickets::fetchTicketsMetadata'], null, ['GET' => 0], null, false, false, null]],
        '/api/v1/ticket' => [[['_route' => 'uvdesk_api_bundle_api_tickets_v1.0_create_ticket', '_controller' => 'Webkul\\UVDesk\\ApiBundle\\API\\Tickets::createTicket'], null, ['POST' => 0], null, false, false, null]],
        '/api/v1/ticket-types' => [[['_route' => 'uvdesk_api_bundle_api_tickets_v1.0_show_ticketTypes', '_controller' => 'Webkul\\UVDesk\\ApiBundle\\API\\TicketTypes::ticketTypeList'], null, ['GET' => 0], null, false, false, null]],
        '/api/v1/session/login' => [[['_route' => 'uvdesk_api_bundle_sessions_api_v1.0_login_session', '_controller' => 'Webkul\\UVDesk\\ApiBundle\\API\\Sessions::loginSession'], null, ['POST' => 0], null, false, false, null]],
        '/api/v1/session/logout' => [[['_route' => 'uvdesk_api_bundle_sessions_api_v1.0_logout_session', '_controller' => 'Webkul\\UVDesk\\ApiBundle\\API\\Sessions::logoutSession'], null, ['POST' => 0], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/(en|fr|it|de|da|ar|es|tr|zh|pl|he)(?'
                    .'|/(?'
                        .'|member/(?'
                            .'|log(?'
                                .'|in(*:229)'
                                .'|out(*:240)'
                            .')'
                            .'|dashboard(*:258)'
                            .'|pr(?'
                                .'|o(?'
                                    .'|file(?'
                                        .'|(*:282)'
                                    .')'
                                    .'|cessRawEmail(*:303)'
                                .')'
                                .'|ivilege(?'
                                    .'|s(?'
                                        .'|(*:326)'
                                        .'|/xhr(*:338)'
                                    .')'
                                    .'|/(?'
                                        .'|([^/]++)(*:359)'
                                        .'|delete/xhr(?:/([^/]++))?(*:391)'
                                    .')'
                                .')'
                                .'|epared\\-responses(?'
                                    .'|(*:421)'
                                    .'|/(?'
                                        .'|delete(?:/([^/]++))?(*:453)'
                                        .'|a(?'
                                            .'|jax(*:468)'
                                            .'|dd(*:478)'
                                        .')'
                                        .'|edit(?:/([^/]++))?(*:505)'
                                        .'|xhr/action/options(?:/([^/]++)(?:/([^/]++))?)?(*:559)'
                                    .')'
                                .')'
                            .')'
                            .'|a(?'
                                .'|gent(?'
                                    .'|/xhr(?:/([^/]++))?(*:599)'
                                    .'|(?:/([^/]++))?(*:621)'
                                    .'|s(?'
                                        .'|(*:633)'
                                        .'|/xhr(*:645)'
                                    .')'
                                    .'|/activity/(?'
                                        .'|list(*:671)'
                                        .'|xhr(*:682)'
                                    .')'
                                .')'
                                .'|pps(?'
                                    .'|(*:698)'
                                    .'|/(?'
                                        .'|collection(*:720)'
                                        .'|([^/]++)/([^/]++)/([^/]++)(?'
                                            .'|(*:757)'
                                            .'|/(?'
                                                .'|api(*:772)'
                                                .'|callback(*:788)'
                                            .')'
                                        .')'
                                    .')'
                                .')'
                            .')'
                            .'|c(?'
                                .'|reate/(?'
                                    .'|agent(*:819)'
                                    .'|group(*:832)'
                                    .'|team(*:844)'
                                    .'|privilege(*:861)'
                                    .'|customer(*:877)'
                                .')'
                                .'|ustomer(?'
                                    .'|s(?'
                                        .'|(*:900)'
                                        .'|/xhr(*:912)'
                                    .')'
                                    .'|/update\\-star(*:934)'
                                    .'|(?:/([^/]++))?(*:956)'
                                    .'|/xhr(?:/([^/]++))?(*:982)'
                                .')'
                                .'|a(?'
                                    .'|che\\-clear(*:1005)'
                                    .'|tegories(*:1022)'
                                .')'
                            .')'
                            .'|group(?'
                                .'|s(?'
                                    .'|(*:1045)'
                                    .'|/xhr(*:1058)'
                                .')'
                                .'|/(?'
                                    .'|([^/]++)(*:1080)'
                                    .'|delete/xhr(?:/([^/]++))?(*:1113)'
                                .')'
                            .')'
                            .'|t(?'
                                .'|e(?'
                                    .'|am(?'
                                        .'|s(?'
                                            .'|(*:1141)'
                                            .'|/xhr(*:1154)'
                                        .')'
                                        .'|/(?'
                                            .'|([^/]++)(*:1176)'
                                            .'|delete/xhr(?:/([^/]++))?(*:1209)'
                                        .')'
                                    .')'
                                    .'|mplate(?'
                                        .'|s(*:1230)'
                                        .'|\\-ajax(?:/([^/]++))?(*:1259)'
                                        .'|/(?'
                                            .'|add(*:1275)'
                                            .'|edit(?:/([^/]++))?(*:1302)'
                                        .')'
                                    .')'
                                .')'
                                .'|h(?'
                                    .'|eme/helpdesk(*:1330)'
                                    .'|read(?'
                                        .'|s/(?'
                                            .'|ajax(?'
                                                .'|(?:/([^/]++))?(*:1372)'
                                                .'|/action(?:/([^/]++))?(*:1402)'
                                            .')'
                                            .'|update(?:/([^/]++))?(*:1432)'
                                        .')'
                                        .'|/(?'
                                            .'|encoded\\-images/save/([^/]++)(*:1475)'
                                            .'|add(?:/([^/]++))?(*:1501)'
                                        .')'
                                    .')'
                                .')'
                                .'|icket(?'
                                    .'|s(?'
                                        .'|(*:1525)'
                                        .'|/(?'
                                            .'|xhr(*:1541)'
                                            .'|mass\\-xhr(*:1559)'
                                            .'|filter\\-options(*:1583)'
                                            .'|search\\-filter\\-options(*:1615)'
                                        .')'
                                    .')'
                                    .'|/(?'
                                        .'|view(?:/([^/]++))?(*:1648)'
                                        .'|xhr(?:/([^/]++))?(*:1674)'
                                        .'|s(?'
                                            .'|ave(?'
                                                .'|(*:1693)'
                                                .'|d\\-reply\\-apply(?:/([^/]++))?(*:1731)'
                                            .')'
                                            .'|earch\\-filter\\-options(?'
                                                .'|(*:1766)'
                                            .')'
                                        .')'
                                        .'|trash/([^/]++)(*:1791)'
                                        .'|d(?'
                                            .'|elete/([^/]++)(*:1818)'
                                            .'|ownload(?'
                                                .'|(?:/([^/]++))?(*:1851)'
                                                .'|\\-zip(?:/([^/]++))?(*:1879)'
                                            .')'
                                        .')'
                                        .'|labels/(?'
                                            .'|save(*:1904)'
                                            .'|update(?:/([^/]++))?(*:1933)'
                                        .')'
                                        .'|bookmark/xhr(*:1955)'
                                        .'|update/(?'
                                            .'|details/([^/]++)(*:1990)'
                                            .'|attributes(?:/([^/]++))?(*:2023)'
                                        .')'
                                        .'|collaborator(?:/([^/]++))?(*:2059)'
                                        .'|quick\\-view(?:/([^/]++))?(*:2093)'
                                        .'|prepared\\-response/xhr(?:/([^/]++)(?:/([^/]++))?)?(*:2152)'
                                    .')'
                                    .'|\\-types(?'
                                        .'|(*:2172)'
                                        .'|/(?'
                                            .'|xhr(*:2188)'
                                            .'|create(*:2203)'
                                            .'|remove(?:/([^/]++))?(*:2232)'
                                            .'|update/([^/]++)(*:2256)'
                                        .')'
                                    .')'
                                .')'
                            .')'
                            .'|m(?'
                                .'|ember/access\\-token(*:2292)'
                                .'|ailbox/outlook/listener(*:2324)'
                            .')'
                            .'|s(?'
                                .'|aved\\-(?'
                                    .'|filter\\-xhr(?:/([^/]++))?(*:2372)'
                                    .'|repl(?'
                                        .'|ies(?'
                                            .'|(*:2394)'
                                            .'|/xhr(?:/([^/]++))?(*:2421)'
                                        .')'
                                        .'|y/(?'
                                            .'|edit(?:/([^/]++))?(*:2454)'
                                            .'|add(?:/([^/]++))?(*:2480)'
                                        .')'
                                    .')'
                                .')'
                                .'|e(?'
                                    .'|ttings/(?'
                                        .'|swiftmailer(?'
                                            .'|(*:2520)'
                                            .'|/(?'
                                                .'|xhr(?'
                                                    .'|(*:2539)'
                                                    .'|/remove\\-configurations(*:2571)'
                                                .')'
                                                .'|create(*:2587)'
                                                .'|update/([^/]++)(*:2611)'
                                            .')'
                                        .')'
                                        .'|email/settings(*:2636)'
                                        .'|m(?'
                                            .'|icrosoft\\-apps(?'
                                                .'|(*:2666)'
                                                .'|/(?'
                                                    .'|xhr(?'
                                                        .'|(*:2685)'
                                                        .'|/(?'
                                                            .'|status(?:/([^/]++))?(*:2718)'
                                                            .'|remove(?:/([^/]++))?(*:2747)'
                                                        .')'
                                                    .')'
                                                    .'|create(*:2764)'
                                                    .'|update(?:/([^/]++))?(*:2793)'
                                                .')'
                                            .')'
                                            .'|ailbox(?'
                                                .'|(*:2813)'
                                                .'|/(?'
                                                    .'|xhr(*:2829)'
                                                    .'|create(*:2844)'
                                                    .'|update(?:/([^/]++))?(*:2873)'
                                                    .'|remove(?:/([^/]++))?(*:2902)'
                                                .')'
                                            .')'
                                        .')'
                                    .')'
                                    .'|rvice\\-call(*:2926)'
                                .')'
                                .'|upport\\-tags(?'
                                    .'|(*:2951)'
                                    .'|/(?'
                                        .'|xhr(*:2967)'
                                        .'|create(?:/([^/]++))?(*:2996)'
                                        .'|update(?:/([^/]++))?(*:3025)'
                                        .'|remove(?:/([^/]++))?(*:3054)'
                                    .')'
                                .')'
                            .')'
                            .'|email/xhr/settings_update(*:3091)'
                            .'|reports/achievements(?'
                                .'|(*:3123)'
                                .'|\\-data(*:3138)'
                            .')'
                            .'|integrations/microsoft\\-apps/(?'
                                .'|add\\-account/([^/]++)/([^/]++)(*:3210)'
                                .'|oauth/login(*:3230)'
                            .')'
                            .'|workflow(?'
                                .'|s(?'
                                    .'|(*:3255)'
                                    .'|/xhr(*:3268)'
                                .')'
                                .'|/(?'
                                    .'|add(*:3285)'
                                    .'|edit/([^/]++)(*:3307)'
                                    .'|xhr/(?'
                                        .'|condition/options(?:/([^/]++))?(*:3354)'
                                        .'|action/options(?:/([^/]++)(?:/([^/]++))?)?(*:3405)'
                                    .')'
                                .')'
                                .'|\\-ajax(?:/([^/]++))?(*:3436)'
                            .')'
                            .'|file\\-(?'
                                .'|upload(*:3461)'
                                .'|remove(*:3476)'
                            .')'
                            .'|url\\-upload(*:3497)'
                            .'|knowledgebase/folders(?'
                                .'|(*:3530)'
                                .'|/(?'
                                    .'|xhr(*:3546)'
                                    .'|new(*:3558)'
                                    .'|update(?'
                                        .'|(?:/([^/]++))?(*:3590)'
                                        .'|/xhr(?:/([^/]++))?(*:3617)'
                                    .')'
                                .')'
                            .')'
                            .'|branding/locales/ajax(*:3650)'
                            .'|([^/]++)/categories(*:3678)'
                            .'|categories/ajax(*:3702)'
                            .'|([^/]++)/categories/ajax(*:3735)'
                            .'|category/(?'
                                .'|a(?'
                                    .'|dd(*:3762)'
                                    .'|jax(?:/([^/]++))?(*:3788)'
                                .')'
                                .'|edit(?:/([^/]++))?(*:3816)'
                            .')'
                            .'|articles(*:3834)'
                            .'|([^/]++)/articles(*:3860)'
                            .'|s(?'
                                .'|olution/([^/]++)/articles(?'
                                    .'|(*:3901)'
                                    .'|/ajax(*:3915)'
                                .')'
                                .'|ettings/api(?'
                                    .'|(*:3939)'
                                    .'|/(?'
                                        .'|xhr(*:3955)'
                                        .'|create(*:3970)'
                                        .'|update/xhr(?:/([^/]++))?(*:4003)'
                                    .')'
                                .')'
                            .')'
                            .'|a(?'
                                .'|rticle(?'
                                    .'|s/ajax(*:4034)'
                                    .'|/(?'
                                        .'|a(?'
                                            .'|dd(*:4053)'
                                            .'|jax(?:/([^/]++))?(*:4079)'
                                        .')'
                                        .'|edit(?:/([^/]++))?(*:4107)'
                                    .')'
                                    .'|History(?:/([^/]++))?(*:4138)'
                                    .'|Related(?:/([^/]++))?(*:4168)'
                                .')'
                                .'|nnouncement/(?'
                                    .'|list(*:4197)'
                                    .'|xhr(*:4209)'
                                .')'
                            .')'
                            .'|b(?'
                                .'|randing/(?'
                                    .'|theme(?:/([^/]++))?(*:4254)'
                                    .'|ajax(*:4267)'
                                .')'
                                .'|lock/spam(*:4286)'
                            .')'
                            .'|knowledgebase/(?'
                                .'|announcement/(?'
                                    .'|new(*:4332)'
                                    .'|update(?:/([^/]++))?(*:4361)'
                                    .'|remove(?:/([^/]++))?(*:4390)'
                                .')'
                                .'|marketing/module(?'
                                    .'|/new(*:4423)'
                                    .'|(?:/([^/]++))?(*:4446)'
                                    .'|/xhr/delete(?:/([^/]++))?(*:4480)'
                                .')'
                            .')'
                            .'|module/(?'
                                .'|list(*:4505)'
                                .'|xhr(*:4517)'
                            .')'
                        .')'
                        .'|fo(?'
                            .'|rgot\\-password(*:4547)'
                            .'|lder(?'
                                .'|(?:/([^/]++))?(*:4577)'
                                .'|/([^/]++)/articles(*:4604)'
                            .')'
                        .')'
                        .'|update\\-credentials(?:/([^/]++)(?:/([^/]++))?)?(*:4662)'
                        .'|c(?'
                            .'|ustomer/(?'
                                .'|log(?'
                                    .'|in(*:4694)'
                                    .'|out(*:4706)'
                                .')'
                                .'|a(?'
                                    .'|ccount(*:4726)'
                                    .'|ttachment/([^/]++)/view(*:4758)'
                                .')'
                                .'|t(?'
                                    .'|icket(?'
                                        .'|s(?'
                                            .'|(*:4784)'
                                            .'|/xhr(*:4797)'
                                        .')'
                                        .'|/(?'
                                            .'|view(?:/([^/]++))?(*:4829)'
                                            .'|rate(?:/([^/]++))?(*:4856)'
                                            .'|d(?'
                                                .'|raft\\-save(?:/([^/]++))?(*:4893)'
                                                .'|ownload(?'
                                                    .'|(?:/([^/]++))?(*:4926)'
                                                    .'|\\-ticket\\-zip(?:/([^/]++))?(*:4962)'
                                                .')'
                                            .')'
                                            .'|collaborator(?:/([^/]++))?(*:4999)'
                                            .'|success(?:/([^/]++)(?:/([^/]++))?)?(*:5043)'
                                        .')'
                                    .')'
                                    .'|hread(?'
                                        .'|s/ajax(?:/([^/]++))?(*:5082)'
                                        .'|/(?'
                                            .'|save(?:/([^/]++))?(*:5113)'
                                            .'|encoded\\-images/save/([^/]++)(*:5151)'
                                        .')'
                                    .')'
                                .')'
                                .'|c(?'
                                    .'|reate\\-ticket(*:5180)'
                                    .'|ustomer/(?'
                                        .'|marketing/modules/xhr(*:5221)'
                                        .'|login/(?'
                                            .'|genrate/otp(*:5250)'
                                            .'|otp/verify(*:5269)'
                                        .')'
                                    .')'
                                .')'
                                .'|search/article(?:/([^/]++))?(*:5309)'
                            .')'
                            .'|ategor(?'
                                .'|ies(*:5331)'
                                .'|y(?:/([^/]++))?(*:5355)'
                            .')'
                        .')'
                        .'|exception(*:5375)'
                        .'|article(?:/([^/]++))?(*:5405)'
                        .'|blog(?:/([^/]++))?(*:5432)'
                        .'|rating/([^/]++)(*:5456)'
                        .'|search(?:/([^/]++))?(*:5485)'
                        .'|tag(?:/([^/]++)(?:/([^/]++))?)?(*:5525)'
                    .')'
                    .'|(*:5535)'
                .')'
                .'|/api/v1/(?'
                    .'|agents/(?'
                        .'|([^/]++)(*:5574)'
                        .'|create(*:5589)'
                        .'|update/([^/]++)(*:5613)'
                        .'|delete/([^/]++)(*:5637)'
                    .')'
                    .'|customers/(?'
                        .'|([^/]++)(*:5668)'
                        .'|create(*:5683)'
                        .'|update/([^/]++)(*:5707)'
                        .'|delete/([^/]++)(*:5731)'
                    .')'
                    .'|t(?'
                        .'|eams/(?'
                            .'|([^/]++)(*:5761)'
                            .'|create(*:5776)'
                            .'|update/([^/]++)(*:5800)'
                            .'|delete/([^/]++)(*:5824)'
                        .')'
                        .'|rash/ticket/(\\d+)(*:5851)'
                        .'|icket/(?'
                            .'|([^/]++)(*:5877)'
                            .'|(\\d+)/agent(*:5897)'
                            .'|(\\d+)/collaborator(*:5924)'
                            .'|attachment/(\\d+)(*:5949)'
                            .'|download\\-zip/(\\d+)(*:5977)'
                            .'|([^/]++)(*:5994)'
                            .'|(\\d+)/thread(*:6015)'
                        .')'
                    .')'
                    .'|groups/(?'
                        .'|([^/]++)(*:6044)'
                        .'|create(*:6059)'
                        .'|update/([^/]++)(*:6083)'
                        .'|delete/([^/]++)(*:6107)'
                    .')'
                    .'|delete/ticket/(\\d+)(*:6136)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        229 => [[['_route' => 'helpdesk_member_handle_login', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\Authentication::login', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        240 => [[['_route' => 'helpdesk_member_handle_logout', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\Authentication::logout', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        258 => [[['_route' => 'helpdesk_member_dashboard', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\Account::loadDashboard', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        282 => [
            [['_route' => 'helpdesk_member_profile', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\Account::loadProfile', '_locale' => 'en'], ['_locale'], null, null, false, false, null],
            [['_route' => 'edit_profile', 'panelId' => 'usersprofile', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\UserActivityController::editProfile', '_locale' => 'en'], ['_locale'], null, null, false, false, null],
        ],
        303 => [[['_route' => 'helpdesk_member_mailbox_direct_convert_mail', '_controller' => 'Webkul\\UVDesk\\MailboxBundle\\Controller\\MailboxChannelXHR::processRawContentMail', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        326 => [[['_route' => 'helpdesk_member_privilege_collection', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\Privilege::listPrivilege', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        338 => [[['_route' => 'helpdesk_member_privilege_collection_xhr', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\PrivilegeXHR::listPrivilegeXHR', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        359 => [[['_route' => 'helpdesk_member_update_privilege', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\Privilege::editPrivilege', '_locale' => 'en'], ['_locale', 'supportPrivilegeId'], null, null, false, true, null]],
        391 => [[['_route' => 'helpdesk_member_remove_privilege_xhr', 'supportPrivilegeId' => 0, '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\PrivilegeXHR::deletePrivilegeXHR', '_locale' => 'en'], ['_locale', 'supportPrivilegeId'], null, null, false, true, null]],
        421 => [[['_route' => 'prepare_response_action', '_controller' => 'Webkul\\UVDesk\\AutomationBundle\\Controller\\Automations\\PreparedResponse::prepareResponseList', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        453 => [[['_route' => 'prepare_response_delete', 'id' => 0, '_controller' => 'Webkul\\UVDesk\\AutomationBundle\\Controller\\Automations\\PreparedResponseXHR::prepareResponseDeleteXhr', '_locale' => 'en'], ['_locale', 'id'], null, null, false, true, null]],
        468 => [[['_route' => 'prepare_response_list_xhr', '_controller' => 'Webkul\\UVDesk\\AutomationBundle\\Controller\\Automations\\PreparedResponseXHR::prepareResponseListXhr', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        478 => [[['_route' => 'prepare_response_addaction', '_controller' => 'Webkul\\UVDesk\\AutomationBundle\\Controller\\Automations\\PreparedResponse::createPrepareResponse', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        505 => [[['_route' => 'prepare_response_editaction', 'id' => 0, '_controller' => 'Webkul\\UVDesk\\AutomationBundle\\Controller\\Automations\\PreparedResponse::editPrepareResponse', '_locale' => 'en'], ['_locale', 'id'], null, null, false, true, null]],
        559 => [[['_route' => 'helpdesk_member_prepared_response_action_options_xhr', 'entity' => 'default', 'event' => null, '_controller' => 'Webkul\\UVDesk\\AutomationBundle\\Controller\\Automations\\PreparedResponseXHR::getPreparedResponseActionOptionsXHR', '_locale' => 'en'], ['_locale', 'entity', 'event'], null, null, false, true, null]],
        599 => [[['_route' => 'helpdesk_member_account_xhr', 'agentId' => 0, '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\AccountXHR::deleteAgent', '_locale' => 'en'], ['_locale', 'agentId'], null, null, false, true, null]],
        621 => [[['_route' => 'helpdesk_member_account', 'agentId' => 0, '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\Account::editAgent', '_locale' => 'en'], ['_locale', 'agentId'], null, null, false, true, null]],
        633 => [[['_route' => 'helpdesk_member_account_collection', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\Account::listAgents', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        645 => [[['_route' => 'helpdesk_member_account_collection_xhr', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\AccountXHR::listAgentsXHR', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        671 => [[['_route' => 'helpdesk_member_agent_activity', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\Report::listAgentActivity', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        682 => [[['_route' => 'helpdesk_member_agent_activity_xhr', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\Report::agentActivityXHR', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        698 => [[['_route' => 'uvdesk_extensions_applications_dashboard', 'panelId' => 'apps', '_controller' => 'Webkul\\UVDesk\\ExtensionFrameworkBundle\\Controller\\Dashboard::applications', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        720 => [[['_route' => 'uvdesk_extensions_applications_dashboard_xhr', '_controller' => 'Webkul\\UVDesk\\ExtensionFrameworkBundle\\Controller\\Dashboard::applicationsXHR', '_locale' => 'en'], ['_locale'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        757 => [[['_route' => 'uvdesk_extensions_standalone_application_dashboard', '_controller' => 'Webkul\\UVDesk\\ExtensionFrameworkBundle\\Controller\\Application::dashboard', '_locale' => 'en'], ['_locale', 'vendor', 'package', 'qualifiedName'], null, null, false, true, null]],
        772 => [[['_route' => 'uvdesk_extensions_standalone_application_api_endpoint', '_controller' => 'Webkul\\UVDesk\\ExtensionFrameworkBundle\\Controller\\Application::apiEndpointXHR', '_locale' => 'en'], ['_locale', 'vendor', 'package', 'qualifiedName'], ['GET' => 0, 'POST' => 1, 'PUT' => 2, 'DELETE' => 3], null, false, false, null]],
        788 => [[['_route' => 'uvdesk_extensions_standalone_application_callback_endpoint', '_controller' => 'Webkul\\UVDesk\\ExtensionFrameworkBundle\\Controller\\Application::callbackEndpointXHR', '_locale' => 'en'], ['_locale', 'vendor', 'package', 'qualifiedName'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        819 => [[['_route' => 'helpdesk_member_create_account', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\Account::createAgent', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        832 => [[['_route' => 'helpdesk_member_create_support_group', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\Group::createGroup', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        844 => [[['_route' => 'helpdesk_member_create_support_team', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\Team::createTeam', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        861 => [[['_route' => 'helpdesk_member_create_privilege', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\Privilege::createPrivilege', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        877 => [[['_route' => 'helpdesk_member_create_customer_account', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\Customer::createCustomer', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        900 => [[['_route' => 'helpdesk_member_manage_customer_account_collection', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\Customer::listCustomers', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        912 => [[['_route' => 'helpdesk_member_manage_customer_account_collection_xhr', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\CustomerXHR::listCustomersXHR', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        934 => [[['_route' => 'helpdesk_member_bookmark_customer_xhr', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\Customer::bookmarkCustomer', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        956 => [[['_route' => 'helpdesk_member_manage_customer_account', 'customerId' => 0, '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\Customer::editCustomer', '_locale' => 'en'], ['_locale', 'customerId'], null, null, false, true, null]],
        982 => [[['_route' => 'helpdesk_member_remove_customer_account_xhr', 'customerId' => 0, '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\CustomerXHR::removeCustomerXHR', '_locale' => 'en'], ['_locale', 'customerId'], null, null, false, true, null]],
        1005 => [[['_route' => 'helpdesk_member_cache_clear', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\Authentication::clearProjectCache', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        1022 => [[['_route' => 'helpdesk_member_knowledgebase_category_collection', '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Category::CategoryList', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        1045 => [[['_route' => 'helpdesk_member_support_group_collection', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\Group::listGroups', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        1058 => [[['_route' => 'helpdesk_member_support_group_collection_xhr', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\GroupXHR::listGroupsXHR', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        1080 => [[['_route' => 'helpdesk_member_update_support_group', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\Group::editGroup', '_locale' => 'en'], ['_locale', 'supportGroupId'], null, null, false, true, null]],
        1113 => [[['_route' => 'helpdesk_member_remove_support_group_xhr', 'supportGroupId' => 0, '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\GroupXHR::deleteGroupXHR', '_locale' => 'en'], ['_locale', 'supportGroupId'], null, null, false, true, null]],
        1141 => [[['_route' => 'helpdesk_member_support_team_collection', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\Team::listTeams', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        1154 => [[['_route' => 'helpdesk_member_support_team_collection_xhr', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\TeamXHR::listTeamsXHR', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        1176 => [[['_route' => 'helpdesk_member_update_support_team', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\Team::editTeam', '_locale' => 'en'], ['_locale', 'supportTeamId'], null, null, false, true, null]],
        1209 => [[['_route' => 'helpdesk_member_remove_support_team_xhr', 'supportTeamId' => 0, '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\TeamXHR::deleteTeamXHR', '_locale' => 'en'], ['_locale', 'supportTeamId'], null, null, false, true, null]],
        1230 => [[['_route' => 'email_templates_action', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\Email::templates', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        1259 => [[['_route' => 'email_templates_xhr_action', 'template' => 0, '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\Email::templatesxhr', '_locale' => 'en'], ['_locale', 'template'], null, null, false, true, null]],
        1275 => [[['_route' => 'email_templates_add_action', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\Email::templateForm', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        1302 => [[['_route' => 'email_templates_edit_action', 'template' => 0, '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\Email::templateForm', '_locale' => 'en'], ['_locale', 'template'], null, null, false, true, null]],
        1330 => [[['_route' => 'helpdesk_member_helpdesk_theme', 'id' => 0, '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\Theme::updateHelpdeskTheme', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        1372 => [[['_route' => 'helpdesk_member_thread_collection_xhr', 'ticketId' => 0, '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\ThreadXHR::listTicketThreadCollectionXHR', '_locale' => 'en'], ['_locale', 'ticketId'], null, null, false, true, null]],
        1402 => [[['_route' => 'helpdesk_member_thread_xhr', 'threadId' => 0, '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\Thread::threadXHR', '_locale' => 'en'], ['_locale', 'threadId'], null, null, false, true, null]],
        1432 => [[['_route' => 'helpdesk_member_thread_update_xhr', 'threadId' => 0, '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\Thread::updateThreadXHR', '_locale' => 'en'], ['_locale', 'threadId'], null, null, false, true, null]],
        1475 => [[['_route' => 'helpdesk_member_thread_encoded_image_uploader', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\Thread::base64ImageUpload', '_locale' => 'en'], ['_locale', 'ticketId'], null, null, false, true, null]],
        1501 => [[['_route' => 'helpdesk_member_add_ticket_thread', 'ticketId' => 0, '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\Thread::saveThread', '_locale' => 'en'], ['_locale', 'ticketId'], null, null, false, true, null]],
        1525 => [[['_route' => 'helpdesk_member_ticket_collection', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\Ticket::listTicketCollection', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        1541 => [[['_route' => 'helpdesk_member_ticket_collection_xhr', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\TicketXHR::listTicketCollectionXHR', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        1559 => [[['_route' => 'helpdesk_member_ticket_collection_mass_action_xhr', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\TicketXHR::updateTicketCollectionXHR', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        1583 => [[['_route' => 'helpdesk_member_ticket_collection_load_filter_options_xhr', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\TicketXHR::loadTicketFilterOptionsXHR', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        1615 => [[['_route' => 'helpdesk_member_ticket_collection_search_filter_options_xhr', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\TicketXHR::loadTicketCollectionSearchFilterOptionsXHR', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        1648 => [[['_route' => 'helpdesk_member_ticket', 'ticketId' => 0, '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\Ticket::loadTicket', '_locale' => 'en'], ['_locale', 'ticketId'], null, null, false, true, null]],
        1674 => [[['_route' => 'helpdesk_member_ticket_xhr', 'ticketId' => 0, '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\TicketXHR::loadTicketXHR', '_locale' => 'en'], ['_locale', 'ticketId'], null, null, false, true, null]],
        1693 => [[['_route' => 'helpdesk_member_create_ticket', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\Ticket::saveTicket', '_locale' => 'en'], ['_locale'], ['POST' => 0, 'PUT' => 1], null, false, false, null]],
        1731 => [[['_route' => 'helpdesk_member_ticket_saved_reply_xhr', 'id' => 0, '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\TicketXHR::loadTicketSavedReplies', '_locale' => 'en'], ['_locale', 'id'], null, null, false, true, null]],
        1766 => [
            [['_route' => 'search_ticket_filter_options_xhr', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\TicketXHR::getSearchFilterOptionsXhr', '_locale' => 'en'], ['_locale'], null, null, false, false, null],
            [['_route' => 'helpdesk_member_ticket_search_filter_options', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\TicketXHR::loadTicketSearchFilterOptions', '_locale' => 'en'], ['_locale'], null, null, false, false, null],
        ],
        1791 => [[['_route' => 'helpdesk_member_trash_ticket', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\Ticket::trashTicket', '_locale' => 'en'], ['_locale', 'ticketId'], null, null, false, true, null]],
        1818 => [[['_route' => 'helpdesk_member_delete_ticket', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\Ticket::deleteTicket', '_locale' => 'en'], ['_locale', 'ticketId'], null, null, false, true, null]],
        1851 => [[['_route' => 'helpdesk_member_ticket_download_attachment', 'attachmendId' => 0, '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\Ticket::downloadAttachment', '_locale' => 'en'], ['_locale', 'attachmendId'], null, null, false, true, null]],
        1879 => [[['_route' => 'helpdesk_member_ticket_download_attachment_zip', 'threadId' => 0, '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\Ticket::downloadZipAttachment', '_locale' => 'en'], ['_locale', 'threadId'], null, null, false, true, null]],
        1904 => [[['_route' => 'helpdesk_member_ticket_add_label_xhr', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\TicketXHR::saveTicketLabel', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        1933 => [[['_route' => 'helpdesk_member_ticket_label_xhr', 'ticketLabelId' => 0, '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\TicketXHR::ticketLabelXHR', '_locale' => 'en'], ['_locale', 'ticketLabelId'], null, null, false, true, null]],
        1955 => [[['_route' => 'helpdesk_member_bookmark_ticket_xhr', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\TicketXHR::bookmarkTicketXHR', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        1990 => [[['_route' => 'helpdesk_member_update_ticket_details_xhr', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\TicketXHR::updateTicketDetails', '_locale' => 'en'], ['_locale', 'ticketId'], null, null, false, true, null]],
        2023 => [[['_route' => 'helpdesk_member_update_ticket_attributes_xhr', 'ticketId' => 0, '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\TicketXHR::updateTicketAttributes', '_locale' => 'en'], ['_locale', 'ticketId'], null, null, false, true, null]],
        2059 => [[['_route' => 'helpdesk_member_ticket_manage_collaborators_xhr', 'id' => 0, '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\TicketXHR::updateCollaboratorXHR', '_locale' => 'en'], ['_locale', 'id'], null, null, false, true, null]],
        2093 => [[['_route' => 'helpdesk_member_ticket_quick_view_xhr', 'ticketId' => 0, '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\TicketXHR::getTicketQuickViewDetailsXhr', '_locale' => 'en'], ['_locale', 'ticketId'], null, null, false, true, null]],
        2152 => [[['_route' => 'helpdesk_member_ticket_prepared_response_xhr', 'ticketId' => 0, 'id' => 0, '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\TicketXHR::applyTicketPreparedResponseXHR', '_locale' => 'en'], ['_locale', 'ticketId', 'id'], null, null, false, true, null]],
        2172 => [[['_route' => 'helpdesk_member_ticket_type_collection', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\Ticket::listTicketTypeCollection', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        2188 => [[['_route' => 'helpdesk_member_ticket_type_collection_xhr', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\TicketXHR::listTicketTypeCollectionXHR', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        2203 => [[['_route' => 'helpdesk_member_create_ticket_type', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\Ticket::ticketType', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        2232 => [[['_route' => 'helpdesk_member_remove_ticket_type', 'typeId' => 0, '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\TicketXHR::removeTicketTypeXHR', '_locale' => 'en'], ['_locale', 'typeId'], null, null, false, true, null]],
        2256 => [[['_route' => 'helpdesk_member_update_ticket_type', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\Ticket::ticketType', '_locale' => 'en'], ['_locale', 'ticketTypeId'], null, null, false, true, null]],
        2292 => [[['_route' => 'access_token_xhr', '_controller' => 'CoreFrameworkBundle:Api:accessTokenXhr', '_locale' => 'en'], ['_locale'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        2324 => [[['_route' => 'helpdesk_member_outlook_mailbox_notification', '_controller' => 'Webkul\\UVDesk\\MailboxBundle\\Controller\\MailboxChannelXHR::processOutlookMailXHR', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        2372 => [[['_route' => 'helpdesk_member_saved_filters_xhr', 'filterId' => 0, '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\AccountXHR::savedFiltersXHR', '_locale' => 'en'], ['_locale', 'filterId'], null, null, false, true, null]],
        2394 => [[['_route' => 'helpdesk_member_saved_replies', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\SavedReplies::loadSavedReplies', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        2421 => [[['_route' => 'helpdesk_member_saved_replies_xhr', 'template' => 0, '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\SavedReplies::savedRepliesXHR', '_locale' => 'en'], ['_locale', 'template'], null, null, false, true, null]],
        2454 => [[['_route' => 'helpdesk_member_update_saved_replies', 'template' => 0, '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\SavedReplies::updateSavedReplies', '_locale' => 'en'], ['_locale', 'template'], null, null, false, true, null]],
        2480 => [[['_route' => 'helpdesk_member_create_saved_replies', 'template' => 0, '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\SavedReplies::updateSavedReplies', '_locale' => 'en'], ['_locale', 'template'], null, null, false, true, null]],
        2520 => [[['_route' => 'helpdesk_member_swiftmailer_settings', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\SwiftMailer::loadMailers', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        2539 => [[['_route' => 'helpdesk_member_swiftmailer_load_configurations_xhr', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\SwiftMailerXHR::loadMailersXHR', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        2571 => [[['_route' => 'helpdesk_member_swiftmailer_remove_mailer_configuration_xhr', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\SwiftMailerXHR::removeMailerConfiguration', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        2587 => [[['_route' => 'helpdesk_member_swiftmailer_create_mailer_configuration', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\SwiftMailer::createMailerConfiguration', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        2611 => [[['_route' => 'helpdesk_member_swiftmailer_update_mailer_configuration', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\SwiftMailer::updateMailerConfiguration', '_locale' => 'en'], ['_locale', 'id'], null, null, false, true, null]],
        2636 => [[['_route' => 'helpdesk_member_emails_settings', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\EmailSettings::loadSettings', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        2666 => [[['_route' => 'uvdesk_member_core_framework_microsoft_apps_settings', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\Microsoft\\MicrosoftApps::loadSettings', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        2685 => [[['_route' => 'uvdesk_member_core_framework_microsoft_apps_settings_load_configurations_xhr', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\Microsoft\\MicrosoftAppsXHR::loadSettingsXHR', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        2718 => [[['_route' => 'uvdesk_member_core_framework_microsoft_apps_settings_toggle_configuration_status', 'id' => '', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\Microsoft\\MicrosoftAppsXHR::toggleConfigurationStatus', '_locale' => 'en'], ['_locale', 'id'], null, null, false, true, null]],
        2747 => [[['_route' => 'uvdesk_member_core_framework_microsoft_apps_settings_remove_configuration', 'id' => '', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\Microsoft\\MicrosoftAppsXHR::removeConfiguration', '_locale' => 'en'], ['_locale', 'id'], null, null, false, true, null]],
        2764 => [[['_route' => 'uvdesk_member_core_framework_microsoft_apps_settings_create_configuration', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\Microsoft\\MicrosoftApps::createConfiguration', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        2793 => [[['_route' => 'uvdesk_member_core_framework_microsoft_apps_settings_update_configuration', 'id' => '', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\Microsoft\\MicrosoftApps::updateConfiguration', '_locale' => 'en'], ['_locale', 'id'], null, null, false, true, null]],
        2813 => [[['_route' => 'helpdesk_member_mailbox_settings', '_controller' => 'Webkul\\UVDesk\\MailboxBundle\\Controller\\MailboxChannel::loadMailboxes', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        2829 => [[['_route' => 'helpdesk_member_mailbox_load_configurations_xhr', '_controller' => 'Webkul\\UVDesk\\MailboxBundle\\Controller\\MailboxChannelXHR::loadMailboxesXHR', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        2844 => [[['_route' => 'helpdesk_member_mailbox_create_configuration', '_controller' => 'Webkul\\UVDesk\\MailboxBundle\\Controller\\MailboxChannel::createMailboxConfiguration', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        2873 => [[['_route' => 'helpdesk_member_mailbox_update_configuration', 'id' => '', '_controller' => 'Webkul\\UVDesk\\MailboxBundle\\Controller\\MailboxChannel::updateMailboxConfiguration', '_locale' => 'en'], ['_locale', 'id'], null, null, false, true, null]],
        2902 => [[['_route' => 'helpdesk_member_mailbox_remove_configuration_xhr', 'id' => '', '_controller' => 'Webkul\\UVDesk\\MailboxBundle\\Controller\\MailboxChannelXHR::removeMailboxConfiguration', '_locale' => 'en'], ['_locale', 'id'], null, null, false, true, null]],
        2926 => [[['_route' => 'ajax_service_call', '_controller' => 'Webkul\\UVDesk\\DefaultBundle\\Controller\\Default::ajaxServiceCall', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        2951 => [[['_route' => 'helpdesk_member_ticket_tag_collection', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\Ticket::listTagCollection', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        2967 => [[['_route' => 'helpdesk_member_ticket_tag_collection_xhr', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\TicketXHR::listTagCollectionXHR', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        2996 => [[['_route' => 'helpdesk_member_ticket_create_tag_xhr', 'id' => 0, '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\TicketXHR::createTicketTagXHR', '_locale' => 'en'], ['_locale', 'id'], null, null, false, true, null]],
        3025 => [[['_route' => 'helpdesk_member_update_ticket_tag_xhr', 'tagId' => 0, '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\TicketXHR::updateTicketTagXHR', '_locale' => 'en'], ['_locale', 'tagId'], null, null, false, true, null]],
        3054 => [[['_route' => 'helpdesk_member_remove_ticket_tag_xhr', 'tagId' => 0, '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\TicketXHR::removeTicketTagXHR', '_locale' => 'en'], ['_locale', 'tagId'], null, null, false, true, null]],
        3091 => [[['_route' => 'helpdesk_member_update_emails_settings_xhr', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\EmailSettingsXHR::updateSettingsXHR', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        3123 => [[['_route' => 'helpdesk_report_achievements_insight_action', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\Report::achievementInsightsAction', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        3138 => [[['_route' => 'helpdesk_report_achievements_data_xhr', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\Report::getAchievementsXhr', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        3210 => [[['_route' => 'uvdesk_member_core_framework_integrations_microsoft_apps_add_account', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\Microsoft\\MicrosoftApps::addMicrosoftAccount', '_locale' => 'en'], ['_locale', 'appId', 'origin'], null, null, false, true, null]],
        3230 => [[['_route' => 'uvdesk_member_core_framework_integrations_microsoft_apps_oauth_login', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\Microsoft\\MicrosoftApps::handleOAuthCallback', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        3255 => [[['_route' => 'helpdesk_member_workflow_collection', '_controller' => 'Webkul\\UVDesk\\AutomationBundle\\Controller\\Automations\\Workflow::listWorkflowCollection', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        3268 => [[['_route' => 'workflowslist_xhr', '_controller' => 'Webkul\\UVDesk\\AutomationBundle\\Controller\\Automations\\WorkflowXHR::workflowsListXhr', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        3285 => [[['_route' => 'workflows_addaction', '_controller' => 'Webkul\\UVDesk\\AutomationBundle\\Controller\\Automations\\Workflow::createWorkflow', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        3307 => [[['_route' => 'workflows_editaction', '_controller' => 'Webkul\\UVDesk\\AutomationBundle\\Controller\\Automations\\Workflow::editWorkflow', '_locale' => 'en'], ['_locale', 'id'], null, null, false, true, null]],
        3354 => [[['_route' => 'helpdesk_member_workflow_condition_options_xhr', 'entity' => 'default', '_controller' => 'Webkul\\UVDesk\\AutomationBundle\\Controller\\Automations\\WorkflowXHR::getWorkflowConditionOptionsXHR', '_locale' => 'en'], ['_locale', 'entity'], null, null, false, true, null]],
        3405 => [[['_route' => 'helpdesk_member_workflow_action_options_xhr', 'entity' => 'default', 'event' => null, '_controller' => 'Webkul\\UVDesk\\AutomationBundle\\Controller\\Automations\\WorkflowXHR::getWorkflowActionOptionsXHR', '_locale' => 'en'], ['_locale', 'entity', 'event'], null, null, false, true, null]],
        3436 => [[['_route' => 'workflows_xhraction', 'id' => 0, '_controller' => 'Webkul\\UVDesk\\AutomationBundle\\Controller\\Automations\\WorkflowXHR::WorkflowsxhrAction', '_locale' => 'en'], ['_locale', 'id'], null, null, false, true, null]],
        3461 => [[['_route' => 'ajax_file_upload', '_controller' => 'Webkul\\UVDesk\\DefaultBundle\\Controller\\Default::ajaxFileUpload', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        3476 => [[['_route' => 'ajax_file_remove', '_controller' => 'Webkul\\UVDesk\\DefaultBundle\\Controller\\Default::ajaxFileRemove', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        3497 => [[['_route' => 'ajax_url_file', '_controller' => 'Webkul\\UVDesk\\DefaultBundle\\Controller\\Default::ajaxUrlFileUpload', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        3530 => [[['_route' => 'helpdesk_member_knowledgebase_folders_collection', '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Folder::listFolders', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        3546 => [[['_route' => 'helpdesk_member_knowledgebase_folders_collection_xhr', '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\KnowledgebaseXHR::listFoldersXHR', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        3558 => [[['_route' => 'helpdesk_member_knowledgebase_create_folder', '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Folder::createFolder', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        3590 => [[['_route' => 'helpdesk_member_knowledgebase_update_folder', 'folderId' => 0, '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Folder::updateFolder', '_locale' => 'en'], ['_locale', 'folderId'], null, null, false, true, null]],
        3617 => [[['_route' => 'helpdesk_member_knowledgebase_update_folder_xhr', 'folderId' => 0, '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\KnowledgebaseXHR::updateFolderXHR', '_locale' => 'en'], ['_locale', 'folderId'], null, null, false, true, null]],
        3650 => [[['_route' => 'helpdesk_member_knowledgebase_update_locales', '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Branding::LocalesUpdateXhr', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        3678 => [[['_route' => 'helpdesk_member_knowledgebase_folder_categories_collection', 'solution' => 0, '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Category::CategoryListBySolution', '_locale' => 'en'], ['_locale', 'solution'], null, null, false, false, null]],
        3702 => [[['_route' => 'helpdesk_member_knowledgebase_category_collection_xhr', '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Category::CategoryListXhr', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        3735 => [[['_route' => 'helpdesk_member_knowledgebase_folder_categories_collection_xhr', 'solution' => 0, '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Category::CategoryListXhr', '_locale' => 'en'], ['_locale', 'solution'], null, null, false, false, null]],
        3762 => [[['_route' => 'helpdesk_member_knowledgebase_create_category', '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Category::Category', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        3788 => [[['_route' => 'helpdesk_member_knowledgebase_update_category_xhr', 'id' => 0, '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Category::CategoryXhr', '_locale' => 'en'], ['_locale', 'id'], null, null, false, true, null]],
        3816 => [[['_route' => 'helpdesk_member_knowledgebase_update_category', 'id' => 0, '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Category::Category', '_locale' => 'en'], ['_locale', 'id'], null, null, false, true, null]],
        3834 => [[['_route' => 'helpdesk_member_knowledgebase_article_collection', '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Article::ArticleList', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        3860 => [[['_route' => 'helpdesk_member_knowledgebase_category_articles_collection', 'category' => 0, '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Article::ArticleListByCategory', '_locale' => 'en'], ['_locale', 'category'], null, null, false, false, null]],
        3901 => [[['_route' => 'helpdesk_member_knowledgebase_folder_articles_collection', 'solution' => 0, '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Article::ArticleListBySolution', '_locale' => 'en'], ['_locale', 'solution'], null, null, false, false, null]],
        3915 => [[['_route' => 'helpdesk_member_knowledgebase_folder_articles_collection_xhr', 'solution' => 0, '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Article::ArticleListXhr', '_locale' => 'en'], ['_locale', 'solution'], null, null, false, false, null]],
        3939 => [[['_route' => 'uvdesk_api_load_configurations', '_controller' => 'Webkul\\UVDesk\\ApiBundle\\Controller\\ApiSettings::loadConfigurations', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        3955 => [[['_route' => 'uvdesk_api_load_configurations_xhr', '_controller' => 'Webkul\\UVDesk\\ApiBundle\\Controller\\ApiSettings::loadConfigurationsXHR', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        3970 => [[['_route' => 'uvdesk_api_create_configuration', '_controller' => 'Webkul\\UVDesk\\ApiBundle\\Controller\\ApiSettings::createAccessCredentials', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        4003 => [[['_route' => 'uvdesk_api_update_configuration_xhr', 'id' => '', '_controller' => 'Webkul\\UVDesk\\ApiBundle\\Controller\\ApiSettings::updateAccessCredentialsXHR', '_locale' => 'en'], ['_locale', 'id'], null, null, false, true, null]],
        4034 => [[['_route' => 'helpdesk_member_knowledgebase_article_collection_xhr', '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Article::ArticleListXhr', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        4053 => [[['_route' => 'helpdesk_member_knowledgebase_create_article', '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Article::Article', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        4079 => [[['_route' => 'helpdesk_member_knowledgebase_update_article_xhr', 'id' => 0, '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Article::ArticleXhr', '_locale' => 'en'], ['_locale', 'id'], null, null, false, true, null]],
        4107 => [[['_route' => 'helpdesk_member_knowledgebase_update_article', 'id' => 0, '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Article::Article', '_locale' => 'en'], ['_locale', 'id'], null, null, false, true, null]],
        4138 => [[['_route' => 'helpdesk_member_knowledgebase_revision_article', 'id' => 0, '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Article::articleHistoryXhr', '_locale' => 'en'], ['_locale', 'id'], null, null, false, true, null]],
        4168 => [[['_route' => 'helpdesk_member_knowledgebase_related_article_xhr', 'id' => 0, '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Article::articleRelatedXhr', '_locale' => 'en'], ['_locale', 'id'], null, null, false, true, null]],
        4197 => [[['_route' => 'helpdesk_member_knowledgebase_marketing_announcement', '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Announcement::listAnnouncement', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        4209 => [[['_route' => 'helpdesk_member_knowledgebase_marketing_announcement_xhr', '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Announcement::listAnnouncementXHR', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        4254 => [[['_route' => 'helpdesk_member_knowledgebase_theme', 'type' => '', '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Branding::theme', '_locale' => 'en'], ['_locale', 'type'], null, null, false, true, null]],
        4267 => [[['_route' => 'helpdesk_member_knowledgebase_update_theme_xhr', '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Branding::BrandingXhr', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        4286 => [[['_route' => 'helpdesk_member_knowledgebase_spam', 'type' => '', '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Branding::spam', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        4332 => [[['_route' => 'helpdesk_member_knowledgebase_create_marketing_announcement', '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Announcement::updateAnnouncement', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        4361 => [[['_route' => 'helpdesk_member_knowledgebase_update_marketing_announcement', 'announcementId' => 0, '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Announcement::updateAnnouncement', '_locale' => 'en'], ['_locale', 'announcementId'], null, null, false, true, null]],
        4390 => [[['_route' => 'helpdesk_member_knowledgebase_remove_marketing_announcement_xhr', 'announcementId' => 0, '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Announcement::removeAnnouncementXHR', '_locale' => 'en'], ['_locale', 'announcementId'], null, null, false, true, null]],
        4423 => [[['_route' => 'helpdesk_member_knowledgebase_create_marketing_module', '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\MarketingModule::updateModule', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        4446 => [[['_route' => 'helpdesk_member_knowledgebase_update_marketing_module', 'id' => 0, '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\MarketingModule::updateModule', '_locale' => 'en'], ['_locale', 'id'], null, null, false, true, null]],
        4480 => [[['_route' => 'helpdesk_member_knowledgebase_remove_marketing_module_xhr', 'id' => 0, '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\MarketingModule::removeModuleXHR', '_locale' => 'en'], ['_locale', 'id'], null, null, false, true, null]],
        4505 => [[['_route' => 'helpdesk_member_knowledgebase_marketing_module', '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\MarketingModule::listModules', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        4517 => [[['_route' => 'helpdesk_member_knowledgebase_marketing_module_xhr', '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\MarketingModule::listModulesXHR', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        4547 => [[['_route' => 'helpdesk_forgot_account_password', '_locale' => 'en', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\Authentication::forgotPassword'], ['_locale'], null, null, false, false, null]],
        4577 => [[['_route' => 'helpdesk_knowledgebase_folder', 'solution' => 0, '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Website::viewFolder', '_locale' => 'en'], ['_locale', 'solution'], null, null, false, true, null]],
        4604 => [[['_route' => 'helpdesk_knowledgebase_folder_article_collection', 'solution' => 0, '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Website::viewFolderArticle', '_locale' => 'en'], ['_locale', 'solution'], null, null, false, false, null]],
        4662 => [[['_route' => 'helpdesk_update_account_credentials', '_locale' => 'en', 'email' => '', 'verificationCode' => '', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\Authentication::updateCredentials'], ['_locale', 'email', 'verificationCode'], null, null, false, true, null]],
        4694 => [[['_route' => 'helpdesk_customer_login', '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Customer::login', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        4706 => [[['_route' => 'helpdesk_customer_logout', '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Customer::logout', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        4726 => [[['_route' => 'helpdesk_customer_account', '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Customer::Account', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        4758 => [[['_route' => 'helpdesk_customer_view_ticket_attachment', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\AttachmentViewer::attachmentView', '_locale' => 'en'], ['_locale', 'id'], null, null, false, false, null]],
        4784 => [[['_route' => 'helpdesk_customer_ticket_collection', '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Ticket::Tickets', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        4797 => [[['_route' => 'helpdesk_customer_ticket_collection_xhr', '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Ticket::ticketListXhr', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        4829 => [[['_route' => 'helpdesk_customer_ticket', 'id' => 0, '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Ticket::ticketView', '_locale' => 'en'], ['_locale', 'id'], null, null, false, true, null]],
        4856 => [[['_route' => 'helpdesk_customer_rate_ticket', 'id' => 0, '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Ticket::rateTicket', '_locale' => 'en'], ['_locale', 'id'], null, null, false, true, null]],
        4893 => [[['_route' => 'helpdesk_customer_save_ticket_draft', 'id' => 0, '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Ticket::saveDraft', '_locale' => 'en'], ['_locale', 'id'], null, null, false, true, null]],
        4926 => [[['_route' => 'helpdesk_customer_download_ticket_attachment', 'attachmentId' => 0, '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Ticket::downloadAttachment', '_locale' => 'en'], ['_locale', 'attachmentId'], null, null, false, true, null]],
        4962 => [[['_route' => 'helpdesk_customer_download_ticket_attachment_zip', 'threadId' => 0, '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Ticket::downloadAttachmentZip', '_locale' => 'en'], ['_locale', 'threadId'], null, null, false, true, null]],
        4999 => [[['_route' => 'helpdesk_customer_update_ticket_collaborators_xhr', 'id' => 0, '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Ticket::ticketCollaboratorXhr', '_locale' => 'en'], ['_locale', 'id'], null, null, false, true, null]],
        5043 => [[['_route' => 'helpdesk_customer_create_ticket_success', 'email' => '', 'flag' => 0, '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Ticket::ticketSuccess', '_locale' => 'en'], ['_locale', 'email', 'flag'], null, null, false, true, null]],
        5082 => [[['_route' => 'helpdesk_customer_thread_collection_xhr', 'id' => 0, '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Ticket::threadListXhr', '_locale' => 'en'], ['_locale', 'id'], null, null, false, true, null]],
        5113 => [[['_route' => 'helpdesk_customer_add_ticket_thread', 'id' => 0, '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Ticket::saveReply', '_locale' => 'en'], ['_locale', 'id'], null, null, false, true, null]],
        5151 => [[['_route' => 'helpdesk_customer_upload_thread_encoded_image', '_controller' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\Thread::base64ImageUpload', '_locale' => 'en'], ['_locale', 'ticketId'], null, null, false, true, null]],
        5180 => [[['_route' => 'helpdesk_customer_create_ticket', '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Ticket::ticketAdd', '_locale' => 'en'], ['_locale'], null, null, true, false, null]],
        5221 => [[['_route' => 'helpdesk_member_knowledgebase_front_marketing_modules_xhr', '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\MarketingModule::marketingModuleCustomerListXHR', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        5250 => [[['_route' => 'helpdesk_member_knowledgebase_front_customer_login_otp_generate', '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Customer::generateOtp', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        5269 => [[['_route' => 'helpdesk_member_knowledgebase_front_customer_verify_otp_login', '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Customer::loginOtpVerify', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        5309 => [[['_route' => 'helpdesk_customer_front_article_search', 's' => 0, '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Customer::searchArticle', '_locale' => 'en'], ['_locale', 's'], null, null, false, true, null]],
        5331 => [[['_route' => 'helpdesk_knowledgebase_category_collection', '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Website::listCategories', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        5355 => [[['_route' => 'helpdesk_knowledgebase_category', 'category' => 0, '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Website::viewCategory', '_locale' => 'en'], ['_locale', 'category'], null, null, false, true, null]],
        5375 => [[['_route' => 'helpdesk_knowledgebase_exception', '_controller' => 'WebkulDefaultBundle:Default:exceptionDefault', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        5405 => [[['_route' => 'helpdesk_knowledgebase_read_article', 'article' => 0, '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Website::viewArticle', '_locale' => 'en'], ['_locale', 'article'], null, null, false, true, null]],
        5432 => [[['_route' => 'helpdesk_knowledgebase_read_slug_article', 'slug' => '', '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Website::viewArticle', '_locale' => 'en'], ['_locale', 'slug'], null, null, false, true, null]],
        5456 => [[['_route' => 'helpdesk_knowledgebase_rate_article', '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Website::rateArticle', '_locale' => 'en'], ['_locale', 'articleId'], null, null, false, true, null]],
        5485 => [[['_route' => 'helpdesk_knowledgebase_search', 's' => '', '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Website::searchKnowledgebase', '_locale' => 'en'], ['_locale', 's'], null, null, false, true, null]],
        5525 => [[['_route' => 'helpdesk_knowledgebase_tag', 'tag' => '', 'name' => '', '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Website::viewTaggedResources', '_locale' => 'en'], ['_locale', 'tag', 'name'], null, null, false, true, null]],
        5535 => [[['_route' => 'helpdesk_knowledgebase', '_controller' => 'Webkul\\UVDesk\\SupportCenterBundle\\Controller\\Website::home', '_locale' => 'en'], ['_locale'], null, null, true, true, null]],
        5574 => [[['_route' => 'uvdesk_api_bundle_v1.0.0_agents_api_load_agent_details', '_controller' => 'Webkul\\UVDesk\\ApiBundle\\API\\Agents::loadAgentDetails'], ['id'], ['GET' => 0], null, false, true, null]],
        5589 => [[['_route' => 'uvdesk_api_bundle_v1.0.0_agents_api_create_agent', '_controller' => 'Webkul\\UVDesk\\ApiBundle\\API\\Agents::createAgentRecord'], [], ['POST' => 0], null, false, false, null]],
        5613 => [[['_route' => 'uvdesk_api_bundle_v1.0.0_agents_api_update_agent', '_controller' => 'Webkul\\UVDesk\\ApiBundle\\API\\Agents::updateAgentRecord'], ['id'], ['POST' => 0], null, false, true, null]],
        5637 => [[['_route' => 'uvdesk_api_bundle_v1.0.0_agents_api_delete_agent', '_controller' => 'Webkul\\UVDesk\\ApiBundle\\API\\Agents::deleteAgentRecord'], ['agentId'], ['DELETE' => 0], null, false, true, null]],
        5668 => [[['_route' => 'uvdesk_api_bundle_v1.0.0_agents_api_load_customer_details', '_controller' => 'Webkul\\UVDesk\\ApiBundle\\API\\Customers::loadCustomerDetails'], ['id'], ['GET' => 0], null, false, true, null]],
        5683 => [[['_route' => 'uvdesk_api_bundle_v1.0.0_agents_api_create_customer', '_controller' => 'Webkul\\UVDesk\\ApiBundle\\API\\Customers::createCustomerRecord'], [], ['POST' => 0], null, false, false, null]],
        5707 => [[['_route' => 'uvdesk_api_bundle_v1.0.0_agents_api_update_customer', '_controller' => 'Webkul\\UVDesk\\ApiBundle\\API\\Customers::updateCustomerRecord'], ['id'], ['POST' => 0], null, false, true, null]],
        5731 => [[['_route' => 'uvdesk_api_bundle_v1.0.0_agents_api_delete_customer', '_controller' => 'Webkul\\UVDesk\\ApiBundle\\API\\Customers::deleteCustomerRecord'], ['customerId'], ['DELETE' => 0], null, false, true, null]],
        5761 => [[['_route' => 'uvdesk_api_bundle_v1.0.0_team_api_load_teams_details', '_controller' => 'Webkul\\UVDesk\\ApiBundle\\API\\Team::loadTeamsDetails'], ['teamId'], ['GET' => 0], null, false, true, null]],
        5776 => [[['_route' => 'uvdesk_api_bundle_v1.0.0_team_api_create_teams_record', '_controller' => 'Webkul\\UVDesk\\ApiBundle\\API\\Team::createTeams'], [], ['POST' => 0], null, false, false, null]],
        5800 => [[['_route' => 'uvdesk_api_bundle_v1.0.0_team_api_update_teams_details', '_controller' => 'Webkul\\UVDesk\\ApiBundle\\API\\Team::updateTeamsDetails'], ['teamId'], ['POST' => 0], null, false, true, null]],
        5824 => [[['_route' => 'uvdesk_api_bundle_v1.0.0_team_api_delete_teams_details', '_controller' => 'Webkul\\UVDesk\\ApiBundle\\API\\Team::deleteTeamsDetails'], ['teamId'], ['DELETE' => 0], null, false, true, null]],
        5851 => [[['_route' => 'uvdesk_api_bundle_api_tickets_v1.0_trash_ticket', '_controller' => 'Webkul\\UVDesk\\ApiBundle\\API\\Tickets::trashTicket'], ['ticketId'], ['PUT' => 0], null, false, true, null]],
        5877 => [[['_route' => 'uvdesk_api_bundle_api_tickets_v1.0_view_ticket', '_controller' => 'Webkul\\UVDesk\\ApiBundle\\API\\Tickets::viewTicket'], ['ticketId'], ['GET' => 0], null, false, true, null]],
        5897 => [[['_route' => 'uvdesk_api_bundle_api_tickets_v1.0_assign_agent_to_ticket', '_controller' => 'Webkul\\UVDesk\\ApiBundle\\API\\Tickets::assignAgent'], ['ticketId'], ['PUT' => 0], null, false, false, null]],
        5924 => [[['_route' => 'uvdesk_api_bundle_api_tickets_v1.0_add_remove_collaborator', '_controller' => 'Webkul\\UVDesk\\ApiBundle\\API\\Tickets::addRemoveTicketCollaborator'], ['ticketId'], ['POST' => 0, 'DELETE' => 1], null, false, false, null]],
        5949 => [[['_route' => 'uvdesk_api_bundle_api_tickets_v1.0_download_attachment', '_controller' => 'Webkul\\UVDesk\\ApiBundle\\API\\Tickets::downloadAttachment'], ['attachmentId'], ['POST' => 0], null, false, true, null]],
        5977 => [[['_route' => 'uvdesk_api_bundle_api_tickets_v1.0_download_attachment_zip', '_controller' => 'Webkul\\UVDesk\\ApiBundle\\API\\Tickets::downloadZipAttachment'], ['threadId'], ['POST' => 0], null, false, true, null]],
        5994 => [[['_route' => 'uvdesk_api_bundle_api_tickets_v1.0_edit_ticket_property', '_controller' => 'Webkul\\UVDesk\\ApiBundle\\API\\Tickets::editTicketProperties'], ['ticketId'], ['PATCH' => 0], null, false, true, null]],
        6015 => [[['_route' => 'uvdesk_api_bundle_api_tickets_v1.0_add_thread', '_controller' => 'Webkul\\UVDesk\\ApiBundle\\API\\Threads::saveThread'], ['ticketid'], ['POST' => 0], null, false, false, null]],
        6044 => [[['_route' => 'uvdesk_api_bundle_v1.0.0_groups_api_load_groups_details', '_controller' => 'Webkul\\UVDesk\\ApiBundle\\API\\Group::loadGroupDetails'], ['id'], ['GET' => 0], null, false, true, null]],
        6059 => [[['_route' => 'uvdesk_api_bundle_v1.0.0_groups_api_create_groups_record', '_controller' => 'Webkul\\UVDesk\\ApiBundle\\API\\Group::createGroupRecord'], [], ['POST' => 0], null, false, false, null]],
        6083 => [[['_route' => 'uvdesk_api_bundle_v1.0.0_groups_api_update_groups_record', '_controller' => 'Webkul\\UVDesk\\ApiBundle\\API\\Group::updateGroupRecord'], ['groupId'], ['POST' => 0], null, false, true, null]],
        6107 => [[['_route' => 'uvdesk_api_bundle_v1.0.0_groups_api_delete_groups_details', '_controller' => 'Webkul\\UVDesk\\ApiBundle\\API\\Group::deleteGroupRecord'], ['groupId'], ['DELETE' => 0], null, false, true, null]],
        6136 => [
            [['_route' => 'uvdesk_api_bundle_api_tickets_v1.0_delete_ticket', '_controller' => 'Webkul\\UVDesk\\ApiBundle\\API\\Tickets::deleteTicketForever'], ['ticketId'], ['DELETE' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
