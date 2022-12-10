@extends('master')
@section('content')
    @section('title','Home')
    @php $contact = App\Models\Contact::get()->first() @endphp
    @php $about = App\Models\About::get()->first() @endphp

        
<div class="contact-area">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="child">
                    <h1>{!!$contact->title!!}</h1>
                    <form method="POST" action="https://www.sunnahmoneytransfer.com/contact-us">
                        <input type="hidden" name="_token" value="P5jWB8gUCXGtNWrljE8EMf16aHjUIyXloHbr4Pdo">                        <div class="form_box">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="input_box">
                                        <input type="text" name="name" class="input" id="name" required="">
                                        <label class="label" id="name-label"><span>*</span> Name</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input_box">
                                        <input type="email" name="email" class="input" id="email" required="">
                                        <label class="label" id="email-label"><span>*</span> Email</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="input_box">
                                        <input type="text" name="number" class="input" id="number">
                                        <label class="label" id="number-label">Number</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="input_box">
                                        <textarea type="text" name="message" class="input textarea-input-height" id="msge" rows="20"></textarea>
                                        <label class="label" id="msge-label">Massege</label>
                                    </div>
                                </div>
                            </div>
                            <center>
                                <button class="submit" type="submit">SUBMIT</button>
                            </center>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-4" style="margin-top: 8rem">
                <h3>Contact</h3>
                <p><i class="fas fa-phone-volume" aria-hidden="true" ></i><a href="tel:02077298100" style="color: #212529">{!!$contact->phone_one!!}</a></p>
                <p><i class="fas fa-phone-volume" aria-hidden="true" ></i> <a href="tel:02077298100" style="color: #212529"> {!!$contact->phone_one!!}</a></p>
                <p><i class="fas fa-envelope" aria-hidden="true" ></i> <a href="tel:support@sunnahmoneytransfer.com" style="color: #212529">{!!$contact->email_one!!}</a></p>
                <p><i class="fa-2xl fa fa-location-arrow pr-2" aria-hidden="true" ></i>{!!$contact->address!!}</p>

               
            </div>
        </div>
    </div>
</div>


@endsection
