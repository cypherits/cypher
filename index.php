<?php
/**
 * @package Cypher Blog
 * @author Azim Uddin <webcypherbd@gmail.com>
 * @copyright Copyright 2016 - Cypher IT Solutions.
 * @license http://opensource.org/licenses/MIT	MIT License.
 * @link(http://www.cypherits.com, Cypher IT Solutions).
 */

/**
 * [$system_dir This defines the path to core system folder]
 * @var string
 */
$system_dir = "system/";

/**
 * [$application_dir This defines the path to application folder]
 * @var string
 */
$application_dir = "application/";

/**
 * Define a constent of environment to modify the system error reporting.
 */
const ENVIRONMENT = "developer";

/**
 * Modify the error reporting according to system environment.
 * However the error reporting can be overwritten by developer inside script later.
 */
switch(ENVIRONMENT){
	case "developer":
		error_reporting(E_ALL);
		break;
	case "testing":
		error_reporting(E_ALL & ~E_NOTICE);
		break;
	case "production":
		error_reporting(0);
		break;
	default:
		error_reporting(E_ALL);
		break;
}

/**
 * Defining constants of systempath
 */
if(is_dir($system_dir)){
	define("BASEPATH", realpath($system_dir)."/");
}else{
	die("System Path Not Found. Please check in index.php");
}
if(is_dir($application_dir)){
	define("APPPATH", realpath($application_dir)."/");
}else{
	die("Application Path Not Found. Please check in index.php");
}
/**
 * Load Bootstrap File
 */
require_once BASEPATH."core/bootstrap.php";