<?php
// myTinyTodo Database connection configuration
define('MTT_DB_TYPE', 'mysql');
define('MTT_DB_HOST', getenv('MYSQL_HOST'));
define('MTT_DB_USER', getenv('MYSQL_USER'));
define('MTT_DB_PASSWORD', getenv('MYSQL_PASSWORD'));
define('MTT_DB_NAME',  getenv('MYSQL_DB'));
define('MTT_DB_PREFIX', 'mtt_');
define('MTT_DB_DRIVER', '');
define('MTT_SALT', getenv('MYSQL_SALT'));
