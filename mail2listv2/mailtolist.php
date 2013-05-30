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
?>
