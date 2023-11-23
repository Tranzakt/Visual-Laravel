<?php

$cfg['Servers'] = [
    1 => [
        'host' => 'mariadb',  'port' => 3306,
        'user' => 'mariadb',  'password' => 'mariadb',
        'controluser' => 'phpmyadmin', 'controlpass' => 'pma@password', 'pmadb' => 'pma_db',
    ],
    2 => [
        'host' => 'mysql',    'port' => 3307,
        'user' => 'mysql',    'password' => 'mysql',
        'controluser' => 'phpmyadmin', 'controlpass' => 'pma@password', 'pmadb' => 'pma_db',
    ],
];
// 