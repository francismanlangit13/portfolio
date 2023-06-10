<?php
    // This is global session configuration.
    if (session_status() !== PHP_SESSION_ACTIVE) {
        session_start();
    }

    // This is global hosting configuration.
    if(!defined('base_url')) define('base_url','http://localhost/portfolio/');
    if(!defined('base_app')) define('base_app', str_replace('\\','/',__DIR__).'/' );
    if(!defined('DB_SERVER')) define('DB_SERVER',"localhost");
    if(!defined('DB_USERNAME')) define('DB_USERNAME',"root");
    if(!defined('DB_PASSWORD')) define('DB_PASSWORD',"");
    if(!defined('DB_NAME')) define('DB_NAME',"db_franz");
?>