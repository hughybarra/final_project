<?php

class Controller_PizzaJohns extends Controller {

	/*
		Pizza Johns main controller
	*/

	public function action_index(){


		// Variabls
		//===========================
		$active 	= '';
		$rest_id 	= 1;
		$name 		= '';
		$title 		= '';
		$logo 		= '';

		$location 	= array();

		$media 			= array();
		$media_type 	= array();
		$menu 			= array();
		$menu_type 		= array();
		$page_data 		= array();
		$page_type 		= array();
		$social_media 	= array();

		// end variables
		//===========================

		// grab restaurant from db
		//===========================


		// Restaurant Model
		// grab restaurant data from database
		$m_rest = Model_Restaurants::find($rest_id);


		//Location Model
		// grab all addresses from the database
		// $m_location = Model_Location::find('all', array('conditions' => 'rest_id ='.$rest_id));
		$m_location = Model_Location::find($rest_id);

		foreach ($m_location as $value){
			echo $value;
		}



		// return Response::forge(View::forge('restaurants/pizzajohns/index'));
	}
}