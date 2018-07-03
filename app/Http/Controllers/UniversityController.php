<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use App\Traits\University;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
class UniversityController extends Controller
{
	use University;

	function __construct()
	{
		$this->middleware(['auth','UActive','role:university']);
		// $this->middleware('');
	}



	public function index()
	{
		$user=User::find(4);
		
		return view('universities.index');
	}

	public function register_students(){
		return view('universities.create_students');
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
