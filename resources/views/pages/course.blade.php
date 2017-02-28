@extends('layouts.master')

@section('title', 'Home')

@section('content')

    <div class="container inside-content">
<div class="row">
             @foreach ($course as $cour)
            <div class="col-md-10 ">
                <h3 class="course-title">{{ $cour->course_name }}</h3>
                <div class="row">
               
                <div class="col-md-4">
                <span class="glyphicon glyphicon-calendar">&nbsp;{{ date('l', strtotime( $cour->course_date )) }}, {{date("j F,Y",strtotime($cour->course_date))}}</span>
                </div>
                <!--<div class="col-md-3">
                <span class="glyphicon glyphicon-time"></span>&nbsp;  
                </div>-->
                <div class="col-md-3">
               <span class="glyphicon glyphicon-user"></span>&nbsp; {{ $cour->seats }}  seats available          </div>
                <div class="col-md-2">
               <span class="glyphicon glyphicon-usd"></span>&nbsp; <strong>{{ $cour->price }} </strong>
                </div>
                <div class="col-md-3">
                <span class="glyphicon glyphicon-time"></span>&nbsp;  {{ $cour->course_session }}              </div>
               <div class="clearfix"></div>
                 <div class="col-md-6" style="margin:12px 0 0 0; ">
                <span class="glyphicon glyphicon-map-marker" ></span>&nbsp; {{ $cour->location }}<span id="address"></span>
                </div>
				<div class="col-md-6" style="margin:12px 0 0 0; ">
                <span class="glyphicon glyphicon-map-marker"></span>&nbsp; {{ $cour->city }}     </div>
                </div>
                <br/>

                <div class="row">
                <div class="col-md-8">
                <h4>Details</h4>
                <p> {{ $cour->course_description }}  </p>
                </div>
				<div class="col-md-4">

               

				<h4>Location</h4>
                </div>
<div class="col-md-offset-10 col-sm-2">
             <a class="btn btn-primary" href="{{ URL::to('booking',$cour->course_id)}}">Book Now <span class="glyphicon glyphicon-chevron-right"></span></a>
            </div>
                </div>
</div>
                </div>
                
@endforeach
               

@endsection               