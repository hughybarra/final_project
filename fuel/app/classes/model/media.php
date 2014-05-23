<?php

/*
* Media Model. Model holds all image media types for webloading
*/
class Model_Media extends Orm\Model
{

	protected static $_properties = array (
		'id',
		'restaurant_id',
		'identifier',
		'media_type',
		'path',
		'alt',
		// 'created_at',
		// 'updated_at'
	);

	protected static $_observers = array (
		'Orm\Observer_CreatedAt' => array(
			'events' => array ('before_insert'),
			'mysql_timestamp' => true,
		),
		'Orm\Observer_updatedAt' => array(
			'events'=> array('before_save'),
			'mysql_timestamp' => true,
		),
	);

	 /*
     * This function grabs one media type based off of restaurant ID and media Identifier
     * The Media Identifier tells us what media position it belongs to.
     */
    public static function get_media_by_restaurant(Model_Restaurant $restaurant, $identifier){
    	return static::query()->where('restaurant_id', $restaurant->id)->
    					where('identifier', $identifier)->
    					get_one();
    }

}