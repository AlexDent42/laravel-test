<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResponseController extends Controller
{
    public function show()
    {
    	return response('Hello World', 200)
				->header('Content-Type', 'text/plain')
				->header('X-Header-One', 'Header Value')
				->header('X-Header-Two', 'Header Value');
    }
}
