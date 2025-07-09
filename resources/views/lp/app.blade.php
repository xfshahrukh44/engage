@extends('layouts.app')
@section('title', 'Home')

@section('css')
    <style>
        /* main-sec css start */
        .main-sec {
            background-color: #0d78bc;
            padding: 50px 0px 0px 0px;
        }

        .prescription {
            display: flex;
            gap: 10px;
            align-items: center;
        }

        .prescription h1 {
            color: white;
            font-weight: 400;
            font-size: 42px;
            font-family: 'Montserrat';
            letter-spacing: 1px;
        }

        .prescription img {
            width: 21%;
        }

        .program h2 {
            color: white;
            font-size: 31px;
            font-weight: 300;
            font-family: 'Montserrat';
            margin-top: 20px;
        }

        .program ul {
            padding: 0px 0px 0px 20px;
        }

        .program ul li {
            color: white;
            font-size: 22px;
            font-family: 'Montserrat';
            font-weight: 300;
        }

        .main-img img {
            width: 85%;
            animation: girl 5s linear infinite;
        }

        .main-img {
            text-align: end;
            border-left: 5px solid #95c3e3;
        }

        /* main-sec css end */


        /* discount-card sec css start */

        .discount-card {
            padding: 50px 0px;
        }

        .about-content h2 {
            color: #0e78bc;
        }

        .more-details {
            display: flex;
        }

        .everyone h4 {
            color: #0e78bc;
            font-size: 20px;
            margin-top: 10px;
        }

        .everyone p {
            color: black;
            font-size: 15px;
            margin: 0;
        }

        .everyone ul {
            padding: 0px 0px 0px 20px;
        }

        .everyone ul li {
            font-size: 15px;
            color: black;
            font-family: 'Roboto';
        }

        .about-img {
            position: relative;
            z-index: 0;
        }

        .about-img img {
            padding-right: 80px;
            padding-top: 80px;
        }

        .about-new img {
            position: absolute;
            z-index: 1;
            top: -75px;
            left: 75px;
        }

        /* discount-card sec css end */


        /* discaimer-sec css start */
        .disclaimer-sec {
            padding: 70px 0px;
            background-color: #0e78bc;
            text-align: center;
            /* margin-bottom: 100px; */
        }

        .disclaimer h2 {
            color: white;
            font-size: 50px;
            font-weight: 500;
            padding-bottom: 15px;
        }

        .disclaimer p {
            font-size: 17px;
            color: white;
            font-weight: 400;
            letter-spacing: 0.2px;
        }

        /* discaimer-sec css end */
    </style>
@endsection

@section('content')
    <section class="main-sec">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="prescription">
                        <img src="{{ asset($page->image) }}" class="img-fluid">
                        <h1>{{ $page->name ?? 'PRESCRIPTIONS SAVINGS COUPON CARD PROGRAM' }}</h1>
                    </div>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="program aos-init aos-animate=" data-aos="fade-up" data-aos-offset="300"
                        data-aos-easing="ease-in-sine" data-aos-duration="1000">
                        {!! $page->content ?? '' !!}
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="main-img">
                        <img src="{{ asset($sections[0]->value) }}" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="iframe-sec">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="iframe-content">
                        <link rel="stylesheet" href="https://secure.unitednetworksofamerica.com/partner/css/iframe.css"
                            type="text/css" charset="utf-8" />

                        <iframe id="una_1047" class="partner"
                            src="https://secure.unitednetworksofamerica.com/partner/card-downloader.php?id=1047&rxgrp=ENGHLTH"
                            frameborder="0" scrolling="no">
                        </iframe>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <section class="discount-card">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="about-img aos-init aos-animate=" data-aos="fade-right" data-aos-offset="300"
                        data-aos-easing="ease-in-sine" data-aos-duration="1000">
                        <img src="{{ asset($sections[1]->value) }}" class="img-fluid">
                        <div class="about-new">
                            <img src="{{ asset($sections[2]->value) }}" class="img-fluid">
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="about-content">
                        {!! $sections[3]->value !!}
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="disclaimer-sec">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="disclaimer">
                        {!! $sections[4]->value !!}
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
