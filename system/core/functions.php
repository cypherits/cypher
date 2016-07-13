<?php if(!defined("BASEPATH"))exit("No Direct Script Access");
/**
 * @package Cypher Blog
 * @author Azim Uddin <webcypherbd@gmail.com>
 * @copyright Copyright 2016 - Cypher IT Solutions.
 * @license http://opensource.org/licenses/MIT	MIT License.
 * @link(http://www.cypherits.com, Cypher IT Solutions).
 */
if(!function_exists("import_config")){
	function import_config($path = APPPATH."config"){
		$config_files = scandir($path);
		foreach ($config_files as $files) {
			if($files != "." && $files != ".."){
				if(is_file($path."/".$files)){
					require_once $path."/".$files;
				}else if(is_dir($path."/".$files)){
					import_config($path."/".$files);
				}else{
					exit("Error Loading Config Files!");
				}
			}
		}
	}
}