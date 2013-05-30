=========================
phplist-plugin-mailtolist
=========================

_*WARNING* WORK IN PROGRESS!!_


If you want to be able to send messages to your lists via your favorite email client, you will need this plugin.
When installed, you can, for example, send emails to 'mailinglist@yourdomain.com' and when you process the messages in the admin section, they will be sent to your mailinglist users.

See [1] for more info.


Changes
=======

Following the guidelines in [2], I have adapted the mailtolist v2 plugin [3] to work with the latest version of phpList.
It is now possible to initialize and use the plugin from the admin web interface of phpList.

Files modified:
 - mailtolist.php


Installation
============

1. Clone this repo
2. Copy everything under mail2listv2/ to $PLUGIN_ROOTDIR
3. Edit mailtolist/get_email.class.php with your values for the parameters $attach_url and $file_path
4. Open your favourite browser and go to http://$HOST/lists/admin/?pi=mailtolist&page=main or select from the menu "Config", "Mail2list Plugin"
5. Configure mailtolist (see [1])


References
==========

[1] http://docs.phplist.com/MailToList.html
[2] http://resources.phplist.com/develop/plugins
[3] http://www.sawey.be/downloads/mail2listv2_0_0b.tar.gz
