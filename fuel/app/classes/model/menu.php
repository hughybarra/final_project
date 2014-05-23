<?php

class Model_Menu extends Orm\Model
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
	 *grabs menu types data by restaurant id
	 */
	public static function get_menu_types_by_restaurant(Model_Restaurant $restaurant)
	{
		//return all menus by restaurant
		return static::query()->select('type')->where('restaurant_id', $restaurant->id)->get();
	}

    /*
     * grabs menu data by type
     */
    public static function get_menu_by_restaurant(Model_Restaurant $restaurant, $type)
	{

		return static::query()->where('restaurant_id', $restaurant->id)->
						where('type', $type)->
						get_one();
	}
}