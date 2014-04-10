<?php

class Controller_Test extends Controller_Template
{

	public function action_index()
	{

		$test = ViewModel::forge('test/index');
		// $test->view();
	}
}