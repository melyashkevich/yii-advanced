<?php
return [
	'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
	'extensions' => require(__DIR__ . '/../../vendor/yiisoft/extensions.php'),
	'aliases' => [
		'@bower' => '@vendor/bower-asset',
		'@npm'   => '@vendor/npm-asset',
	],
	'modules' => [
		'social' => [

			//the module class
			'class' => 'kartik\social\Module',
			
			// the global settings for the disqus widget
			'disqus' => [
				'settings' => ['shortname' => 'DISQUS_SHORTNAME'] // default settings
			],
			
			//the global settings for the facebook plugins widget
			'facebook' => [
				'appId' => '290542568006153',
				'secret' => '43073c92a29ab1afd7f33c903a2dacc1',
			],
			
			//the global settings for the google plugins widget
			'google' => [
				'clientId' => 'GOOGLE_API_CLIENT_ID',
				'pageId' => 'GOOGLE_PLUS_PAGE_ID',
				'profileId' => 'GOOGLE_PLUS_PROFILE_ID',
			],

			//the global settings for the google analytic plugin widget
			'googleAnalytics' => [
				'id' => 'TRACKING_ID',
				'domain' => 'TRACKING_DOMAIN',
			],
			
			// the global settings for the twitter plugin widget
			'twitter' => [
				'screenName' => 'TWITTER_SCREEN_NAME'
			],
		],
		// your other modules
	],
	'components' => [
		'cache' => [
			'class' => 'yii\caching\FileCache',
		],
	],
];