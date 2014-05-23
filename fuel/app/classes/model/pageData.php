<?php

/*
*Model Page data is in control of all page data
*/
class Model_Pagedata extends Orm\Model
{
	protected static $_properties = array(
		'id',
		'restaurant_id',
		'type',
		'data',
		// 'created_at',
		// 'updated_at',
	);

    protected static $_observers = array(
	    'Orm\Observer_CreatedAt' => array(
	            'events' => array('before_insert'),
	            'mysql_timestamp' => false,
	    ),
	    'Orm\Observer_UpdatedAt' => array(
	            'events' => array('before_save'),
	            'mysql_timestamp' => false,
	    ),
    );

    /*
    * grabs page data by restaurant type and id
    */
    public static function get_pageData_by_restaurant(Model_Restaurant $restaurant, $type)
	{
		return static::query()
			->where('restaurant_id', $restaurant->id)
			->where('type', $type)
			->get_one();
	}
}
