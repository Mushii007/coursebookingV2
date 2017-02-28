@extends('layouts.master')

@section('title', 'Home')

@section('content')
    <div class="container">


@include('pages.searchform')

<div class="row">
<div class="col-md-6">
<h3>Search Result</h3>

</div>
</div>
<hr>

@include('pages.search-data')

@endsection