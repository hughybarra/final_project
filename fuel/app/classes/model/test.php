<?php

class Model_Test extends Model
{
	public static function get_restaurant_by_name($orm, $name)
	{
		$data = $orm->query()->where('name', $name)->get_one();
		return $data;


		// return static::query()->where('resturant_id', $resturant->id)->where('name', $name)->get_one();
		// return static::query()->where('name', $name)->get_one();

	}
}