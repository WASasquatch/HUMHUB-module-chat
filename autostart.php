<?php

Yii::app()->moduleManager->register(array(
    'id' => 'chat',
    'class' => 'application.modules.chat.ChatModule',
    'import' => array(
        'application.modules.chat.*',
    ),
    'events' => array(
        array('class' => 'TopMenuWidget', 'event' => 'onInit', 'callback' => array('ChatEvents', 'onTopMenuInit')),
    ),
));
?>