<?php if(!defined("BASEPATH"))exit("No Direct Script Acces");

class CY_Config{
	private static $config = array();
	public static function load_config_files($path = APPPATH."config"){
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
		self::$config = array_merge(self::$config, $_config);
	}
	public static function get_item($item_name = null){
		if($item_name == null){
			$result = self::$config;
		}else if(is_string($item_name)){
			$result = self::get_item_by_name($item_name);
		}else if(is_array($item_name)){
			$result = new stdClass;
			foreach($item_name as $item){
				$result->{$item} = self::get_item_by_name($item);
			}
		}
		return $result;

	}
	private static function get_item_by_name($item_name){
		if(array_key_exists($item_name, self::$config)){
			return self::$config[$item_name];
		}else{
			return false;
		}
	}
}