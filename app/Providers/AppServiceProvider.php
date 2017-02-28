<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
//use Illuminate\Support\Facades\View;
//use Illuminate\Support\Facades\View;
use App\Course;
use DB;
use View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(View $view)
    {
        //
        view()->composer('pages.searchform', function($view){
        $mycity = DB::table('courses')->distinct()->select('course_name','city','course_session')->get();
        $mycity2 = DB::table('courses')->distinct()->select('course_date')->get();
        //return view('pages.searchform', compact('mycity'));

        $view->with('mycity',$mycity)->with('mycity2',$mycity2);
    });

    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
