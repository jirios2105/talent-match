<?php
namespace APP\Traits;
use App\User;
use Illuminate\Http\Request;

trait University
{

	public function showCreateStudentsForm()
	{
		return view('universities.create_students');
	}
	public function createStudent(Request $request)
	{
		dd($request);	
	}

}