<?php

class Model_Resturant_Document extends Orm\Model
{


	public static function get_by_name(Model_Resturant $resturant, $name)
	{
		return static::query()->where('resturant_id', $resturant->id)->where('name', $name)->get_one();
	}
}