@extends('master')
@section('content')
    @section('title','Home')
    @php $contact = App\Models\Contact::get()->first() @endphp
    @php $about = App\Models\About::get()->first() @endphp

{{-- <style>
 .calc-img img{
  background-size: cover;
  background-repeat: no-repeat;
  background-position: center ;
  width:100%;
  height:100%;
}

.cal-ifr iframe{
  width: 100%;
  margin-left:20px;
}
@media screen and (min-width:767px) and (max-width:991px) {
  .calc-img img{
    height: 390px;
  }
  .cal-ifr iframe{
    width: 100%;
  }
}
@media screen and (max-width:767px) {
  .calc-img img{
    height: 100%;
  }
  .cal-ifr iframe{
    width: 100%;
  }
}
@media (min-width: 576px) { 
  .cal-ifr iframe{
    width: 100%;
  }
}   
</style> --}}
   <!-- start content section -->
   

<div class="bcme-a-part">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h4 style="color: #096A52; font-weight:normal;">Sunnah Money Transfer</h4>
                <h3>Your Trusted and Reliable Partner</h3>
                <h1><b>PAYMENT REVOLUTION!</b></h1>
                <p>Online Money Transfer Service World Wide</p>
                <a href="#" class="learn-more">Learn More</a>
            </div>
            <div class="col-md-4">
                <iframe src="https://worldwidesvc.co.uk/shacal/indexv2.php?aid=6ca8c12f-2eb9-42cd-a99a-b6378a4d9610" style="border:0px #ffffff none;border-radius:5px;" name="myiFrame" scrolling="no" frameborder="1" marginheight="0px" marginwidth="0px" height="430px" width="120%" allowfullscreen></iframe>
                <!-- <img src="https://www.sunnahmoneytransfer.com/frontend/images/1.png" />  -->
{{--                 <iframe src="https://www.worldwidesvc.co.uk/shacal/?aid=6ca8c12f-2eb9-42cd-a99a-b6378a4d9610"
                    style="border:0px # none;" name="myiFrame" scrolling="no" frameborder="0" marginheight="0px"
                    marginwidth="0px" height="350px" width="100%" allowfullscreen></iframe> --}}
                    <div class="text-center">
                        <p class="text-black" style="font-size:14px"><strong>Powered By</strong> <img src="frontend/assets/images/power.png" alt=""  style="width:100px"></p>
                      </div>
            </div>
        </div>
    </div>
</div>
<!-- end hero section -->
<div class="who-we-are">
    <div class="container">
        <div class="row">
            <div class="col-md-6 img_align">
                <div class="row">
                    <div class="col-md-6">
                        <img src="{{asset('frontend/assets/images/3.png')}}" class="mrgn-top-100" />
                    </div>
                    <div class="col-md-6">
                        <img src="{{asset('frontend/assets/images/2.png')}}" />
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <h1>Who We Are</h1>
                <p>
                    Your dedicated money transfer specialist with thousands of locations across Bangladesh for cash
                    pick-up, Mobile wallet (Bkash) and bank deposit.
                </p>
                <a href="#" class="learn-more">Learn More</a>
            </div>
        </div>
    </div>
</div>
<!-- end who are section -->
<div class="our-feature">
    <div class="container">
        <div class="row">
            <div class="col-md-1">

            </div>
            <div class="col-md-10">
                <div class="row">
                    <div class="col">
                        <h2 class="text-center">Our Features</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="child">
                            <img src="{{asset('frontend/assets/images/icons/sheild.png')}}" />
                            <p>Fast & Secure Delivery</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="child">
                            <img src="{{asset('frontend/assets/images/icons/ratio.png')}}" />
                            <p>Fast, Safe & Secure Transfers</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="child">
                            <img src="{{asset('frontend/assets/images/icons/undraw_online_transactions_02ka.png')}}" />
                            <p>Transfer With Ease</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-1">

            </div>
        </div>
    </div>
</div>
<!-- end our feature section -->
<div class="money-transfer-area">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <img src="{{asset('frontend/assets/images/icons/componen.png')}}" class="img-fluid" />
            </div>
            <div class="col-md-8 p-5">
                <h1><strong>Money transfer made simple</strong></h1>
                <div class="money-child">
                    <img src="{{asset('frontend/assets/images/icons/bank.png')}}" class="img-fluid" />
                    <div class="text-area">
                        <h4>Bank Deposit</h4>
                        <p>Transfer money abroad instantly to bank accounts in over 90 countries</p>
                    </div>
                </div>
                <div class="money-child">
                    <img src="{{asset('frontend/assets/images/icons/financail-money-payment-pay-hand.png')}}" />
                    <div class="text-area">
                        <h4>Cash Pickup</h4>
                        <p>Send money to over 250,000 pick-up locations </p>
                    </div>
                </div>
                <!-- <div class="col-md-6">
                        <div class="money-child">
                            <img src="https://www.sunnahmoneytransfer.com/frontend/images/icons/top.png"/>
                            <div class="text-area">
                                <h4>Mobile Top-up</h4>
                                <p>Send mobile airtime </p>
                            </div>
                        </div>
                    </div> -->
                <div class="money-child">
                    <img src="{{asset('frontend/assets/images/icons/wallet.png')}}" class="img-fluid" />
                    <div class="text-area">
                        <h4>Mobile Wallet</h4>
                        <p>Send money directly to a mobile money account</p>
                    </div>
                </div>
                <!-- <div class="col-md-6">
                        <div class="money-child">
                            <img src="https://www.sunnahmoneytransfer.com/frontend/images/icons/money.png"/>
                            <div class="text-area">
                                <h4>Home Delivery</h4>
                                <p>We’ll even deliver to a home address</p>
                            </div>
                        </div>
                    </div> -->
                <!-- <div class="col-md-6">
                        <div class="money-child">
                            <img src="https://www.sunnahmoneytransfer.com/frontend/images/icons/payment.png"/>
                            <div class="text-area">
                                <h4>Cash Card Reload</h4>
                                <p>Top-up a prepaid cash card</p>
                            </div>
                        </div>
                    </div> -->
            </div>
        </div>

        <div class="row mobile_app_area">
            <div class="col-md-8">
                <h1><strong>Download Our Mobile <br> App to transfer money easily</strong></h1>

                <div class="mobile_app_content">
                    <p class="pt-5 pb-5">Your dedicated money transfer specialist with thousands of locations for cash
                        pick-up, Mobile wallet (Bkash) and bank deposit.</p>

                    <div class="app_icon">
                        <a href="https://play.google.com/store/apps/details?id=com.stm_sunnahmoney" target="_blank"> <img src="{{asset('frontend/assets/images/google_app_download.png')}}"
                                /> </a>
                        <a href="https://apps.apple.com/gb/app/sunnah-money-transfer/id1576318682" target="_blank"> <img src="{{asset('frontend/assets/images/iphone_app_down.png')}}"/>
                        </a>
                    </div>
                </div>
                
            </div>
            <div class="col-md-4">
                <img src="{{asset('frontend/assets/images/app_view.png')}}"/>
            </div>
        </div>
    </div>
</div>
<!-- end money transfer area -->
<div class="testimonial-area">
    <div class="container">
        <h1><strong>Client Testimonials</strong></h1>
            <div class="row">
                <div class="col-md-12">
                    <center>
                        <div class="owl-carousel owl-theme testimonial-child">
                            <div class="child item">
                                <img src="{{asset('frontend/assets/images/testimonial/testimonial-1.png')}}" />
                                <p>Very convenient & safe money transfer app for daily use with good customer service. I already made 17 successful transactions. Highly recommended -</p>
                                <h5>- MOROM ALI.</h5>
                                <!--<h6> ABC Company</h6>-->
                            </div>
                            <div class="child item">
                                <img src="{{asset('frontend/assets/images/testimonial/testimonial-1.png')}}" />
                                <p>Sunnah money transfer app is user friendly and secure for sending money to Bangladesh. -	</p>
                                <h5>ZAHED AHMED</h5>
                                <!--<h6> ABC Company</h6>-->
                            </div>
                        </div>
                    </center>
                </div>
            </div>
    </div>
</div>
<!-- end testimonial area -->	

@endsection
