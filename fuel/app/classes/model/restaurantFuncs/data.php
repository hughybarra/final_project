<?php

class Model_Restaurant_Data extends Model
{
	public static function get_restaurant_by_name($name)
	{
		echo 'get restaurant by id running';
		// return static::query()->where('resturant_id', $resturant->id)->where('name', $name)->get_one();
		// return static::query()->where('name', $name)->get_one();
	}
}