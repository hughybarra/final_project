<?php

class Controller_Files extends Controller
{
	public function before()
	{
		// Do nothing as of now
	}

	public function get_test()
	{
		echo 'Get Css Working <hr>';
	}

	public function get_test2(){
		echo 'test two working <hr>';
	}

	/*
	*This function is echoes out all of the css files
	*/

	public function get_cssTemplate($url)
	{

		if (! $restaurant = Model_Restaurant::get_by_url($url))
		{
			throw new HttpNotFoundException;
		}

		$this->response = $response = new Response();
		$this->response->set_header('Content-type', 'text/css; charset: UTF-8');

		return View::forge('cssfiles/main', array(
		    // 'menu' => $menu,
		    // 'articles' => $articles,
		    // 'footer_links' => $footer_links,
		));

		echo Asset::css('reset.css');
		echo Asset::css($restaurant->template.'/bootstrap.css');
	}

	/*
	*
	*/
	public function get_restaurant($restaurant){
		return $restaurant;
	}


	public function action_index()
	{
		// do nothing as of now
	}


}
