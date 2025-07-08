@include('lp.header')
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
                    <link rel='' stylesheet'' href=''
                        https://secure.unitednetworksofamerica.com/partner/css/iframe.css'' type='' text/css''
                        charset='' utf-8'' />
                    <iframe id='' una_1047'' class='' partner'' src=''
                        https://secure.unitednetworksofamerica.com/partner/card-downloader.php? id=1047&rxgrp=ENGHLTH''
                        frameborder='' 0'' scrolling='' no''></iframe>
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
@include('lp.footer')
