<?php

class ShowChatWidget extends HWidget
{
	
    public function run() {
        // load files
        $this->loadResources();
		$pathIcone = '/assets/imgs/';
        // render view
        $this->render('ShowChat', array());
    }
	
    /**
     * load needed resources files
     */
    public function loadResources()
    {
         $assetPrefixCss = Yii::app()->assetManager->publish(dirname(__FILE__) . '/../assets/css', true, 0, defined('YII_DEBUG'));
		 $assetPrefixJs = Yii::app()->assetManager->publish(dirname(__FILE__) . '/../assets/js', true, 0, defined('YII_DEBUG'));
		
		
    
        Yii::app()->clientScript->registerCssFile($assetPrefixCss . '/jquery.chatjs.css');
		
		Yii::app()->clientScript->registerScriptFile($assetPrefixJs . '/jquery.chatjs.utils.js');
		Yii::app()->clientScript->registerScriptFile($assetPrefixJs . '/jquery.chatjs.adapter.servertypes.js');
		Yii::app()->clientScript->registerScriptFile($assetPrefixJs . '/jquery.chatjs.adapter.demo.js');
		Yii::app()->clientScript->registerScriptFile($assetPrefixJs . '/jquery.chatjs.window.js');
		Yii::app()->clientScript->registerScriptFile($assetPrefixJs . '/jquery.chatjs.messageboard.js');
		Yii::app()->clientScript->registerScriptFile($assetPrefixJs . '/jquery.chatjs.userlist.js');
		Yii::app()->clientScript->registerScriptFile($assetPrefixJs . '/jquery.chatjs.pmwindow.js');
		Yii::app()->clientScript->registerScriptFile($assetPrefixJs . '/jquery.chatjs.friendswindow.js');
		Yii::app()->clientScript->registerScriptFile($assetPrefixJs . '/jquery.chatjs.controller.js');
		
		
    }

    
}
?>
