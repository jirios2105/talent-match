<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Curriculum;

class CurriculumController extends Controller
{
	public function index(Request $request)
	{
    	

		\Storage::disk('local')->put($request->archivo->getClientOriginalName(),  \File::get($request->archivo));
	}

	public function download()
	{
	  $pathtoFile = storage_path('app').'/plantilla-curriculum-vitae-9.doc';
      return response()->download($pathtoFile);
	}


}
