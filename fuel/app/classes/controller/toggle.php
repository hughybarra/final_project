<?php

class Controller_Toggle extends Controller_Rest
{
    /*
    * setting reastaurant to null on every reset
    */
    protected $restaurant = null;

	public function action_index()
	{
		echo 'action index ran';
        // toggle_layout();
	}


    public function post_index()
    {
        // This will be called when the HTTP method is POST.

        // get the current template and swap it out

        echo 'post var worked';
    }

    public function get_toggle_layout(){

        // find and validate restaurant url
        if (! $this->restaurant = Model_Restaurant::get_by_url($this->param('url')))
        {
            throw new HttpNotFoundException;
        }


        $entry = Model_Restaurant::get_by_url($this->param('url'));

        if ($entry->template == 'template_1'){

            $entry->template = 'template_2';

        }
        elseif ($entry->template = 'template_2'){
            $entry->template = 'template_1';
        }

        $entry->save();


    }
}


