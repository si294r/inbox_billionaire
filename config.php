<?php

include("/var/www/mysql-config2.php");

$mydatabase = $IS_DEVELOPMENT ? "billionairedev" : "billionaire";

$url_static_time = "http://alegrium5.alegrium.com/billionaire/cloudsave/";

define('CACHE_USER_DEV', "bildev_user_");
define('CACHE_USER', "bil_user_");

