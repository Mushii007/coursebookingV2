<!--filter form  -->
        <div class="row">
         <div class="col-lg-12 col-md-12 search-filters">

            <fieldset class="scheduler-border">
            <legend class="scheduler-border"><h3>Search by:</h3></legend>
            <form action = "search" name= "filter-form" method="post" id="search-form">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

            <div class="row">
				
				
				<div class="col-md-3">
                
                <div class="form-group">
                <select name="coursename" class="form-control" id="search-filter">
                <option value="">Search by Course</option>
               
            @foreach($mycity as $c)
            <option value="{{ $c->course_name }}">{{ $c->course_name }}</option>
            @endforeach

                </select>
                
                </div>
                </div>

                <div class="col-md-3">
                
                <div class="form-group">
                <select name="city" class="form-control" id="search-filter">
                <option value="">Search by City</option>
                    @foreach($mycity as $c)
                    <option value="{{ $c->city }}">{{ $c->city }}</option>
                    @endforeach  
                </select>
                
                </div>
                </div>

                <div class="col-md-3">
                
                <div class="form-group">
                <select name="coursedate" class="form-control" id="search-filter">
                 <option value="">Select month</option>
                 @foreach($mycity2 as $c2)
                <option value="{{ $c2->course_date }}">{{  Carbon\Carbon::parse($c2->course_date)->format('F Y') }}</option>

                 @endforeach
 <!--                <option value="01">January</option>
                <option value="02">February</option>
                <option value="03">March</option>
                <option value="04">April</option>
                <option value="05">May</option>
                <option value="06">June</option> -->
                </select>
                
                </div>
                </div>

                <div class="col-md-3">
                
                <div class="form-group">
                <select name="coursesession" class="form-control" id="search-filter">
                <option value="">Search by Session</option>
                    @foreach($mycity as $c)
                    <option value="{{ $c->course_session }}">{{ $c->course_session }}</option>
                    @endforeach  
                </select>
                
                </div>
                </div>

                <div class="col-md-3">
                    <div class="form-group">
                        
                        <input type="submit" name="submit" value="Search" class="btn btn-primary">

                    </div>
                </div>
            </div>
            
            </form>

            </fieldset>


            </div>

            </div>    