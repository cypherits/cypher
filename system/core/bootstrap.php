<?php if(!defined("BASEPATH")) exit("No Direct Script Access!");
/**
 * @package Cypher Blog
 * @author Azim Uddin <webcypherbd@gmail.com>
 * @copyright Copyright 2016 - Cypher IT Solutions.
 * @license http://opensource.org/licenses/MIT	MIT License.
 * @link(http://www.cypherits.com, Cypher IT Solutions).
 */

/**
 * import core functions, loader, config and uri
 */

require_once BASEPATH."core/functions.php";
import_config();
echo $config["base_url"];