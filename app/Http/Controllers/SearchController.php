<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositries\Courses\CourseRepositries;
use App\Http\Requests;
use App\Courses;
use DB;

class SearchController extends Controller
{
    //

	private $course;

	public function __construct(CourseRepositries $course){

		$this->course = $course;
	}



    public function SearchByCity(){
/*
    	//$cities = DB::table('courses')->pluck('city')->get();*/
    	//$cities = Courses::all();
    //	return view('pages.searchform', compact('cities'));
    	//$cities = DB::table('courses')->pluck('city');
    	//return view('pages.searchform');

    }
}
