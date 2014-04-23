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

	// protected static $_belongs_to = array(
	// 	'restaurant' => array(
	// 		'key_from'       => 'restaurant_id',
	// 		'model_to'       => 'Model_Restaurant',
	// 		'key_to'         => 'id',
	// 		'cascade_save'   => true,
	// 		'cascade_delete' => false,
	// 	)
	// );

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
	 *
	 */
	public static function get_menu_types_by_restaurant(Model_Restaurant $restaurant)
	{
		//return all menus by restaurant
		return static::query()->select('type')->where('restaurant_id', $restaurant->id)->get();
	}

    /*
     * public
     */
    public static function get_menu_by_restaurant(Model_Restaurant $restaurant, $type)
	{

		return static::query()->where('restaurant_id', $restaurant->id)->
						where('type', $type)->
						get_one();
	}


}