<?php

class ChatEvents{
	
    public static function onTopMenuInit($event){
        $event->sender->addItem(array(
            'label' => 'Chat Module',
            'url' => Yii::app()->createUrl('/chat/main/index', array()),
            'icon' => '<i class="fa fa-sun-o"></i>',
            'isActive' => (Yii::app()->controller->module && Yii::app()->controller->module->id == 'chat'),
        ));
    }
	

	
}