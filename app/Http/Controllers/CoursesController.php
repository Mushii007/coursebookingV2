<?php

namespace App\Http\Controllers;
use App\Course;
use DB;
use Illuminate\Http\Request;
//use Illuminate\Support\Facades\Request;

use App\Http\Requests;

class CoursesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index(Request $request)
    {
        //

        //$courselist = DB::table('courses')->offset(0)->limit(1)->get();
            $courselist = Course ::paginate(2);
            dd($courselist);
            if ($request->ajax()) {
        
            $view =view('pages.data', compact('courselist'))->render();
            return response()->json(['html'=>$view]);

            }

        return view('pages.home', compact('courselist'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($coursename)
    {
        //
       // $course = Courses :: find('id' , $id)->value('course_name');
        
        $course = DB::table('courses')->where('course_name',$coursename)->get();
        return view('pages.course',compact('course'));


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function SearchCourses(Request $request){

         $coursename = $request->get('coursename');
        $city = $request->get('city');
       
        $coursedate = $request->get('coursedate');
        $coursesession = $request->get('coursesession');
       // $hasCoffeeMachine = Request::get('hasCoffeeMachine');

        // Perform the query using Query Builder
        $result1 = DB::table('courses')
            ->select(DB::raw("*"))
            ->where('course_name', '=', $coursename)
            ->orWhere('city', '=', $city)
            /*->orWhere('course_date', '=', $coursedate)
            ->orWhere('course_session', '=', $coursesession)
            */->get();
            $result2 = DB::table('courses')
            ->select(DB::raw("*"))
            ->where('course_date', '=', $coursedate)
            ->orWhere('course_session', '=', $coursesession)
            ->get();
            if($result1)
            {

                $results = $result1;
                return view('pages.search',compact('results'));
            }
            if($result2)
            {

                $results = $result2;
                return view('pages.search',compact('results'));

            }

            else{

                return redirect()->to('/');
            }
/*
        $results = DB::table('courses')
        ->where('course_name', '=', $coursename)
        ->orWhere('city', '=', $city)
        ->orWhere('course_date', '=', $coursedate)
        ->orWhere('course_session', '=', $coursesession)
        ->orderBy('course_id','desc')
        ->get();
*/

        //return $result;
        

    }
   /* public function GetCities(){

        //$cities = DB::table('courses')->pluck('city');
        $cities = Courses::pluck('city');
        return view('pages.searchform', ['cities' => $cities]);


    }
*/}
