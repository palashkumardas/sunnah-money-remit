@extends('master')
@section('content')
@section('title','Cookies Policy')
<div class="term-condition-area">
   <div class="container">
    <div class="row">
      <div class="col-md-12">
        <p>{!!$cookies->description!!}</p>
      </div>
    </div>
     
   </div>
 </div>

@endsection