<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'Vision Ward',

	// preloading 'log' component
	'preload'=>array('log'),

	// autoloading model and component classes
	'import'=>array(
		'application.models.*',
		'application.components.*',
	),

	'defaultController'=>'teams',
	'modules' => array(
        'gii'=>array(
            'class'=>'system.gii.GiiModule',
            'password'=>'123456',
            'ipFilters'=>array('127.0.0.1','::1'),
        ),
	),
	// application components
	'components'=>array(
		'user'=>array(
			// enable cookie-based authentication
			'allowAutoLogin'=>true,
            'autoRenewCookie' => true,
            'loginUrl' => array('/login'),
		),
        'request'=>array(
            'class' => 'application.components.HttpRequest',
            'enableCsrfValidation'=>true,
            'enableCookieValidation'=>true,
            'csrfTokenName' => 'authenticity_token',
        ),
		'db'=>array(
			'connectionString' => 'sqlite:protected/data/sentry.db',
			'tablePrefix' => '',
		),
		// uncomment the following to use a MySQL database
		/*
		'db'=>array(
			'connectionString' => 'mysql:host=localhost;dbname=blog',
			'emulatePrepare' => true,
			'username' => 'root',
			'password' => '',
			'charset' => 'utf8',
			'tablePrefix' => 'tbl_',
		),
		*/
		'errorHandler'=>array(
			'errorAction'=>'generic/error',
		),
		'urlManager'=>array(
			'urlFormat'=>'path',
            'showScriptName'=>false,
            'caseSensitive'=>false,
			/* */
            'rules'=>array(
                # Account
                'login'=> 'accounts/login',
                'login-redirect'=> 'accounts/login_redirect',
                'logout'=> 'accounts/logout',
                'register'=> 'accounts/register',
                'account/recover'=> 'accounts/recover',
                'account/recover/confirm/<user_id:[\d]+>/<hash:[0-9a-zA-Z]+>'=> 'accounts/recover_confirm',
                'account/settings'=> 'accounts/settings',
                'account/settings/appearance'=> 'accounts/appearance_settings',
                'account/settings/identities'=> 'accounts/list_identities',
                'account/settings/notifications'=> 'accounts/notification_settings',
                'account/settings/social/'=> 'social_auth/urls',

                # Settings - Teams
                'teams/new'=> 'teams/create_new_team',
                'teams/<team_slug:[\w_-]+>/settings'=> 'teams/manage_team',
                'teams/<team_slug:[\w_-]+>/remove'=> 'teams/remove_team',
                'teams/<team_slug:[\w_-]+>/groups'=> 'teams/manage_access_groups',
                'teams/<team_slug:[\w_-]+>/groups/new'=> 'teams/new_access_group',
                'teams/<team_slug:[\w_-]+>/groups/<group_id:\d+>/edit'=> 'teams/access_group_details',
                'teams/<team_slug:[\w_-]+>/groups/<group_id:\d+>/remove'=> 'teams/remove_access_group',
                'teams/<team_slug:[\w_-]+>/groups/<group_id:\d+>/members'=> 'teams/access_group_members',
                'teams/<team_slug:[\w_-]+>/groups/<group_id:\d+>/members/<user_id:\d+>/remove'=> 'teams/remove_team',
                'teams/<team_slug:[\w_-]+>/groups/<group_id:\d+>/projects'=> 'teams/access_group_projects',
                'teams/<team_slug:[\w_-]+>/groups/<group_id:\d+>/projects/<project_id:\d+>/remove'=> 'teams.remove_access_group',
                'teams/<team_slug:[\w_-]+>/members'=> 'teams/manage_team_members',
                'teams/<team_slug:[\w_-]+>/members/new'=> 'teams/new_team_member',
                'teams/<team_slug:[\w_-]+>/members/<member_id:\d+>/edit'=> 'teams/edit_team_member',
                'teams/<team_slug:[\w_-]+>/members/<member_id:\d+>/remove'=> 'teams/remove_team_member',
                'teams/<team_slug:[\w_-]+>/members/pending/<member_id:\d+>/remove'=> 'teams/remove_pending_team_member',
                'teams/<team_slug:[\w_-]+>/members/pending/<member_id:\d+>/reinvite'=> 'teams/reinvite_pending_team_member',
                'teams/<team_slug:[\w_-]+>/projects'=> 'teams/manage_team_projects',
                'teams/<team_slug:[\w_-]+>/projects/new'=> 'teams/create_new_team_project',
                '/accept/<member_id:\d+>/<token:\w+>'=> 'teams/accept_invite',

                # Settings - Projects
                '/<team_slug:[\w_-]+>/<project_id:[\w_-]+>/get-started'=> 'projects/get_started',
                '/<team_slug:[\w_-]+>/<project_id:[\w_-]+>/settings'=> 'projects/settings',
                '/<team_slug:[\w_-]+>/<project_id:[\w_-]+>/docs'=> ' docs/client_help',
                '/<team_slug:[\w_-]+>/<project_id:[\w_-]+>/docs/<platform>' => 'docs/client_guide',
                '/<team_slug:[\w_-]+>/<project_id:[\w_-]+>/keys'=> 'projects/keys/manage_project_keys',
                '/<team_slug:[\w_-]+>/<project_id:[\w_-]+>/keys/new'=> ' projects/new_project_key',
                '/<team_slug:[\w_-]+>/<project_id:[\w_-]+>/keys/<key_id:\d+>/remove'=> ' projects/remove_project_key',
                '/<team_slug:[\w_-]+>/<project_id:[\w_-]+>/plugins'=> 'projects/plugins/manage_plugins',
                '/<team_slug:[\w_-]+>/<project_id:[\w_-]+>/plugins/<slug:[\w_-]+>'=> 'projects/configure_project_plugin',
                '/<team_slug:[\w_-]+>/<project_id:[\w_-]+>/plugins/<slug:[\w_-]+>/reset'=> 'projects/reset_project_plugin',
                '/<team_slug:[\w_-]+>/<project_id:[\w_-]+>/plugins/<slug:[\w_-]+>/disable'=> 'projects/disable_project_plugin',
                '/<team_slug:[\w_-]+>/<project_id:[\w_-]+>/plugins/<slug:[\w_-]+>/enable'=> 'projects/enable_project_plugin',
                '/<team_slug:[\w_-]+>/<project_id:[\w_-]+>/remove'=> ' projects/remove/remove_project',
                '/<team_slug:[\w_-]+>/<project_id:[\w_-]+>/tags'=> 'projects/tags/manage_project_tags',
                '/<team_slug:[\w_-]+>/<project_id:[\w_-]+>/quotas'=> '  projects/quotas/manage_project_quotas',
                '/<team_slug:[\w_-]+>/<project_id:[\w_-]+>/notifications'=> ' projects/notification_settings',

                # Generic
                ''=> 'generic/dashboard',

                # Admin
                '/manage/status'=> 'admin/status_env',
                '/manage/status/packages'=> 'admin/status_packages',
                '/manage/status/mail'=> 'admin/status_mail',
                '/manage/stats'=> 'admin/stats',
                # Admin - Teams
                '/manage/teams'=> 'admin/manage_teams',

                # Admin - Projects
                '/manage/projects'=> 'admin/manage_projects',

                # Admin - Users
                '/manage/users'=> 'admin/manage_users',
                '/manage/users/new'=> 'admin/create_new_user',
                '/manage/users/<user_id:\d+>'=> 'admin/edit_user',
                '/manage/users/<user_id:\d+>/remove'=> 'admin/remove_user',
                '/manage/users/<user_id:\d+>/projects'=> 'admin/list_user_projects',

                # Admin - Plugins
                '/manage/plugins/<slug:[\w_-]+>'=> 'admin/configure_plugin',

                # API / JS
                '/crossdomain.xml'=> 'api/crossdomain_xml',
                '/api/store'=> 'api/store',

                # Client API endpoints/ MUST NOT BE CHANGED
                '/api/<project_id:[\w_-]+>/crossdomain.xml'=> 'api/crossdomain_xml',
                '/api/<project_id:[\w_-]+>/store'=> 'api/store',

                # Generic API
                '/api/<team_slug:[\w_-]+>/<project_id:[\w_-]+>/poll'=> 'api/poll',
                '/api/<team_slug:[\w_-]+>/<project_id:[\w_-]+>/resolve'=> 'api/resolve',
                '/api/<team_slug:[\w_-]+>/<project_id:[\w_-]+>/bookmark'=> 'api/bookmark',
                '/api/<team_slug:[\w_-]+>/<project_id:[\w_-]+>/clear'=> 'api/clear',
                '/api/<team_slug:[\w_-]+>/(?:<project_id:[\w_-]+>/)?chart'=> 'api/chart',
                '/api/<team_slug:[\w_-]+>/<project_id:[\w_-]+>/group/<group_id:[\w_-]+>/remove'=> 'api/remove_group',
                '/api/<team_slug:[\w_-]+>/(?:<project_id:[\w_-]+>/)?groups/trends'=> 'api/get_group_trends',
                '/api/<team_slug:[\w_-]+>/(?:<project_id:[\w_-]+>/)?groups/newest'=> 'api/get_new_groups',
                '/api/<team_slug:[\w_-]+>/(?:<project_id:[\w_-]+>/)?groups/resolved'=> 'api/get_resolved_groups',

                '/api/<team_slug:[\w_-]+>/<project_id:[\w_-]+>/group/<group_id:[\w_-]+>/set/public'=> 'api/make_group_public',
                '/api/<team_slug:[\w_-]+>/<project_id:[\w_-]+>/group/<group_id:[\w_-]+>/set/private'=> 'api/make_group_private',
                '/api/<team_slug:[\w_-]+>/<project_id:[\w_-]+>/group/<group_id:[\w_-]+>/set/resolved'=> 'api/resolve_group',
                '/api/<team_slug:[\w_-]+>/<project_id:[\w_-]+>/group/<group_id:[\w_-]+>/set/muted'=> 'api/mute_group',
                '/api/<team_slug:[\w_-]+>/<project_id:[\w_-]+>/group/<group_id:[\w_-]+>/set/unresolved'=> 'api/unresolve_group',
                '/api/<team_slug:[\w_-]+>/(?:<project_id:[\w_-]+>/)?stats'=> 'api/get_stats',
                '/api/<team_slug:[\w_-]+>/<project_id:[\w_-]+>/tags/search'=> 'api/search_tags',
                '/api/<team_slug:[\w_-]+>/users/search'=> 'api/search_users',
                '/api/<team_slug:[\w_-]+>/projects/search'=> 'api/search_projects',

                # TV dashboard
                '/<team_slug:[\w_-]+>/wall'=> 'groups/wall_display',

                # Team-wide alerts
                '/<team_slug:[\w_-]>/show/alerts'=> 'alerts/alert_list',

                # Explore - Users
                '/<team_slug:[\w_-]+>/<project_id:[\w_-]+>/explore/users'=> 'users/user_list',
                '/<team_slug:[\w_-]+>/<project_id:[\w_-]+>/explore/users/<user_id:\d+>'=> 'users/user_details',

                # Explore - Code
                '/<team_slug:[\w_-]+>/<project_id:[\w_-]+>/explore/code'=> 'explore_code/list_tag',
                '/<team_slug:[\w_-]+>/<project_id:[\w_-]+>/explore/code/by/function'=> 'explore_code/list_tag',
                '/<team_slug:[\w_-]+>/<project_id:[\w_-]+>/explore/code/by/filename/<tag_id:\d+>'=> 'eplore_code/tag_details',
                '/<team_slug:[\w_-]+>/<project_id:[\w_-]+>/explore/code/by/function/<tag_id:\d+>'=> 'explore_code/tag_details',
                # Explore
                '/<team_slug:[\w_-]+>/<project_id:[\w_-]+>/explore'=> 'explore/tag_list',
                '/<team_slug:[\w_-]+>/<project_id:[\w_-]+>/explore/<key:[^\/]+>'=> 'explore/tag_value_list',
                '/<team_slug:[\w_-]+>/<project_id:[\w_-]+>/explore/<key:[^\/]+>/<value_id:\d+>'=> 'explore/tag_value_details',
                '/<team_slug:[\w_-]+>/<project_id:[\w_-]+>/group/<group_id:\d+>'=> 'groups/group',
                '/<team_slug:[\w_-]+>/<project_id:[\w_-]+>/group/<group_id:\d+>/events'=> 'groups/group_event_list',
                '/<team_slug:[\w_-]+>/<project_id:[\w_-]+>/group/<group_id:\d+>/events/json'=> 'groups/group_event_list_json',
                '/<team_slug:[\w_-]+>/<project_id:[\w_-]+>/group/<group_id:\d+>/events/<event_id:\d+>'=> 'groups/group',
                '/<team_slug:[\w_-]+>/<project_id:[\w_-]+>/group/<group_id:\d+>/events/<event_id:\d+>/replay'=> 'events/replay_event',
                '/<team_slug:[\w_-]+>/<project_id:[\w_-]+>/group/<group_id:\d+>/events/<event_id_or_latest:\d+|latest>/json'=> 'groups/group_event_details_json',
                '/<team_slug:[\w_-]+>/<project_id:[\w_-]+>/group/<group_id:\d+>/actions/<slug:[\w_-]+>/'=> 'groups/group_plugin_action',
                '/<team_slug:[\w_-]+>/<project_id:[\w_-]+>/group/<group_id:\d+>/tags'=> 'groups/group_tag_list',
                '/<team_slug:[\w_-]+>/<project_id:[\w_-]+>/group/<group_id:\d+>/tags/<tag_name>'=> 'groups/group_tag_details',
                '/<team_slug:[\w_-]+>/<project_id:[\w_-]+>/search'=> 'groups/search',
                '/<team_slug:[\w_-]+>/<project_id:[\w_-]+>/alerts'=> 'alerts/alert_list',
                '/<team_slug:[\w_-]+>/<project_id:[\w_-]+>/alerts/<alert_id:\d+>'=> 'alerts/alert_details',
                '/<team_slug:[\w_-]+>/<project_id:[\w_-]+>/alerts/<alert_id:\d+>/resolve'=> 'alerts/resolve_alert',
                '/<team_slug:[\w_-]+>/<project_id:[\w_-]+>/stream'=> 'groups/group_list)',
                '/<team_slug:[\w_-]+>/<project_id:[\w_-]+>'=> 'groups/group_list',
                '/<team_slug:[\w_-]+>'=> 'groups/dashboard',
                # Legacy
                '/<project_id:[\w_-]>/group/<group_id:\d+>'=> 'groups/redirect_to_group',
			)
            /* */
		),
        'sentry'=>array(
            'class'=>'ext.yii-sentry.components.RSentryClient',
            'dsn'=>'http://bbe1864337ec49b1938abcc53a6751f5:4e49e6bb34894b68a536ded058ca67a6@198.199.94.36:8080/1',
        ),
		'log'=>array(
			'class'=>'CLogRouter',
			'routes'=>array(
				array(
					'class'=>'CFileLogRoute',
					'levels'=>'error, warning',
				),
                array(
                    'class'=>'ext.yii-sentry.components.RSentryLogRoute',
                    'levels'=>'error, warning',
                ),
			),
		),
	),

	// application-level parameters that can be accessed
	// using Yii::app()->params['paramName']
	'params'=>require(dirname(__FILE__).'/params.php'),
);