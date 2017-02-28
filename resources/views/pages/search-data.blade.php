@foreach($results as $result)


        
            <!-- <div class="col-md-7">
                <a href="#">
                    <img class="img-responsive" src="http://placehold.it/700x300" alt="">
                </a>
            </div> -->
            <div class="row">
            <div class="col-md-10 ">
                <a class="course-title-link" href="course/{{$result->course_name}}"><h3 class="course-title">{{ $result->course_name  }}</h3></a>
                <div class="row">
               



                <div class="col-md-4">
                <span class="glyphicon glyphicon-calendar"></span>&nbsp; <?php echo date('l', strtotime($result->course_date)).",&nbsp;".date("j F, Y",strtotime($result->course_date));?>
                </div>
                <!--<div class="col-md-3">
                <span class="glyphicon glyphicon-time"></span>&nbsp;  
                </div>-->
                <div class="col-md-3">
               <span class="glyphicon glyphicon-user"></span>&nbsp; {{ $result->seats  }}  seats available
                </div>
                <div class="col-md-2">
               <span class="fa fa-money"></span>&nbsp;  <strong>{{ $result->price  }}</strong>
                </div>
                <div class="col-md-3">
                <span class="glyphicon glyphicon-time"></span><ul style="list-style-type:none; margin:-20px 0 0 -18px;"><li> {{ $result->course_session  }}</li></ul>
                </div>
               <div class="clearfix"></div>
                 <div class="col-md-6" style="margin:12px 0 0 0; ">
                <span class="glyphicon glyphicon-map-marker"></span>&nbsp;   {{ $result->location  }}            </div>
                <div class="col-md-6" style="margin:12px 0 0 0; ">
                <span class="glyphicon glyphicon-map-marker"></span>&nbsp; {{ $result->city  }}
                </div>
                </div>
                <br/>
                <h4>Details</h4>
                <p>
                {{ $result->course_description  }}
                </p>
              
            </div>
            <div class="col-md-offset-10 col-sm-2">
             <a class="btn btn-primary" href="course/{{$result->course_name}}">View details <span class="glyphicon glyphicon-chevron-right"></span></a>
            </div>
        
        </div>
        <hr>
    
@endforeach