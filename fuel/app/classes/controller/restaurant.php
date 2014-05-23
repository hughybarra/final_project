<?php

/**
 * Controller is in charge of all restaurant assets and routing
 */
class Controller_Restaurant extends Controller_Template
{
	/**
	 * setting reataurant to null on reset
	 */
	protected $restaurant = null;
	/**
	 *
	 */
	public function before()
	{
		parent::before();

		// find and validate restaurant url
		if (! $this->restaurant = Model_Restaurant::get_by_url($this->param('url')))
		{
			throw new HttpNotFoundException;
		}

		// check if template is defined to avoid template errors with ajax requests
		if ($this->template)
		{
			$this->template->set_global('restaurant', $this->restaurant, false);
		}
	}

	/*
	*Delete this when done
	*/
	public function get_test()
	{
		// echo 'this is running';
		$this->template->body = View::forge("restaurant/trash", []);
	}

	/**
	 * Routing Get Pages
	 */
	public function get_view()
	{
		/*
		* checking for the template version to load.
		*/

		$this->template->body = View::forge("restaurant/{$this->restaurant->template}", []);

	}

	/*
	* View list
	*/

	public function get_about()
	{
		$this->template->body = View::forge('restaurant/about', []);
	}

	public function get_location()
	{
		$this->template->body = View::forge('restaurant/location', []);
	}

	public function get_menu()
	{
		$this->template->body = View::forge('restaurant/menu', []);
	}

	public function get_menuType()
	{

		$this->template->body = View::forge('restaurant/menuType', []);

	}
}