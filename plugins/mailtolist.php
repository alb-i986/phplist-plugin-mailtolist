<?php
/**
 * EMAIL TO PHPLIST
 * This is a plugin for phplist
 * Created by SaWey (C) 2007
 * Modified by alb-i986 on 2013-05-31
 * 
 * 
 * The only thing you have to do is
 * Put the files in your plugin directory
 * And change the file path and URL to the 
 * attachments dir in get_email.class.php
 * All other config happens in the webgui
 */
 
class mailtolist extends phplistPlugin {

    public $name = "Mail To List";
    public $coderoot = "mailtolist/";
    public $version = "2.0.1";
    public $authors = "SaWey, Alberto Scotto";
    public $description = "Enables you to send messages to your lists via your favorite email client. When installed, you can, for example, send emails to 'mailinglist@yourdomain.com' and when you process the messages in the admin section, they will be sent to your mailinglist users.";

    function mailtolist() {
        parent::phplistplugin();
    }

    public $pageTitles = array(
        'main' => 'Mail2List Plugin',
    );
    public $topMenuLinks = array(
        'main' => array('category' => 'config'),
    );

    function adminmenu() {
        return array(
        );
    }
}

