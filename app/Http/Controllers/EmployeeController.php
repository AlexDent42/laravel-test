<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    private $employees;
		
		public function __construct()
		{
			$this->employees = [
				1 => [
					'name' => 'user1',
					'surname' => 'surname1',
					'salary' => 1000,
				],
				2 => [
					'name' => 'user2',
					'surname' => 'surname2',
					'salary' => 2000,
				],
				3 => [
					'name' => 'user3',
					'surname' => 'surname3',
					'salary' => 3000,
				],
				4 => [
					'name' => 'user4',
					'surname' => 'surname4',
					'salary' => 4000,
				],
				5 => [
					'name' => 'user5',
					'surname' => 'surname5',
					'salary' => 5000,
				],
			];
		}


		public function showOne($id)
		{
			return 
			'<h1>User name: '.$this->employees[$id]['name'].'</h1>
			<h2>User surname: '.$this->employees[$id]['surname'].'</h2>
			<h2>User salary: '.$this->employees[$id]['salary'].'</h2>';
		}


		public function showField($id, $field)
		{
			return 
			'<h1> Here field what u asked:'.$this->employees[$id][$field].'</h1';
		}
}
