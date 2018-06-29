<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;

class UniversityController extends Controller
{

	function __construct()
	{
		 $this->middleware('UActive');
	}

	public function index()
	{
		$user=User::find(4);
		
		
		return view('universities.index');
	}

	public function load_students(Request $request)
	{
		//return view('universyties.index');
	}

	public function load_student(Request $request)
	{
		# code...
	}

}
