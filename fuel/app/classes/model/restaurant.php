<?php

class Model_Restaurant extends Orm\Model{

	protected static $_properties = array (
		'id',
		'name',
		'url',
		'active',
		'latitude',
		'longitude',
		'template',
		'created_at',
		'updated_at'
	);

	// protected static $_has_many = array('menus');

	// protected static $_has_many = array(
	// 	'menus' => array(
	// 		'key_from'       => 'id',
	// 		'model_to'       => 'Model_Menu',
	// 		'key_to'         => 'restaurant_id',
	// 		'cascade_save'   => true,
	// 		'cascade_delete' => false,
	// 	)
	// );

	protected static $_observers = array(
		'Orm\Observer_created_at' => array(
			'events'=> array('before_insert'),
			'mysql_timestamp' => true,
		),
		'Orm\Observer_updated_at' => array(
			'events' => array('before_save'),
			'mysql_timestamp' => true,
		),
	);

	/**
	* This function goes into the Media model and runs the get_media_by_restaurant function which
	* will be grabbing all of the media information belonging to a specific identifier and returning that media Object
	*/
	public function get_media($identifier){
		return Model_Media::get_media_by_restaurant($this, $identifier);
	}

	/**
	*
	**/
	public function get_template(){

	}

	/**
	 *
	 */
	public function get_menus()
	{
		return Model_Menu::get_menu_types_by_restaurant($this);

	}

	/**
	 *
	 */
	public function get_menu($type)
	{

		return Markdown::parse(
			Model_Menu::get_menu_by_restaurant($this, $type)->data
			);
	}
	/**
	 * get_location() function. Returns a location Object
	 */
	public function get_location()
	{

		return Model_Location::get_location_by_restaurant($this);
	}// end get_location function
	//======================================

	/**
	 * get_pageData() function. Returns the specified pageData if it exists
	 */
	public function get_pageData($type)
	{
		return Markdown::parse(
			Model_PageData::get_pageData_by_restaurant($this, $type)->data
		);
	}// end get_pageData() function
	//======================================

	/**
	 * get_by_url() funciton. Grabs the id of a restaurant based off url
	 */
	public static function get_by_url($url)
	{
		return static::query()->where('url', $url)->get_one();
	}// end get_by_url function
	//======================================


}