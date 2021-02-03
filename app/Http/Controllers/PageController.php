<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function showOne($id)
    {
    	if($id >=1 && $id <=5)
    	{

    	$pages = [
		1 => 'страница 1',
		2 => 'страница 2',
		3 => 'страница 3',
		4 => 'страница 4',
		5 => 'страница 5',
	];
    	return $pages[$id];
    }
    else return 'northing found';
    }


    public function showAll()
    {
    	return 'Hi! Im \'showAll\' method';
    }
}
