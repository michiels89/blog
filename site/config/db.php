<?php
/**
 * Database Configuration
 *
 * All of your system's database connection settings go in here. You can see a
 * list of the available settings in vendor/craftcms/cms/src/config/DbConfig.php.
 *
 * @see craft\config\DbConfig
 */

//return [
//    'driver' => getenv('DB_DRIVER'),
//    'server' => getenv('127.0.0.1'),
//    'user' => getenv('root'),
//    'password' => getenv('root'),
//    'database' => getenv('blog'),
//    'schema' => getenv('DB_SCHEMA'),
//    'tablePrefix' => getenv('craft'),
//    'port' => getenv('3306')
//];

return array(

    // The database server name or IP address. Usually this is 'localhost' or '127.0.0.1'.
    'server' => '127.0.0.1',

    // The name of the database to select.
    'database' => 'CraftTest',

    // The database username to connect with.
    'user' => 'root',

    // The database password to connect with.
    'password' => 'root',

    // The prefix to use when naming tables. This can be no more than 5 characters.
    'tablePrefix' => 'craft',

);