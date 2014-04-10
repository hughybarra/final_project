<?php

/**
 * Fuel is a fast, lightweight, community driven PHP5 framework.
 *
 * @package    Fuel
 * @version    1.7
 * @author     Hugh Ybarra
 * @license    MIT License
 */


class Controller_PizzaJohns extends Controller_Template {

	/*
		Pizza Johns main controller
	*/

	public function action_index(){


		$m_restaurant = new Model_Restaurant();

		// grab the name from the url
		$name =  Uri::segment(1);
		// lowercase the name
		$name = strtolower($name);
		// search for it in the DB
		$restaurant = $m_restaurant->get_id($name);

		// gret the restaurant id
		echo $restaurant['id'];





	}
}