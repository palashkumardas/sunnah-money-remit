@extends('master')
@section('content')
    @section('title','Money Transfer')
    @php $contact = App\Models\Contact::get()->first() @endphp
    @php $about = App\Models\About::get()->first() @endphp

    <div class="money-transfer-area">
        <div class="container">
            <div class="row mobile_app_area">
                
                <div class="col-md-4">
                    <img src="{{asset('frontend/assets/images/app_view.png')}}" />
                </div>
                <div class="col-md-8">
                    <h1><strong>Download Our Mobile <br> App to transfer money easily</strong></h1>
    
                    <div class="mobile_app_content">
                        <p class="pt-5 pb-5">Your dedicated money transfer specialist with thousands of locations across Bangladesh for cash pick-up, Mobile wallet (Bkash) and bank deposit.</p>
                        <div>
                            <ul>
                                <li><span class="box"></span>Convenient</li>
                                <li><div class="box"></div>Easy and Simple to use</li>
                                <li><div class="box"></div>Track Transfers</li>
                                <li><div class="box"></div>Receive Notifications</li>
                                <li><div class="box"></div>2 Factor Authentication Security</li>
                            </ul>
                        </div>
    
                        <div>
                            <a href="https://play.google.com/store/apps/details?id=com.stm_sunnahmoney" target="_blank"> <img src="{{asset('frontend/assets/images/google_app_download.png')}}"/> </a>
                            <a href="https://apps.apple.com/gb/app/sunnah-money-transfer/id1576318682" target="_blank"> <img src="{{asset('frontend/assets/images/iphone_app_down.png')}}"/> </a>
                        </div>
                    </div>
                </div>
            </div>
    
            <div class="row about-us-bottom-img">
                <div class="col-md-4">
                    <div class="money-child" style="height:145px;">
                        <img src="{{asset('frontend/assets/images/icons/shield.svg')}}"/>
                        <div class="text-area">
                            <h4>Secure</h4>
                            <p>We’re a regulated financial services company handling more than 1 million transactions a month</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="money-child" style="height:145px;">
                        <img src="{{asset('frontend/assets/images/icons/alarm-clock.svg')}}"/>
                        <div class="text-area">
                            <h4>Fast</h4>
                            <p>We’re a regulated financial services company handling more than 1 million transactions a month</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="money-child" style="height:145px;">
                        <img src="{{asset('frontend/assets/images/icons/lock-alt.svg')}}"/>
                        <div class="text-area">
                            <h4>Safe</h4>
                            <p>We’re a regulated financial services company handling more than 1 million transactions a month</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

@endsection
