<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;
use DB;
use App\Http\Requests;

class BookngController extends Controller
{
    //
	public function Booking($courseid) {

		$booking_no = "LMS-BNO-".rand();
		$booking = DB::table('courses')->where('course_id',$courseid)->get();
	    return view('pages.booking',compact('booking'))->with('booking_no',$booking_no);

    }

}
