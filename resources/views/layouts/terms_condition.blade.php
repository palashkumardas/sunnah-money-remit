@extends('master')
@section('content')
@section('title','Terms & Conditions')

    
<div class="term-condition-area">
  <div class="container">
      <h1>TERMS &amp; CONDITIONS</h1>
      <div class="row">
          <div class="col-md-12">
            <P>{!!$terms->description!!}</P>
                
          </div>
      </div>
  </div>
</div>
<div class="clear"></div>


  

@endsection