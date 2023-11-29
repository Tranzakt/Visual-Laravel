<?php

use Illuminate\Support\Str;

/**
 * Generates a URL string based on the provided parameters.
 *
 * @param  string  $drv The database driver.
 * @param  string  $host The host name or IP address.
 * @param  string  $port The port number.
 * @param  string  $uid The user ID.
 * @param  string  $pw The password.
 * @param  string  $db The database name.
 * @return string The generated URL string.
 */
function generateUrl(
    string $drv,
    string $host,
    string $port,
    string $uid,
    string $pw,
    string $db
): string {

    if (empty($drv)) {
        return '';
    }
    if (empty($uid) && ! empty($pw)) {
        return '';
    }
    if (empty($host)) {
        return '';
    }

    $uid .= $pw ? ':'.$pw : '';
    $host .= $port ? ':'.$port : '';
    $uid .= $uid ? '@' : '';
    $db = $db ? '/'.$db : '';

    return $drv.'://'.$uid.$host.$db;
}

return [
    /*
    |--------------------------------------------------------------------------
    | Default Database Connection Name
    |--------------------------------------------------------------------------
    |
    | Here you may specify which of the database connections below you wish
    | to use as your default connection for all database work. Of course
    | you may use many connections at once using the Database library.
    |
    */

    'default' => env('DB_CONNECTION', 'mysql'),

    /*
    |--------------------------------------------------------------------------
    | Database Connections
    |--------------------------------------------------------------------------
    |
    | Here are each of the database connections setup for your application.
    | Of course, examples of configuring each database platform that is
    | supported by Laravel is shown below to make development simple.
    |
    |
    | All database work in Laravel is done through the PHP PDO facilities
    | so make sure you have the driver for your particular database of
    | choice installed on your machine before you begin development.
    |
    */

    'connections' => [

        'vl-sqlite' => [
            'driver' => 'sqlite',
            'database' => database_path('virtual-laravel.sqlite'),
            'prefix' => env('VL_'),
            'foreign_key_constraints' => true,
        ],

        'sqlite' => [
            'driver' => 'sqlite',
            'database' => database_path(env('DB_SQLITE_DATABASE', 'database.sqlite')),
            'prefix' => env('DB_SQLITE_PREFIX', env('DB_PREFIX', '')),
            'foreign_key_constraints' => env('DB_SQLITE_FOREIGN_KEYS', true),
        ],

        'mariadb' => [
            'driver' => 'mysql',
            'host' => env('DB_MARIADB_HOST', '127.0.0.1'),
            'port' => env('DB_MARIADB_PORT', '3306'),
            'username' => env('DB_MARIADB_USERNAME', ''),
            'password' => env('DB_MARIADB_PASSWORD', ''),
            'database' => env('DB_MARIADB_DATABASE', ''),
            'url' => env('DB_MARIADB_URL', '') ?: generateUrl(
                'mysql',
                env('DB_MARIADB_HOST', '127.0.0.1'),
                env('DB_MARIADB_PORT', '3306'),
                env('DB_MARIADB_USERNAME', ''),
                env('DB_MARIADB_PASSWORD', ''),
                env('DB_MARIADB_DATABASE', '')
            ),
            'unix_socket' => env('DB_MARIADB_SOCKET', ''),
            'charset' => 'utf8mb4',
            'collation' => 'utf8mb4_unicode_ci',
            'prefix' => env('DB_MARIADB_PREFIX', env('DB_PREFIX', '')),
            'prefix_indexes' => true,
            'strict' => true,
            'engine' => null,
            'options' => extension_loaded('pdo_mysql') ? array_filter([
                PDO::MYSQL_ATTR_SSL_CA => env('MYSQL_ATTR_SSL_CA'),
            ]) : [],
        ],

        'mysql' => [
            'driver' => 'mysql',
            'host' => env('DB_MYSQL_HOST', '127.0.0.1'),
            'port' => env('DB_MYSQL_PORT', '3306'),
            'username' => env('DB_MYSQL_USERNAME', ''),
            'password' => env('DB_MYSQL_PASSWORD', ''),
            'database' => env('DB_MYSQL_DATABASE', ''),
            'url' => env('DB_MYSQL_URL', '') ?: generateUrl(
                'mysql',
                env('DB_MYSQL_HOST', '127.0.0.1'),
                env('DB_MYSQL_PORT', '3306'),
                env('DB_MYSQL_USERNAME', ''),
                env('DB_MYSQL_PASSWORD', ''),
                env('DB_MYSQL_DATABASE', '')
            ),
            'unix_socket' => env('DB_MYSQL_SOCKET', ''),
            'charset' => 'utf8mb4',
            'collation' => 'utf8mb4_unicode_ci',
            'prefix' => env('DB_MYSQL_PREFIX', env('DB_PREFIX', '')),
            'prefix_indexes' => true,
            'strict' => true,
            'engine' => null,
            'options' => extension_loaded('pdo_mysql') ? array_filter([
                PDO::MYSQL_ATTR_SSL_CA => env('MYSQL_ATTR_SSL_CA'),
            ]) : [],
        ],

        'pgsql' => [
            'driver' => 'pgsql',
            'host' => env('DB_POSTGRES_HOST', '127.0.0.1'),
            'database' => env('DB_POSTGRES_DATABASE', ''),
            'port' => env('DB_POSTGRES_PORT', '5432'),
            'username' => env('DB_POSTGRES_USERNAME', ''),
            'password' => env('DB_POSTGRES_PASSWORD', ''),
            'url' => env('DB_POSTGRES_URL', '') ?: generateUrl(
                'pgsql',
                env('DB_POSTGRES_HOST', '127.0.0.1'),
                env('DB_POSTGRES_PORT', '5432'),
                env('DB_POSTGRES_USERNAME', ''),
                env('DB_POSTGRES_PASSWORD', ''),
                env('DB_POSTGRES_DATABASE', '')
            ),
            'charset' => 'utf8',
            'prefix' => env('DB_POSTGRES_PREFIX', env('DB_PREFIX', '')),
            'prefix_indexes' => true,
            'search_path' => 'public',
            'sslmode' => 'prefer',
        ],

        // 'sqlsrv' => [
        //     'driver' => 'sqlsrv',
        //     'url' => env('DATABASE_URL'),
        //     'host' => env('DB_HOST', 'localhost'),
        //     'port' => env('DB_PORT', '1433'),
        //     'database' => env('DB_DATABASE', 'forge'),
        //     'username' => env('DB_USERNAME', 'forge'),
        //     'password' => env('DB_PASSWORD', ''),
        //     'charset' => 'utf8',
        //     'prefix' => '',
        //     'prefix_indexes' => true,
        //     // 'encrypt' => env('DB_ENCRYPT', 'yes'),
        //     // 'trust_server_certificate' => env('DB_TRUST_SERVER_CERTIFICATE', 'false'),
        // ],

    ],

    /*
    |--------------------------------------------------------------------------
    | Migration Repository Table
    |--------------------------------------------------------------------------
    |
    | This table keeps track of all the migrations that have already run for
    | your application. Using this information, we can determine which of
    | the migrations on disk haven't actually been run in the database.
    |
    */

    'migrations' => 'migrations',

    /*
    |--------------------------------------------------------------------------
    | Redis Databases
    |--------------------------------------------------------------------------
    |
    | Redis is an open source, fast, and advanced key-value store that also
    | provides a richer body of commands than a typical key-value system
    | such as APC or Memcached. Laravel makes it easy to dig right in.
    |
    */

    'redis' => [

        'client' => env('REDIS_CLIENT', 'phpredis'),

        'options' => [
            'cluster' => env('REDIS_CLUSTER', 'redis'),
            'prefix' => env('REDIS_PREFIX', Str::slug(env('APP_NAME', 'laravel'), '_').'_database_'),
        ],

        'default' => [
            'host' => env('REDIS_HOST', '127.0.0.1'),
            'port' => env('REDIS_PORT', '6379'),
            'username' => env('REDIS_USERNAME'),
            'password' => env('REDIS_PASSWORD'),
            'database' => env('REDIS_DB', '0'), // Databases identified by integers
            'url' => env('REDIS_URL'),
        ],

        'cache' => [
            'host' => env('REDIS_HOST', '127.0.0.1'),
            'port' => env('REDIS_PORT', '6379'),
            'username' => env('REDIS_USERNAME'),
            'password' => env('REDIS_PASSWORD'),
            'database' => env('REDIS_CACHE_DB', '1'), // Databases identified by integers
            'url' => env('REDIS_URL'),
        ],
    ],

];
