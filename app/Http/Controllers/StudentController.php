<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    
    public function index()
    {
    	return view('students.index');
    }

    public function load_curriculum(Request $request)
    {
    	
    }

    public function view_vacants($filter=null)
    {
    	
    }

   
}
