<?php

/*
* Model Location is in charge of all location assets
*/
class Model_Location extends Orm\Model
{
	protected static $_properties = array(
		'id',
		'restaurant_id',
		'street',
		'city',
		'state',
		'zip',
		'phone_number',
		'phone_raw',
		'full_address',
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
	 * Grabs the location data of restaurant by given id
	 */
	public static function get_location_by_restaurant(Model_Restaurant $restaurant)
	{
		return static::query()->where('restaurant_id', $restaurant->id)->get_one();
	}


}