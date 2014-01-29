<?php

// uncomment the following to define a path alias
Yii::setPathOfAlias('local','/');
Yii::setPathOfAlias('stg','/staging');
Yii::setPathOfAlias('prod','/');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'Atlantic Research Group - a World Class CRO for Agile and Emerging BioPharmaceutical Companies',
	
	// preloading 'log' component
	'preload'=>array('log'),

	// autoloading model and component classes
	'import'=>array(
		'application.models.*',
		'application.components.*',
	),

	'modules'=>array(
		// uncomment the following to enable the Gii tool
		/*
		'gii'=>array(
			'class'=>'system.gii.GiiModule',
			'password'=>'Enter Your Password Here',
			// If removed, Gii defaults to localhost only. Edit carefully to taste.
			'ipFilters'=>array('127.0.0.1','::1'),
		),
		*/
	),

	// application components
	'components'=>array(
		'user'=>array(
			// enable cookie-based authentication
			'allowAutoLogin'=>true,
		),

		'utils'=>array('class'=>'Utility'),
		
		'urlManager'=>array(
			'urlFormat'=>'path',
			'rules'=>array(
				'<alias:search\-results>' 
					=> 'staticpage/page',
				'<alias:contact>' 
					=> 'site/contact',
				'<alias:expertise|technology|services|phpinfo|careers|about|terms\-and\-conditions>' 
					=> 'staticpage/page',
				'<alias:expertise\/oncology|expertise\/immunology\-allergy|expertise\/metabolic\-endocrinology|expertise\/opthalmology|expertise\/pain\-management|expertise\/infectious\-disease|expertise\/cns\-neurology|expertise\/medical\-devices|expertise\/urology|expertise\/genetic\-disorders|expertise\/cardiovascular>' 
					=> 'staticpage/page',
				'<alias:services\/phase1|services\/project\-management|services\/clinical\-monitoring|services\/site\-management|services\/biostatistics\-data\-management|services\/medical\-writing\-regulatory\-affairs|services\/patient\-recruitment|services\/quality\-assurance|services\/clinical\-trial\-management\-system>' 
					=> 'staticpage/page',
				'<alias:technology\/trialvista|technology\/medrio|technology\/openclinica|technology\/comprehend\-clinical|technology\/arisg>' 
					=> 'staticpage/page',
				'<alias:careers\/our\-story|careers\/benefits|careers\/what\-people\-say|careers\/job\-openings>' 
					=> 'staticpage/page',
				'<alias:about\/news|about\/blog|about\/mission|about\/board|about\/leadership|about\/global\-reach|about\/case\-studies>' 
					=> 'staticpage/page',
				'<alias:about\/leadership\/paul\-bishop|about\/leadership\/lyle\-camblos|about\/leadership\/bryce\-warren|about\/leadership\/hunter\-walker>' 
					=> 'staticpage/page'
			),
			'showScriptName'=>false,
			'caseSensitive' => false,
		),
		
		'db'=>array(
			'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdrive.db',
		),
		// uncomment the following to use a MySQL database
		/*
		'db'=>array(
			'connectionString' => 'mysql:host=localhost;dbname=testdrive',
			'emulatePrepare' => true,
			'username' => 'root',
			'password' => '',
			'charset' => 'utf8',
		),
		*/
		'errorHandler'=>array(
			// use 'site/error' action to display errors
			'errorAction'=>'site/error',
		),
		'log'=>array(
			'class'=>'CLogRouter',
			'routes'=>array(
				array(
					'class'=>'CFileLogRoute',
					'levels'=>'error, warning',
				),
				// uncomment the following to show log messages on web pages
				/*
				array(
					'class'=>'CWebLogRoute',
				),
				*/
			),
		),
	),

	// application-level parameters that can be accessed
	// using Yii::app()->params['paramName']
	'params'=>array(
		// this is not used yet page
		'adminEmail'=>'bwb@truebadore.com',
		// contact page
		'contactPageEmail' => 'info@atlanticresearchgroup.com',
		'contactPageEmailSubject' => 'Atlantic Research Group - contact form email',
		'contactPageEmailThanksMsg' => 'Thank you for contacting us. We will respond to you as soon as possible.',
		// use these to get at page descriptions
		// Yii::app()->params['pageDescriptions'][pageName, eg about/careers]
		'pageDescriptions'=>array(
				'all' => 'Atlantic Research Group - ARG exists to help small, emerging, agile biopharma, biotechnology and life sciences companies bring new therapies and drugs to market. Your therapies, to people. Faster.',
                'about'=>' ARG performs patient/site recruitment, biostatistics, project management and data management services, clinical monitoring services, and the TrialVista CTMS application suite. On a mission to help innovators bring new therapies to market.',
                'contact'=>' Contact ARG with the form shown below.',
                'terms-and-conditions'=>' Terms and conditions for the use of the ARG website.',
                'careers' => 'Join ARG and have a meaningful career in biotechnology. Bring new therapies to people who need them. At ARG, success is in our DNA. Is it in yours?',
                'careers/job-openings' => 'Join ARG and have a meaningful career in biotechnology. Bring new therapies to people who need them. At ARG, success is in our DNA. Is it in yours?',
            	'about/leadership' => ' Our Founders had a vision for how clinical/contract research organizations could be better. They have realized that vision in ARG.',
            	'about/board' => ' ARG\'s helpful and engaged Board of Advisors is committed to your therapeutic success. ',
            	'about/news' => ' ARG - Atlantic Research Group news, updates, whitepapers and published material. ',
            	'expertise' => ' ARG has a proven track record of success in a large swath of clinical areas. From oncology to hemophilia, ARG knows clinical trials.' ,
            	'services' => ' ARG can perform any of the services that are critical to bringing new therapies to market. From clinical monitoring, project management, and patient recruitment, to CTMS software development, ARG is poised to ensure the success of your clinical trial.',
            	'technology' => ' TrialVista is ARG\'s purpose-built Clinical Trial Management System (CTMS).'
            ),
	),
);