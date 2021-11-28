<?php
define('APP_PATH', dirname(__FILE__) . '/../');

require('../config.php');
require('functions.php');
require('data/mysql.class.php');
require('data/static.class.php');

Data::init(new MySqlDataProvider(CONFIG['db']));