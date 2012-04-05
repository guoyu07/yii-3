<?php 

// change the following paths if necessary

//����б�����ı����е�Ŀ¼
$yii=dirname(__FILE__).'/../../framework/yii.php';	//�����
$config=dirname(__FILE__).'/protected/config/main.php'; //�������ļ�

// remove the following line when in production mode
defined('YII_DEBUG') or define('YII_DEBUG',true);  //�����Ƿ��ǵ���ģʽ

require_once($yii);
//print_r( Yii::createWebApplication($config) );


//$web = new CWebApplication();
 
//print_r( $web );

//����һ��webӦ��
Yii::createWebApplication($config)->run();

//echo '����!';


function debug()
{
	$str = '';
	/*
   * ��������������Ϣ����
   */
    if ( function_exists( 'debug_backtrace' ))
	{
		$backtrace = debug_backtrace();
        $str .='<div style="font-family:Arail;" >������Ϣ:';
       //print_r($backtrace);
		for( $i = count( $backtrace ) - 1; $i >= 0; --$i )
		{
			
            $str .='<br><br>';
			if (isset( $backtrace[$i]['file'] )) {
				$str .='<div style="color:blue;" >File :'.$backtrace[$i]['file'].'</div>';
			}
			if (isset( $backtrace[$i]['line'] )) {
				$str .='<div style="color:red;" >Line :'.$backtrace[$i]['line'].'</div>';
			}
			if (isset( $backtrace[$i]['class'] )) {
				$str .='<div>Class :'. $backtrace[$i]['class'].'</div>';
			}
            /*
            if (isset( $backtrace[$i]['object'] )) {
				$str .='<br>Object :',$backtrace[$i][5];
                $backtrace[$i]['object']->toString();
			}

            */
			if (isset( $backtrace[$i]['function'] )) {
				$str .='<div>Function :'. $backtrace[$i]['function'].'</div>';
			}
			if (isset( $backtrace[$i]['type'] )) {
				$str .='<div>Type :'. $backtrace[$i]['type'].'</div>';
			}

			
			if (isset( $backtrace[$i]['args'] )) {
				$str .='<div>Args :'. print_r($backtrace[$i]['args']).'</div>';
			}
			
		}
        $str .='</div>';
	}
    $str .='<br/><br/>';
	echo $str;exit;
	return $str;
}