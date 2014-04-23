<?php

class Model_Location extends Orm\Model
{
	protected static $_properties = array(
		'id',
		'restaurant_id',
		'street',
		'city',
		'state',
		'zip',

		'created_at',
		'updated_at',
	);

	protected static $_observers = array(
		'Orm\Observer_created_at' => array(
			'events'=> array('before_insert'),
			'mysql_timestamp' => true,
		),
		'Orm\Observer_updated_at' => array(
			'events' => array('before_save'),
			'mysql_timestamp' => true,
		)
	);

	/**
	 *
	 */
	// this was not working for some reason.
	// public static function get_by_restaurant(Model_Resturant $restaurant)
	public static function get_location_by_restaurant(Model_Restaurant $restaurant)
	{
		return static::query()->where('restaurant_id', $restaurant->id)->get_one();
	}

}