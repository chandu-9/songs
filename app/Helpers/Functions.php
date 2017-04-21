<?php
namespace App\helpers;

/**
* class to implement custom functions
*/
class Functions
{
	
	/**
	* display array in proper format
	* 
	*  To use this : use App\Helpers\Functions;
	*  Functions::printr($val);
	*  in tpl {{Functions::printr($val)}}
	**/
	public static function printr($res)
	{
		echo "<pre>";
		print_r($res);
		echo "</pre>";
	}
}