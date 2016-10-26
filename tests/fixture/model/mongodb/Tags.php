<?php
/**
 * Lithium: the most rad php framework
 *
 * @copyright     Copyright 2016, Union of RAD (http://union-of-rad.org)
 * @license       http://opensource.org/licenses/bsd-license.php The BSD License
 */

namespace lithium\tests\fixture\model\mongodb;

class Tags extends \lithium\data\Model {

	public $hasMany = array('ImagesTags');

	protected $_schema = array(
		'_id' => array('type' => 'id'),
		'name' => array('type' => 'string', 'length' => 50),
		'author' => array('type' => 'id')
	);
}

?>