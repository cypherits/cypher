<?php if(!defined("BASEPATH"). exit("No Direct Script Access!"));
/**
 * @package Cypher Blog
 * @author Azim Uddin <webcypherbd@gmail.com>
 * @copyright Copyright 2016 - Cypher IT Solutions.
 * @license http://opensource.org/licenses/MIT	MIT License.
 * @link(http://www.cypherits.com, Cypher IT Solutions).
 */

/**
 * Loading Config Class
 */

require_once (BASEPATH."/core/config.php");
/**
 * Loading configuration files
 */
CY_Config::load_config_files();
/**
 * Loading common functions
 */
require_once (BASEPATH."/core/functions.php");
/**
 * Loading URI Class
 */