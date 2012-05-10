<?php

// ����·�����������ڼ�������ļ�
// Yii::setPathOfAlias('local','path/to/local-folder');

// ��Ҫ������Ϣ
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..', //Ӧ��Ŀ¼
	'name'=>'���������̨',

	// preloading 'log' component
	'preload'=>array('log'),

	// autoloading model and component classes
	'import'=>array(
		'application.models.*',
		'application.components.*',
	),

	'defaultController'=>'site',	//Ĭ�ϵĿ�����

	//��������������Ϣ
	'components'=>array(
		'user'=>array(
			// ����COOKIE��֤��ʽ
			'allowAutoLogin'=>true,
		), 
		//�������ݿ��������
		'db'=>array(
			'connectionString' => 'mysql:host=localhost;dbname=168cai',
			'emulatePrepare' => true,
			'username' => 'root',
			'password' => 'test',
			'charset' => 'gb2312',
			'tablePrefix' => '',
		), 
		'errorHandler'=>array(
			// �� 'site/error' ������ʾ������Ϣ
            'errorAction'=>'site/error',
        ),

		//����URLα��̬��Ϣ
        'urlManager'=>array(
        	'urlFormat'=>'path',
        	'rules'=>array(
        		'post/<id:\d+>/<title:.*?>'=>'post/view',
        		'posts/<tag:.*?>'=>'post/index',
        		'<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
        	),
        ),
		'log'=>array(
			'class'=>'CLogRouter',
			'routes'=>array(
				array(
					'class'=>'CFileLogRoute',
					'levels'=>'error, warning',
				),

				array(
					'class'=>'CWebLogRoute',
				),
			
			),
		),
	),

	// application-level parameters that can be accessed
	// using Yii::app()->params['paramName']
	'params'=>require(dirname(__FILE__).'/params.php'),
);