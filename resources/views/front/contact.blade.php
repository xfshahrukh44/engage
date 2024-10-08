@php
$page = \Illuminate\Support\Facades\DB::table('pages')->where('id', 8)->first();
$sections = \Illuminate\Support\Facades\DB::table('section')->where('page_id', 8)->get();
@endphp

@extends('layouts.app')
@section('title', 'Contact us')

@section('css')

@endsection

@section('content')
<section class="inner-banner contact-banner" style="background-image: url({{ asset($page->image) }})!important;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="main-heading" aos-init aos-animate="" data-aos="fade-left" data-aos-offset="300"
                    data-aos-easing="ease-in-sine" data-aos-duration="1500">
                    {{-- <h1>Contact <span class="blue"> --}}
                            {{-- <span class="ml6"> --}}
                                {{-- <span class="text-wrapper"> --}}
                                    {{-- <span class="letters">US</span> --}}
                                    {{-- </span> --}}
                                {{-- </span> --}}
                            {{-- </span> --}}
                        {{-- </h1> --}}
                    {!! $page->content !!}
                </div>
            </div>
        </div>
    </div>
</section>

<section class="contact-info">
    <div class="container">
        <div class="row">
            <!-- <div class="col-lg-4">
                             <div class="find-us">
                                  <h4>Find us</h4>

                             </div>
                        </div> -->

            <div class="col-lg-6">
                <div class="find-us">
                    <h4>Contact us</h4>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="find-us icon-flex">
                    <h4>Follow us</h4>
                </div>
            </div>

            <div class="col-lg-12">
                <div class="find-us  text-center">
                    <h5> Questions? Concerns? Eligibility? Enrollment?
                        We are just a phone call or an email away! </h5>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="find-us">
                    <p><span>Agent:</span><a href="tel:+833-775-1105">833-775-1105</a></p>
                    <p><span>Office:</span><a href="tel:+987-654-321">954-229-9062</a></p>

                </div>
            </div>
            <div class="col-lg-6">
                <div class="find-us icon-flex text-left">
                    <p>
                        <a target="_blank" href="https://www.facebook.com/people/Engage-Health-Insurance/61559676192349/"><i class="fa-brands fa-facebook-f"></i></a>
                        <a target="_blank" href="https://www.instagram.com/engagehealthinsurancellc/"><i class="fa-brands fa-instagram"></i></a></p>
                </div>
            </div>

            <div class="col-lg-12">
                <div class="find-us  text-center pt-3">
                    <p class="border-bot"><span>Email:</span><a
                            href="mailto:support@domain.com">engagedirect@engagehealthinsurance.com</a></p>
                </div>
            </div>

            <div class="col-lg-12">
                <div class="find-us  text-center pt-3">
                    <h5> Fill out the form below and we will be in touch with you soon to answer your questions or help
                        with a quotation on your ACA health insurance plan options: </h5>
                </div>
            </div>

        </div>
    </div>
</section>

<section class="forn-info">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="contact-form">
                    <h2 class="side-heading aos-init" aos-animate="" aos-init="" aos-animate="" data-aos="fade-down"
                        data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="1000">Get in <span
                            class="blue">touch</span> </h2>
                </div>
                <form action="{{ route('front.save-inquiry') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label>First Name *</label>
                                <input type="text" name="fname" class="form-control" placeholder="Peter" required="">
                            </div>
                            <div class="form-group">
                                <label>Street Address</label>
                                <input type="text" name="address" class="form-control" placeholder="">
                            </div>

                            <div class="form-group">
                                <label>City</label>
                                <input type="text" name="city" class="form-control" placeholder="State">
                            </div>

                            <div class="form-group">
                                <label>Email *</label>
                                <input type="text" name="email" class="form-control" placeholder="" required="">
                            </div>

                            <div class="form-group">
                                <label>Type of Insurance Inqiry:</label>
                                <select name="type_of_insurance" class="form-control">
                                    <option value="Individual Health">Individual Health</option>
                                    <option value="Family Health">Family Health</option>
                                    <option value="Dental/Vision">Dental/Vision</option>
                                    <option value="Other">Other</option>
                                </select>
                            </div>
                            <div class="mssg-group">
                                <button type="submit" class="btn btn-custom">send a message</button>
                            </div>

                            <div class="form-check">
                                <input type="checkbox" class="form-check-input gaapo" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Yes, email me about news, deadline
                                    or update information regarding ACA enrollment timelines. </label>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label>Last Name (optional)</label>
                                <input type="text" name="lname" class="form-control" placeholder="">
                            </div>
                            <div class="form-group">
                                <label>Apt, Suite, Bldg</label>
                                <input type="text" name="suite" class="form-control" placeholder="">
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>State</label>
                                        <input type="text" name="state" class="form-control" placeholder="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Zip Code *</label>
                                        <input type="text" name="zipcode" class="form-control" placeholder=""
                                            required="">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Phone *</label>
                                <input type="text" name="phone" class="form-control" placeholder="" required="">
                            </div>
                            <div class="form-group">
                                <textarea name="notes" id="textarea" class="form-control"
                                    placeholder="How can we help you? (do not include sensitive information such as SSN here) *"
                                    rows="6"></textarea>
                            </div>


                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection

@section('js')

@endsection
