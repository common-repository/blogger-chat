<?php
/*
Plugin Name: Blogger Chat
Plugin URI: http://icru.de/blogger-chat-wordpress-plugin-0-1.html
Description: Ein Plugin, welches Zugang in den derzeit deutschsprachigen #bloggerchannel auf IZ-smart bietet.
Author: Cruelty Graves
Version: 0.1
Author URI: http://icru.de
*/
define('BCHAT_VERSION', '0.1');

add_action('admin_menu', 'bchat_menu');
function bchat_menu()
{
	add_dashboard_page('Blogger Chat', 'Blogger Chat', 'publish_posts', 'blogger-chat/chat.php');
}