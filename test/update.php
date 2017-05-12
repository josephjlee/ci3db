<?php
require 'vendor/autoload.php';
require 'my-error-handle.php';

define('BASEPATH', realpath('vendor/codeigniter/framework/system') . DIRECTORY_SEPARATOR);

$ci3db =& anovsiradj\CI3DataBase::init();
$ci3db->set_config_file('my-config-database.php');

$db =& $ci3db::db();

$db->query('UPDATE t SET v = "foo and bar is common example for naming variable" WHERE k = "foobar"');
$db->query('UPDATE t SET v = "lorem ipsum is common example for dummy data" WHERE k = "loremipsum"');
