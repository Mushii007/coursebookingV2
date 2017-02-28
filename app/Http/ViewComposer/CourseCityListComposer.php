<?php

namespace App\Http\ViewComposer;
use Illuminate\Contracts\View\View;
use App\Repositries\Courses\CourseRepositries;

class CourseCityListComposer{


		private $course;

		public function __construct(CourseRepositries $course){

				$this->course = $course;		
			}

		public function compose(View $view){

			$courses= $this->course->getCities();
			$view->with('courses',$courses);
		}



}