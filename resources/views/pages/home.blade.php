@extends('layouts.master')

@section('title', 'Home')

<style type="text/css">
        .ajax-load{
            background: #e1e1e1;
            padding: 10px 0px;
            width: 100%;
        }
    </style>


@section('content')
 <!-- Page Content -->
    <div class="container">


        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <!-- <h1 class="page-header">Page Heading
                    <small>Secondary Text</small>
                </h1> -->
                <div class="jumbotron">
                      <h1 class="text-center">LMS Course Booking Portal</h1>
                      <p>This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
                      <!-- <p><a class="btn btn-primary btn-lg">Learn more</a></p> -->
                </div>
            </div>
        </div>
        <!-- /.row -->

            <!--Search Form -->

           @include('pages.searchform') 


            <!--Search form end-->
<div class="row" id="post-data">
            <!--Course list starts -->
@include('pages.data')
</div>

        <!-- /.row -->

            <!-- End course list -->
            <span id="" class="btn btn-primary show_more" title="Load more posts">Show more</span>

<!-- <div class="ajax-load text-center" style="display:none">
    <p><img src="http://demo.itsolutionstuff.com/plugin/loader.gif">Loading More post</p>
</div>
 -->
         <!-- Pagination -->
       <!--  <div class="row text-center">
            <div class="col-lg-12">
                <ul class="pagination">
                    <li>
                        <a href="#">&laquo;</a>
                    </li>
                    <li class="active">
                        <a href="#">1</a>
                    </li>
                    <li>
                        <a href="#">2</a>
                    </li>
                    <li>
                        <a href="#">3</a>
                    </li>
                    <li>
                        <a href="#">4</a>
                    </li>
                    <li>
                        <a href="#">5</a>
                    </li>
                    <li>
                        <a href="#">&raquo;</a>
                    </li>
                </ul>
            </div>
        </div> -->
        <!-- /.row -->

<script type="text/javascript">
    var page = 1;
    $(document).on('click','.show_more',function() {
        /*if($(window).scrollTop() + $(window).height() >= $(document).height()) {
            page++;
            loadMoreData(page);
        }*/
        page++;
            loadMoreData(page);

    });

    function loadMoreData(page){
      $.ajax(
            {
                url: '?page=' + page,
                type: "get",
                beforeSend: function()
                {
                   console.log('Success');
                }
            })
            .done(function(data)
            {
                if(data.html == " "){
                    $('.show_more').html("No more records found");
                     $('.show_more').show();
                    return;
                }
               //    $('.show_more').hide();
                $("#post-data").append(data.html);
            })
            .fail(function(jqXHR, ajaxOptions, thrownError)
            {
                  alert('server not responding...');
            });
    }
</script>


  @endsection      