*WARNING*: _WORK IN PROGRESS!!_

phplist-plugin-mailtolist
=========================


Description
-----------
If you want to be able to send messages to your lists via your favorite email client, you will need this plugin.
When installed, you can, for example, send emails to 'mailinglist@yourdomain.com' and when you process the messages in the admin section, they will be sent to your mailinglist users.

See [1] for more info.


Changes
-------

Use same machanism that phplist uses to download atachments. Using a file similer to dl.php.
In fact the new file dl_mailtolist.php is a copy of dl.php with some tiny changes.
If needed these changes can directly placed inside dl.php.

Following the guidelines in [2], I have adapted the mailtolist v2 plugin [3] to work with the latest version of phpList.
It is now possible to initialize and use the plugin from phpList's admin web interface.

Files modified:
 - mailtolist.php


Installation
------------

1. Clone this repo
2. Copy plugins/* to $PLUGIN_ROOTDIR (or add /path/to/phplist-plugin-mailtolist/plugins to $PLUGIN_ROOTDIR)
3. Place phplist_root/dl_mailtolist.php file to your phplist folder. (same place that you will find dl.php). Or move its changes in to dl.php
4. Edit mailtolist/get_email.class.php and set the parameters $attach_url and $file_path
5. Open your favourite browser and go to http://$HOST/lists/admin/?pi=mailtolist&page=main or select from the menu "Config", "Mail2list Plugin"
6. Configure mailtolist (see [1])


References
----------

[1] http://docs.phplist.com/MailToList.html

[2] http://resources.phplist.com/develop/plugins

[3] http://www.sawey.be/downloads/mail2listv2_0_0b.tar.gz


Credits
-------
Most of the credits go to SaWey, the original author of the plugin

http://www.sawey.be
