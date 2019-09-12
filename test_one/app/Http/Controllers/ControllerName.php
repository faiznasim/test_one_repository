<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class ControllerName extends Controller
{
	public function function_name()
	{
		DB::insert('insert into students (id, name) values (?, ?)', [4, 'Sakin']);

		$result_array = DB::select('select * from students where id = ? and name = ?', [3, 'Saif']);
		//$result_array = DB::select('select * from students where id = :variable1 and name = :variable2', ['variable1' => 1, 'variable2' =>'Rakib']);
		return view('folder_name.view_name', ['variable_name' => $result_array]);

	}
}

