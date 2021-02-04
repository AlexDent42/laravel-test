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


    public function hrefs()
    {
       $links = [
        [
            'text' => 'text1',
            'href' => 'href1',
        ],
        [
            'text' => 'text2',
            'href' => 'href2',
        ],
        [
            'text' => 'text3',
            'href' => 'href3',
        ],
    ];


       return view('/app', ['arr' => $links]);
    }


    public function employees()
    {
        $users = [
        [
            'name' => 'user1',
            'surname' => 'surname1',
            'banned' => true,
        ],
        [
            'name' => 'user2',
            'surname' => 'surname2',
            'banned' => false,
        ],
        [
            'name' => 'user3',
            'surname' => 'surname3',
            'banned' => true,
        ],
        [
            'name' => 'user4',
            'surname' => 'surname4',
            'banned' => false,
        ],
        [
            'name' => 'user5',
            'surname' => 'surname5',
            'banned' => false,
        ],
    ];

    return view('/app', ['arr'=>$users]);

}


            public function month()
            {
                $alldays = range(1, 31);
                $currentday = date('j');


                return view('/app', ['alldays'=> $alldays, 'currentday'=>$currentday]);
            }
}





















