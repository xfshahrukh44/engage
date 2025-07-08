@php
$page = \Illuminate\Support\Facades\DB::table('pages')->where('id', 33)->first();
$sections = \Illuminate\Support\Facades\DB::table('section')->where('page_id', 33)->get();
$banners = \Illuminate\Support\Facades\DB::table('banners')->get();
@endphp

@extends('layouts.app')
@section('title', 'Home')

@section('css')
<style>


        ul.list-items-parent {
            list-style: disc;
            padding: 0 11px;
            font-weight: 600;
            font-size: 18px;
            margin-top: 1rem;
            width: 69%;
        }

        ul.list-items-parent li {
            margin: 13px 0;
        }

    .aetna-img img {
        width: 14%;
    }


    .tabs-coverage p span {
        color: #117cbe;
        font-size: 14px;
        font-weight: 600;
    }

    .include-health ul li span i {
        width: 30px;
        height: 30px;
        background: #117cbe;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 60%;
        color: white;
    }


    .flux-div-main {
        display: flex;
        align-items: center;
        gap: 30px;
        margin-bottom: 15px;
    }

    .code.text-center {
        display: flex;
        justify-content: center;
        padding-top: 26px;
    }

    .banner-img .banner-before::before {
        position: absolute;
        content: "";
        width: 20%;
        height: 100%;
        background: aqua;
        box-shadow: 23px 0px 27px -2px black;
    }
    .banner-img .banner-before{
        position: relative;
        z-index: 0;
    }
    button.owl-dot.active {
        outline: none !important;
    }
</style>
@endsection

@section('content')


<section class="main-sec">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 p-0">
                <div class="main-banner-slides">
                    <div class="banner-slides owl-carousel owl-theme">
                        @foreach($banners as $banner)
                        <div class="item">
                            <div class="banner-img">
                                <img src="{{asset($banner->image)}}" class="img-fluid" alt="">
                                <div class="main-heading">
                                    {{-- <h1>Discover how an--}}
                                        {{-- <span class="blue">--}}
                                            {{-- <span class="ml6">--}}
                                                {{-- <span class="text-wrapper">--}}
                                                    {{-- <span class="letters">ACA health plan</span>--}}
                                                    {{-- </span>--}}
                                                {{-- </span>--}}
                                            {{-- </span>--}}
                                        {{-- </h1>--}}
                                    {{-- <h3>--}}
                                        {{-- offers affordable, accessible options which we can tailor<br> for your--}}
                                        {{-- location, budget and needs.--}}
                                        {{-- <span class="blue">--}}
                                            {{-- <span class="d-block"></span>--}}
                                            {{-- </span>--}}
                                        {{-- </h3>--}}
                                    {!! $banner->description !!}
                                    <div class="code">
                                        <input type="text" placeholder="Zip Code" class="input_zipcode">
                                        <a href="#" class="btn btn-custom anchor_start_my_quote">Start My Quote</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach


                        {{-- <div class="item">--}}
                            {{-- <div class="banner-img banner-before extra-div-banner">--}}
                                {{-- <img src="{{asset('images/main-banner-3.png')}}" class="img-fluid" alt="">--}}
                                {{-- <div class="main-heading">--}}
                                    {{-- <h1><span class="blue">--}}
                                            {{-- <span class="ml6">--}}
                                                {{-- <span class="text-wrapper">--}}
                                                    {{-- <span class="letters">ACA OPEN ENROLLMENT </span>--}}
                                                    {{-- </span>--}}
                                                {{-- </span>--}}
                                            {{-- <br>--}}
                                            {{-- </span> 1 Nov, 2024 - Jan 15, 2025--}}
                                        {{-- </h1>--}}
                                    {{-- <h3>Evaluate, Update, Choose Your Plan<br> for 2025! Get Set, Get Covered!--}}
                                        {{-- <span--}} {{-- class="blue">--}}
                                            {{-- <span class="d-block">--}}
                                                {{-- </span></h3>--}}
                                    {{-- <div class="code">--}}
                                        {{-- <input type="text" placeholder="Zip Code">--}}
                                        {{-- <a href="{{route('front.form')}}" class="btn btn-custom">Start My
                                            Quote</a>--}}

                                        {{-- </div>--}}
                                    {{-- <!-- <p class="para-1">We've helped 1739 people from this month.</p>--}}
{{--                                        <p class="para-1">We work with 200 partners, including the brands below, to offer--}}
{{--                                            plans.--}}
{{--                                        </p> -->--}}
                                    {{-- </div>--}}
                                {{-- </div>--}}
                            {{-- </div>--}}


                        {{-- <div class="item">--}}
                            {{-- <div class="banner-img">--}}
                                {{-- <img src="{{asset('images/sec-1-bg.png')}}" class="img-fluid" alt="">--}}
                                {{-- <div class="main-heading">--}}
                                    {{-- <h1>Stay Healthy – <span class="blue">--}}
                                            {{-- <span class="ml60">--}}
                                                {{-- <span class="text-wrapper60">--}}
                                                    {{-- <span class="letters60">Stay Covered</span>--}}
                                                    {{-- </span>--}}
                                                {{-- </span>--}}
                                            {{-- </h1>--}}
                                    {{-- <h3>Let’s find an affordable, high-quality<br> health plan geared to you!
                                        <span--}} {{-- class="blue">--}}
                                            {{-- <span class="d-block">--}}
                                                {{-- </span></h3>--}}
                                    {{-- <div class="code">--}}
                                        {{-- <input type="text" placeholder="Zip Code">--}}
                                        {{-- <a href="{{route('front.form')}}" class="btn btn-custom">Start My
                                            Quote</a>--}}

                                        {{-- </div>--}}
                                    {{-- <!-- <p class="para-1">We've helped 1739 people from this month.</p>--}}
{{--                                        <p class="para-1">We work with 200 partners, including the brands below, to offer--}}
{{--                                            plans.--}}
{{--                                        </p> -->--}}
                                    {{-- </div>--}}
                                {{-- </div>--}}
                            {{-- </div>--}}



                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="brand-sec">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="brand">
                    <h2 class="side-heading" aos-init aos-animate="" data-aos="fade-down" data-aos-offset="300"
                        data-aos-easing="ease-in-sine" data-aos-duration="1000">Partnered With <span class="blue">
                            Brands</span> You Trust</h2>
                    <div class="slider owl-carousel owl-theme">
                        <div class="item">
                            <img src="{{asset('images/brand-1.png')}}" class="img-fluid">
                        </div>
                        <div class="item">
                            <img src="{{asset('images/brand-2.png')}}" class="img-fluid">
                        </div>
                        <div class="item">
                            <img src="{{asset('images/brand-3.png')}}" class="img-fluid">
                        </div>
                        <div class="item">
                            <img src="{{asset('images/brand-4.png')}}" class="img-fluid">
                        </div>
                        <div class="item">
                            <img src="{{asset('images/brand-5.png')}}" class="img-fluid">
                        </div>
                        <div class="item">
                            <img src="{{asset('images/brand-6.png')}}" class="img-fluid">
                        </div>
                        <div class="item">
                            <img src="{{asset('images/brand-7.png')}}" class="img-fluid">
                        </div>

                        <!-- <div class="item">
                                <img src="{{asset('images')}}/imagessw.png" class="img-fluid">
                            </div> -->

                        <div class="item">
                            <img src="{{asset('images/imagesws.jfif')}}" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="about-sec">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="about">
                    {{-- <h2 class="side-heading" aos-init aos-animate="" data-aos="fade-up" data-aos-offset="300" --}}
                        {{-- data-aos-easing="ease-in-sine" data-aos-duration="1000">Engage with us for coverage in
                        a--}}
                        {{-- great, affordable health insurance plan, <span class="d-block">unbiased and geared to
                            your--}}
                            {{-- health and well-being.</span></h2>--}}
                    {{-- <p class="para-1" aos-init aos-animate="" data-aos="fade-down" data-aos-offset="300" --}} {{--
                        data-aos-easing="ease-in-sine" data-aos-duration="1000">Engage Health Insurance LLC
                        understands--}}
                        {{-- that health insurance is an important factor in feeling secure and protected for both--}}
                        {{-- preventative care and unexpected illness or injury. Life has many challenges and finding a
                        great--}}
                        {{-- affordable health insurance plan shouldn’t be one of them. Our licensed agents can help
                        answer--}}
                        {{-- your questions, verify subsidy eligibility, and help you navigate the application process.
                    </p>--}}
                    {{-- <p class="para-1" aos-init aos-animate="" data-aos="fade-down" data-aos-offset="300" --}} {{--
                        data-aos-easing="ease-in-sine" data-aos-duration="1000">Engage Health Insurance LLC works
                        with--}}
                        {{-- multiple trusted carriers in order to find the most useful and affordable choice for
                        your--}}
                        {{-- particular health coverage needs and concerns. </p>--}}
                    {{-- <p class="para-1" aos-init aos-animate="" data-aos="fade-down" data-aos-offset="300" --}} {{--
                        data-aos-easing="ease-in-sine" data-aos-duration="1000">If you are a working student, self –--}}
                        {{-- employed or your job simply does not provide health insurance we can find a personal plan
                        for--}}
                        {{-- your situation. </p>--}}
                    {{-- <p class="para-1" aos-init aos-animate="" data-aos="fade-down" data-aos-offset="300" --}} {{--
                        data-aos-easing="ease-in-sine" data-aos-duration="1000">There is no obligation to request
                        and--}}
                        {{-- receive a free health insurance quote for your consideration. We welcome the opportunity
                        to--}}
                        {{-- help. </p>--}}
                    {!! $sections[0]->value !!}
                    <a href="{{route('front.learning')}}" class="btn btn-custom">Learn More</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="prescription-saving">
        <div class="container-fluid">
            <div class="row justify-content-end">
                <div class="col-lg-7">
                    <div class="saving">
                        <div class="free-saving">
                            {!! $sections[8]->value !!}
                        </div>
                        <img src="{{asset('images/logo-new2.png')}}" class="img-fluid">
                        <div class="rx-button">
                            <a href="https://democustom-html.com/engage-lp/" class="btn btn-custom rx-card">{{ $sections[9]->value }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>








<section class="shop-sec">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                {{-- <div class="insurance">--}}
                    {{-- <h2 class="side-heading" aos-init aos-animate="" data-aos="fade-down" data-aos-offset="300"
                        --}} {{-- data-aos-easing="ease-in-sine" data-aos-duration="1000">We Represent Trusted Top-Rated
                        <span--}} {{-- class="blue">Insurance Carriers</span> </h2>--}}
                    {{-- <p class="para-1" aos-init aos-animate="" data-aos="fade-up" data-aos-offset="300" --}} {{--
                        data-aos-easing="ease-in-sine" data-aos-duration="1000">Engage Health Insurance LLC offers
                        many--}}
                        {{-- ACA health plan choices so that we can match you with the most advantageous fit for your
                        locale--}}
                        {{-- and your life. We are dedicated to helping you navigate the health insurance landscape for
                        a--}}
                        {{-- plan that will serve you well and give you peace of mind.--}}
                        {{-- </p>--}}
                    {{-- </div>--}}
                {!! $sections[1]->value !!}
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <div class="health" aos-init aos-animate="" data-aos="fade-right" data-aos-offset="300"
                    data-aos-easing="ease-in-sine" data-aos-duration="1000">
                    {{-- <h4>Health Insurance</h4>--}}
                    {{-- <p class="para-1">Meet the uncertainties of life with a health insurance plan to manage the--}}
                        {{-- financial burden of unexpected accidents or illness.</p>--}}
                    {!! $sections[2]->value !!}
                    <img src="{{asset($sections[3]->value)}}" class="img-fluid">
                </div>
            </div>
            <div class="col-lg-4">
                <div class="health" aos-init aos-animate="" data-aos="fade-up" data-aos-offset="300"
                    data-aos-easing="ease-in-sine" data-aos-duration="1000">
                    {{-- <h4>Dental & Vision Insurance</h4>--}}
                    {{-- <p class="para-1">Support and protect overall health with plans to ensure preventative care
                        to--}}
                        {{-- maintain your pearly whites and precious eyesight. </p>--}}
                    {!! $sections[4]->value !!}
                    <img src="{{asset($sections[5]->value)}}" class="img-fluid">
                </div>
            </div>
            <div class="col-lg-4">
                <div class="health" aos-init aos-animate="" data-aos="fade-left" data-aos-offset="300"
                    data-aos-easing="ease-in-sine" data-aos-duration="1000">
                    {{-- <h4>Affordable Care Act</h4>--}}
                    {{-- <p class="para-1">A comprehensive health care reform law enacted to provide quality health
                        coverage--}}
                        {{-- to millions of uninsured Americans, making health insurance more affordable, accessible
                        and--}}
                        {{-- attainable for individuals and families. </p>--}}
                    {!! $sections[6]->value !!}
                    <img src="{{asset($sections[7]->value)}}" class="img-fluid">
                </div>
            </div>
            {{-- <div class="col-lg-12">--}}
                {{-- <div class="health-btn">--}}
                    {{-- <a href="#" class="btn btn-custom" data-toggle="modal" data-target="#exampleModal">Start My
                        Quote</a>--}}
                    {{-- </div>--}}
                {{-- </div>--}}
            <div class="col-lg-12">
                <div class="code text-center">
                    <input type="text" placeholder="Zip Code" class="input_zipcode">
                    <a href="#" class="btn btn-custom anchor_start_my_quote">Start My Quote</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="form-sec">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="quote">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="contact-form">
                                <h2 class="side-heading">Request a <span class="blue">Free</span> Quote</h2>
                                <p class="para-1">One of our licensed agents can help review your health insurance needs
                                    and match you with a great plan. We welcome your inquiry! </p>
                                <form action="{{route('front.save-quotation')}}" method="POST">
                                    @csrf
                                    <div class="main-form">
                                        <input type="text" placeholder="First Name" name="first_name">
                                        <input type="text" placeholder="Last Name" name="last_name">
                                    </div>
                                    <div class="main-form">
                                        <input type="text" placeholder="Email" name="email">
                                        <select name="type">
                                            <option value="">Select insurance type</option>
                                            <option value="Individual Health">Individual Health</option>
                                            <option value="Family Health">Family Health</option>
                                            <option value="Dental/Vision">Dental/Vision</option>
                                        </select>
                                    </div>
                                    <div class="main-form">
                                        <input type="text" placeholder="Phone Number" name="phone">
                                        <select name="time_to_call">
                                            <option value="">Best Time To Call</option>
                                            <option value="8am – 10am">8am – 10am</option>
                                            <option value="10am – 12pm">10am – 12pm</option>
                                            <option value="12pm – 3pm">12pm – 3pm</option>
                                            <option value="3pm – 6pm">3pm – 6pm</option>
                                        </select>
                                    </div>
                                    <div class="submit-btn">
                                        <button type="submit" class="btn btn-custom">Submit</button>
                                        {{-- <a href="#" class="btn btn-custom">Submit</a>--}}
                                        <!--  data-toggle="modal" data-target="#exampleModal -->
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="thing">
                                <img src="{{asset('images/thing.png')}}" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="speak-sec">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7">
                <div class="speak" aos-init aos-animate="" data-aos="fade-right" data-aos-offset="300"
                    data-aos-easing="ease-in-sine" data-aos-duration="1000">
                    <h2 class="side-heading">We welcome your call for live agent help!</h2>
                    <p class="para-1">Our goal is to help find the right plan in your area and match you <span
                            class="d-block">
                            with a comprehensive $0 to Low Cost ACA health plan.</span></p>
                    <div class="mail-quote">
                        <br>
                        <div class="flux-div-main">
                            <div class="para-div">
                                <p class="para-1">Talk To Our Licensed Agent:</p>
                                <a href="tel:+833-775-1105" class="btn btn-custom"><i
                                        class="fa-solid fa-phone-volume fa-shake"></i>
                                    833-775-1105</a>
                            </div>

                            <div class="para-div">
                                <p class="para-1">Text:</p>
                                <a href="tel:+833-775-1105" class="btn btn-custom"><i
                                        class="fa-solid fa-phone-volume fa-shake"></i>
                                        {{ $phone[1] }}</a>
                            </div>
                        </div>
                        <a href="mailto:engagedirect@engagehealthinsurance.com" class="email-quote"> <i
                                class="fa-solid fa-envelope"></i>
                            engagedirect@engagehealthinsurance.com</a>
                    </div>
                    <!-- <p class="para-1">Call for free live assistance</p> -->
                </div>
            </div>
            <div class="col-lg-5">
                <div class="man-img">
                    <img src="{{asset('images/man_1.png')}}" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
</section>

<section class="faq-sec">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5">
                <div class="faq-img" aos-init aos-animate="" data-aos="fade-right" data-aos-offset="300"
                    data-aos-easing="ease-in-sine" data-aos-duration="1000">
                    <img src="{{asset('images/family.png')}}" class="img-fluid">
                </div>
            </div>
            <div class="col-lg-7">
                <div class="faq">
                    <h2 class="side-heading">Frequently <span class="blue">Asked</span> Questions</h2>
                    <div id="accordion" class="accordionStyle">
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne"
                                    aria-expanded="true" aria-controls="collapseOne">Can I purchase health insurance on
                                    my own?<i class="fas fa-plus"></i></button>
                            </div>
                            <div id="collapseOne" class="collapse show" aria-labelledby="headingFive"
                                data-parent="#accordion">
                                <div class="card-body">
                                    <p class="para-1">Yes! Although <a href="{{route('front.health-insurance')}}">Engage
                                            Health
                                            Insurance
                                            LLC</a> provides
                                        unbiased advice
                                        and a selection of excellent insurance carriers to help choose the most
                                        affordable and useful plan for the unique needs of you and yours, you can
                                        self-enroll. While we recommend having a licensed agent help you with these
                                        choices, you can click the button to check your subsidy, see plans, and
                                        self-enroll. </p>
                                    <p></p>
                                    <a href="tel:+833-775-1105" class="call"><i
                                            class="fa-solid fa-phone-volume fa-shake"></i>833-775-1105 for licensed
                                        agent!!</a>
                                    <div class="health-btn">
                                        <a href="https://www.healthsherpa.com/?_agent_id=judith-lovell-gcgdag"
                                            class="btn btn-custom">See Plans </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwelve1">
                                <button class="btn btn-link collapsed" data-toggle="collapse"
                                    data-target="#collapseTwelve1" aria-expanded="false"
                                    aria-controls="collapseTwelve1">Can I get a quote without giving personal
                                    information?
                                    <i class="fas fa-plus"></i></button>
                            </div>
                            <div id="collapseTwelve1" class="collapse" aria-labelledby="headingFive"
                                data-parent="#accordion">
                                <div class="card-body">
                                    <p class="para-1">Absolutely! Just enter demographic basics like Zip Code, Birthdate
                                        (age), Gender, Dependents, Tobacco Useage, Household size and Estimated Income
                                        Figure. The system will let you know your probable subsidy and show plans. You
                                        can even self-enroll. The exact subsidy will be determined as the application is
                                        completed </p>
                                    <div class="health-btn">
                                        <a href="https://www.healthsherpa.com/?_agent_id=judith-lovell-gcgdag"
                                            class="btn btn-custom">Check Subsidy </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header" id="headingTwelve2">
                                <button class="btn btn-link collapsed" data-toggle="collapse"
                                    data-target="#collapseTwelve2" aria-expanded="false"
                                    aria-controls="collapseTwelve2">Which Trusted Insurance Carriers participate in
                                    Marketplace ACA plans? <i class="fas fa-plus"></i></button>
                            </div>
                            <div id="collapseTwelve2" class="collapse" aria-labelledby="headingFive"
                                data-parent="#accordion">
                                <div class="card-body">
                                    <p class="para-1">There are many top choices all around the country. Some of these
                                        trusted bands include; </p>
                                    <p>Aetna, Ambetter, AmeriHealth Caritas, Blue Cross Blue Shield, Care Source, Cigna,
                                        Oscar, Molina, United Health Care and many more! There are many wonderful
                                        networks to choose from. </p>
                                    <div class="health-btn">
                                        <a href="https://www.healthsherpa.com/?_agent_id=judith-lovell-gcgdag"
                                            class="btn btn-custom">Check Subsidy </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwelve3">
                                <button class="btn btn-link collapsed" data-toggle="collapse"
                                    data-target="#collapseTwelve3" aria-expanded="false"
                                    aria-controls="collapseTwelve3">What is a subsidy and how does it save me money on
                                    my ACA health plan?<i class="fas fa-plus"></i></button>
                            </div>
                            <div id="collapseTwelve3" class="collapse" aria-labelledby="headingfive"
                                data-parent="#accordion">
                                <div class="card-body">
                                    <p class="para-1">ACA subsidies can eliminate or lower the cost of monthly premiums!
                                        This is a
                                        key feature of the Affordable Care Act. A subsidy is the amount of financial
                                        help you are eligible for that directly pays for all or part of the monthly
                                        premium of the plan. Primarily based on household size and income this allows
                                        those not qualified for medicaid or without access to other health coverage to
                                        have health insurance without financial worry.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwelve4">
                                <button class="btn btn-link collapsed" data-toggle="collapse"
                                    data-target="#collapseTwelve4" aria-expanded="false"
                                    aria-controls="collapseTwelve4">Can I get a $0 to Low Premium ACA Health Plan?<i
                                        class="fas fa-plus"></i></button>
                            </div>
                            <div id="collapseTwelve4" class="collapse" aria-labelledby="headingfive"
                                data-parent="#accordion">
                                <div class="card-body">
                                    <p class="para-1">Yes! Just enter the basic demographic information in the quote
                                        tool to best determine the subsidy assistance in order to select a plan that
                                        fits. Many people do qualify for zero dollar premium plans. It is absolutely
                                        free to have Engage Health Insurance LLC look at this with you to request a
                                        quote or utilize the enrollment tool to browse plans and enroll.
                                    </p>
                                    <p></p>
                                    <a href="tel:+833-775-1105" class="call"><i
                                            class="fa-solid fa-phone-volume fa-shake"></i>833-775-1105 for licensed
                                        agent!!</a>
                                    <div class="health-btn">
                                        <a href="https://www.healthsherpa.com/?_agent_id=judith-lovell-gcgdag"
                                            class="btn btn-custom">See Plans </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('js')
<script src="https://code.jquery.com/jquery-3.7.1.slim.min.js"
    integrity="sha256-kmHvs0B+OpCW5GVHUNjv9rOmY0IvSIRcf7zGUDTDQM8=" crossorigin="anonymous"></script>
<script type="text/javascript">
    $(document).ready(function () {
        {{--fetch("{{route('allowed-zipcodes')}}", { mode: 'cors' })--}}
        {{--    .then(response => response.json())--}}
        {{--    .then(data => {--}}
        {{--        // alert(data);--}}
        {{--        let allowed_zipcodes = [];--}}
        {{--        allowed_zipcodes = data.data.data;--}}


        {{--        $('.anchor_start_my_quote').on('click', function (e) {--}}
        {{--            let input = $('.input_zipcode').val();--}}
        {{--            if (input == "" || !(allowed_zipcodes.includes(input))) {--}}
        {{--                $('.input_zipcode').val('');--}}
        {{--                alert('Please enter a valid zipcode.');--}}

        {{--                return false;--}}
        {{--            }--}}

        {{--            window.location.href = '{{route('front.form')}}';--}}
        {{--        });--}}

        {{--        $('.input_zipcode').on('change', function () {--}}
        {{--            let changed_val = $(this).val();--}}
        {{--            $('.input_zipcode').each((i, item) => {--}}
        {{--                $(item).val(changed_val);--}}
        {{--            });--}}
        {{--        });--}}
        {{--    })--}}
        {{--    .catch(error => console.error('Error:', error));--}}

        $('.anchor_start_my_quote').on('click', function (e) {
            let input = $('.input_zipcode').val();
            // let isValidZip = /(^\d{5}$)|(^\d{5}-\d{4}$)/.test(input);
            // let isValidZip = /^([0-9]{5})(?:[-\s]*([0-9]{4}))?$/.test(input);

            $.ajax({
                url: 'https://api.zippopotam.us/us/' + input,
                method: 'GET',
                data: {},
                success: (data) => {
                    // alert(typeof data);
                    // console.log(data);

                    window.location.href = '{{route('front.form')}}';
                },
                error: (e) => {
                    $('.input_zipcode').val('');
                    alert('Please enter a valid zipcode.');

                    return false;
                },
            });

            {{--// if (input == "" || !(allowed_zipcodes.includes(input))) {--}}
            {{--if (!isValidZip) {--}}
            {{--    $('.input_zipcode').val('');--}}
            {{--    alert('Please enter a valid zipcode.');--}}

            {{--    return false;--}}
            {{--}--}}

            {{--window.location.href = '{{route('front.form')}}';--}}
        });

        $('.input_zipcode').on('change', function () {
            let changed_val = $(this).val();
            $('.input_zipcode').each((i, item) => {
                $(item).val(changed_val);
            });
        });

        {{--$.getJSON("{{asset('allowed-zipcodes.json')}}", function (data) {--}}
        {{--    let allowed_zipcodes = [];--}}
        {{--    allowed_zipcodes = data.data;--}}


        {{--    $('.anchor_start_my_quote').on('click', function (e) {--}}
        {{--        let input = $('.input_zipcode').val();--}}
        {{--        if (input == "" || !(allowed_zipcodes.includes(input))) {--}}
        {{--            $('.input_zipcode').val('');--}}
        {{--            alert('Please enter a valid zipcode.');--}}

        {{--            return false;--}}
        {{--        }--}}

        {{--        window.location.href = '{{route('front.form')}}';--}}
        {{--    });--}}

        {{--    $('.input_zipcode').on('change', function () {--}}
        {{--        let changed_val = $(this).val();--}}
        {{--        $('.input_zipcode').each((i, item) => {--}}
        {{--            $(item).val(changed_val);--}}
        {{--        });--}}
        {{--    });--}}
        {{--});--}}
    });
</script>
@endsection
