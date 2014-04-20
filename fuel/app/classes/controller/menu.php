<?php

/**
 *
 */
class Controller_Menu extends Controller_Template
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
	public function get_view($type)
	{
		$this->template->body = View::forge('restaurant/menuType', []);
	}


}