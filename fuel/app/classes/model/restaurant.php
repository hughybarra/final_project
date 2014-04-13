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
		$this->menu = Model_Menu::get_menu_by_restaurant($this);
		return $this;
	}
	/**
	 * get_location() function. Returns a location Object
	 */
	public function get_location()
	{
		$this->location = Model_Location::get_location_by_restaurant($this);
		return $this;
	}// end get_location function
	//======================================

	/**
	 * get_markdown() function. Returns the specified markdown if it exists
	 */
	public function get_markdown($type)
	{
		$this->markdown = Model_Markdown::get_markdown_by_restaurant($this, $type);
		return $this;
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