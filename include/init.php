<?php
/*set error model IF display_error = on*/
error_reporting(E_ALL & ~E_NOTICE);
/* set charset = utf-8 */
header("Content-type: text/html; charset=utf-8");
/* get path*/
define('ROOT_PATH', str_replace('include/init.php', '', str_replace('\\', '/', __FILE__)));



require_once(ROOT_PATH . 'include/config.php');

require_once(ROOT_PATH . 'include/class.db.php');
$db = new DB($db_dsn, $db_user, $db_pass);

$db->exec('SET NAMES utf8');
$db_dsn = $db_user = $db_pass = NULL;
?>