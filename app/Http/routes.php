<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
/*
Route::get('/', function () {
    return view('pages.home');
});
*/
Route::get('/','CoursesController@index');
Route::get('course/{coursename}','CoursesController@show');
Route::get('booking/{courseid}','BookngController@Booking');
Route::post('search',array('as'=>'search','uses'=>'CoursesController@SearchCourses'));
//Route::get('searchform',array('as'=>'searchform','uses'=>'SearchController@GetCities'));

Route::auth();

Route::get('/home', 'HomeController@index');


Route::group(['middleware' => 'admin'], function () {
    /*Route::get('/home', function ()    {
        // Uses Auth Middleware
    });
*/
    Route::get('admin/profile', function () {
        // Uses Auth Middleware
        return view('pages.admin');
    });

    


});

Route::get('permission', 'HomeController@PermissionDenied');
Route::get('profile', 'HomeController@UserProfile');