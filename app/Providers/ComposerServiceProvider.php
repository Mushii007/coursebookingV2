<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use App\Repositries\Courses\EloquentCourses;
use App\Repositries\Courses\CourseRepositries;

class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        //dd(1);
             view()->composer('pages.home','App\Http\ViewComposer\CourseCityListComposer');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //

//    $this->app->singleton(CourseRepositries::class, EloquentCourses::class);
    $this->app->bind('App\\Repositries\\Courses\\CourseRepositries','App\\Repositries\\Courses\\EloquentCourses');
    }
}
