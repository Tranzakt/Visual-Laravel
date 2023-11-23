<?php
require_once('plugins/AdminerLoginServers.php');

/** Set supported servers
    * @param array array($domain) or array($domain => $description) or array($category => array())
    * @param string
    */
return new AdminerLoginServers(
    array(
        "pgsql://postgres:5432#visual-laravel" => "postgres (5432)",
        "mysql://mariadb:3306#visual-laravel" => "mariadb (3306)",
        "mysql://mysql:3307#visual-laravel" => "mysql (3307)",
        // "mongo://mongodb:27017" => "mongodb (27017)"
    ),
    'mysql'
);
