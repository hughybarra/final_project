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

		// end variables
		//===========================

		// grab restaurant DATA from db
		//===========================


		// Restaurant Model

		// grab restaurant data from database
		// if active is true pull in data
		// $restaurant = Model_Restaurants::find($rest_id);
		//===========================
		//Location Model

		// grab location fro database
		// $location = Model_Location::find($rest_id);
		//parse locationdata into array

		//===========================

		// markdown model
		// $m_markdown = Model_Markdown::find_all_by_rest_id($rest_id);


		// foreach($m_markdown as $key){
		// 	array_push($markdown_data, $key['page_data']);
		// }

		// var_dump($markdown_data);

		// $test = new Model_Restaurant();

		// $test->get_document('pizzaJohns');



		ViewModel::forge('pizzaJohns/index');









		// return Response::forge(View::forge('restaurants/pizzajohns/index'));
	}
}