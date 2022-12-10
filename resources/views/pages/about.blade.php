@extends('master')
@section('content')
    @section('title','About')
    @php $contact = App\Models\Contact::get()->first() @endphp
    @php $about = App\Models\About::get()->first() @endphp

    <div>
        <div class="container">
        <div class="about-us-banner">
            <div class="about-us-banner-content">
                <h3>Sunnah Money Transfer <br> Become a part of New</h3>
                    <h1>PAYMENT REVOLUTION!</h1>
            </div>
        </div>
        </div>
    </div>
    
    <div class="about-us-bottom">
        <div class="container">
        <div class="row">
            <div class="col-md-12">
                    <h1><strong>{!!$about->title!!}</strong></h1>
    
                    <p>
                    {!!$about->description!!}
                    </p>
                </div>
                 
        </div>
        </div>
    </div>
    
    <div class="about-us-bottom-img">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <img src="{{asset('frontend/assets/images/2.png')}}" />
                </div>
                <div class="col-md-4">
                    <img src="{{asset('frontend/assets/images/3.png')}}" />
                </div>
                <div class="col-md-4">
                    <img src="{{asset('frontend/assets/images/4.png')}}" />
                </div>
            </div>
        </div>
    </div>
    
@endsection
