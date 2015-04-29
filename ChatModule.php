<?php
class ChatModule extends HWebModule{
	    /**
     * On build of the dashboard sidebar widget, add the mostactiveusers widget if module is enabled.
     *
     * @param type $event            
     */
    public static function onSidebarInit($event)
    {
        
            $event->sender->addWidget('application.modules.chat.widgets.ShowChatWidget', array(), array(
                'sortOrder' => 0
            ));
        
    }
}