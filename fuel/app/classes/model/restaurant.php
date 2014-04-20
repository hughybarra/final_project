<?php

class Model_Restaurant extends Orm\Model{

	protected static $_properties = array (
		'id',
		'name',
		'url',
		'active',
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
		echo 'Restaurant get_menu($type) running';
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
	 * get_markdown() function. Returns the specified markdown if it exists
	 */
	public function get_markdown($type)
	{
		return Markdown::parse(
			Model_Markdown::get_markdown_by_restaurant($this, $type)->data
		);
	}// end get_markdowns() function
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