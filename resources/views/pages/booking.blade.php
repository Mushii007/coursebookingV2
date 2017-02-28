@extends('layouts.master')

@section('title', 'Booking')

@section('content')
    <div class="container inside-content">



<div class="coursedetails">

</div>

		<div class="row">
        <div class="col-md-6">
        <form role="form" action="" method="post" id="course_form" name="bookingform">
        

        <div class="form-group">
                             	   
				 <input type="hidden" class=""  name="refrence_no" value="{{ $booking_no }}"> 

				 @foreach($booking as $book)                      
                 
                 <input type="hidden" class="" name="c_name" id="course_name" value="{{$book->course_name}}">
                 <input type="hidden" class=""  name="price" value="{{$book -> price}}">

                 @endforeach
        </div>
		

        </form>

		</div>
		</div>

@endsection