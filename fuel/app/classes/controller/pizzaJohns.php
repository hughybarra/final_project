<?php

/**
 * Fuel is a fast, lightweight, community driven PHP5 framework.
 *
 * @package    Fuel
 * @version    1.7
 * @author     Hugh Ybarra
 * @license    MIT License
 */


class Controller_PizzaJohns extends Controller {

	/*
		Pizza Johns main controller
	*/

	public function action_index(){


		// public Variabls
		//===========================
		$active 	= '';
		$rest_id 	= 1;
		$name 		= '';
		$title 		= '';
		$logo 		= '';

		//location
		$location = array();
		$street 	= '';
		$city 		= '';
		$state 		= '';
		$zip 		= '';

		//menu

		//media

		//markdown

		//social Media



		// end variables
		//===========================

		// grab restaurant DATA from db
		//===========================


		// Restaurant Model
		// grab restaurant data from database
		// if active is true pull in data
		$m_rest = Model_Restaurants::find($rest_id);

		//Location Model
		// grab location fro database
		$m_location = Model_Location::find($rest_id);


		$location['street'] 	= $m_location['street'];
		$location['city'] 		= $m_location['city'];
		$location['state'] 		= $m_location['state'];
		$location['zip'] 		= $m_location['state'];






		// return Response::forge(View::forge('restaurants/pizzajohns/index'));
	}
}