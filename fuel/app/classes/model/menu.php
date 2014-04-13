<?php

class Model_Menu extends Orm\Model
{
	protected static $_properties = array(
		'id',
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
     * public
     */
    public static function get_menu_by_restaurant($restaurant)
	{
		return static::query()->where('restaurant_id', $restaurant->id)->get_one();
	}
}