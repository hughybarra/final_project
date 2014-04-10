<?php

/**
 *
 */
class Controller_Restaurant extends Controller_Template
{
	/**
	 *
	 */
	protected $resturant = null;

	/**
	 *
	 */
	public function before()
	{
		parent::before();

		// find and validate resturant url
		if (! $this->resturant = Model_Restaurant::get_by_url($this->param('url')))
		{
			throw new HttpNotFoundException;
		}

		// check if template is defined to avoid template errors with ajax requests
		if (! $this->template)
		{
			$this->template->set_global('resturant', $this->resturant, false);
		}
	}

	/**
	 *
	 */
	public function get_view()
	{
		$this->template->body = View::forge('resturant/view', [

		]);
	}

	public function get_contact()
	{

	}
}