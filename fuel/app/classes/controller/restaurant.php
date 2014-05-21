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

		/*
		I'm going to try somehting interesting here. This might be bad, i'm not really sure. It seemed
		like a good idea at the time.

		So the plan is to load in a view file. Set all of the variables. Once the variables have been put into place
		i'm going to copy that file and paste it into the public css file for rendering. I'm sure there is a better way
		but i could not figure out a better way to do it.
		*/

		// set restaurant




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