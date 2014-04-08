<?php

class Model_PageData extends Orm\Model{
	protected static $_properties = array (
		'id',
		'rest_id',
		'page_type',
		'file_path',
		'created_at',
		'updated_at'
	);

	// protected static $_observers = array(
	// 	'Orm\Observer_created_at' => array(
	// 		'events'=> array('before_insert'),
	// 		'mysql_timestamp' => true,
	// 	),
	// 	'Orm\Observer_updated_at' => array(
	// 		'events' => array('before_save'),
	// 		'mysql_timestamp' => true;
	// 	)
	// )
}