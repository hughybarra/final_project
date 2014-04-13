<?php

/**
 *
 */
class Controller_Restaurant extends Controller_Template
{
	/**
	 *
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

	/**
	 * Routing Get Pages
	 */
	public function get_view()
	{
		$this->template->body = View::forge('restaurant/view', []);
	}

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
}