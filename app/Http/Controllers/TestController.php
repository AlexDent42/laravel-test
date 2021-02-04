<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function sum($num1, $num2)
    {
    	return $num1 + $num2;
    }


    public function show()
    {

    	$arrayTest = [
    		'var1'=> 'Im First variable', 
    		'var2'=> 'Im second',
    		'name'=> 'Mike',
    		'surname'=> 'Blade',
    		'salary'=> 20000,

    	];
    	return view('test.test', ['arr'=>[1,2,3,4]]);
    }

    public function location($city, $country)
    {
    	$result = [
    		'city' => $city,
    		'country' => $country,
    		'year' =>2020,
    		'string' => '<b>bold string here</b>'
    	];
    	return  view('test.test', $result);
    }



    public function learnBlade($id)
    {
    	$result = [
		[
			'name' => 'user1',
			'surname' => 'surname1',
			'salary' => 1000,
		],
		[
			'name' => 'user2',
			'surname' => 'surname2',
			'salary' => 2000,
		],
		[
			'name' => 'user3',
			'surname' => 'surname3',
			'salary' => 3000,
		],
	];

    	return view('test.learn-blade', ['result' => $result]);
    }
}
