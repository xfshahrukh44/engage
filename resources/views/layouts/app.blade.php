<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}" type="image/x-icon">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
          integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
          integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
          integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- moving letter css  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
    <!-- anime style css  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap"
          rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
          rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css"
          integrity="sha512-aOG0c6nPNzGk+5zjwyJaoRUgCdOrfSDhmMID2u4+OIslr0GjpLKo7Xm0Ao3xmpM4T8AmIouRkqwj1nrdVsLKEQ=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

   <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
<link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/inner.css')}}">
    <link rel="stylesheet" href="{{asset('css/responsive.css')}}">
    <title>Engage | @yield('title')</title>

    @yield('css')

</head>

<body></body>
<!-- <div class="top-header">
     <div class="container">
          <div class="row p-0">
               <div class="col-lg-12">
                    <div class="top-line">
                         <h4>We've helped <b>1739</b> people from this month</h4>
                    </div>
               </div>
          </div>
     </div>
</div> -->
<style>


</style>


<header>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">

                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="navbar-brand" href="{{route('home')}}">
                        <img src="{{asset('images/logo_1.png')}}" class="img-fluid">
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav m-auto">
                            <li class="nav-item active">
                                <a class="nav-link {!! \Illuminate\Support\Facades\Route::Is('home') ? 'active' : '' !!}" href="{{route('home')}}">Home</a>
                            </li>
                            <li class="nav-item main_drop">
                                <!-- insurance-services -->
                                <a class="nav-link {!! \Illuminate\Support\Facades\Route::Is('front.health-insurance') || \Illuminate\Support\Facades\Route::Is('front.dental-insurance') || \Illuminate\Support\Facades\Route::Is('front.vision-insurance') || \Illuminate\Support\Facades\Route::Is('front.affordable-care-act-aca') ? 'active' : '' !!}" href="#">Insurance Services</a>
                                <ul class="drop-menu">
                                    <li><a href="{{route('front.health-insurance')}}">Health</a></li>
                                    <li><a href="{{route('front.dental-insurance')}}">Dental</a></li>
                                    <li><a href="{{route('front.vision-insurance')}}">Vision</a></li>
                                    <li><a href="{{route('front.affordable-care-act-aca')}}">ACA</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {!! \Illuminate\Support\Facades\Route::Is('front.learning') ? 'active' : '' !!}" href="{{route('front.learning')}}">Learning ACA</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {!! \Illuminate\Support\Facades\Route::Is('front.blogs') ? 'active' : '' !!}" href="{{route('front.enroll')}}">Browse Plans/Enroll</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {!! \Illuminate\Support\Facades\Route::Is('front.contact') ? 'active' : '' !!}" href="{{route('front.contact')}}">Contact Us</a>
                            </li>
                            <!-- <li class="nav-item">
                                 <a class="nav-link" href="#">Enroll Now</a>
                            </li> -->

                        </ul>
                        <a href="tel:+{{App\Http\Traits\HelperTrait::returnFlag(59)}}" class="call"><i class="fa-solid fa-phone-volume fa-shake"></i>{{App\Http\Traits\HelperTrait::returnFlag(59)}}</a>
                        <a href="https://www.healthsherpa.com/?_agent_id=judith-lovell-gcgdag" class="btn btn-custom">Enroll Now</a>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>

@yield('content')

<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="footer-logo">
                    <a href="{{route('home')}}"><img src="{{asset('images/logo_1.png')}}" class="img-fluid"></a>
                    <p class="para-1">Engage with us for easy, personal assistance in selecting an excellent
                        Affordable Care Act (ACA) health insurance plan for your needs and budget. </p>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="endl-1">
                    <div class="phone new-phone">
                        <p>PHONE</p>
                        <div class="last-endl-flux">
                            <!-- <i class="fa-solid fa-phone"></i> -->
                            <p class="small-para">
                                Agent/Enroll: <a href="tel:{{App\Http\Traits\HelperTrait::returnFlag(59)}}">{{App\Http\Traits\HelperTrait::returnFlag(59)}}</a>
                            </p>
                        </div>
                        <div class="last-endl-flux new-contact">
                            <!-- <i class="fa-solid fa-phone"></i> -->
                            <p class="small-para">
                                Customer Service/Office: <a href="tel:{{App\Http\Traits\HelperTrait::returnFlag(1973)}} ">{{App\Http\Traits\HelperTrait::returnFlag(1973)}} </a>
                            </p>
                        </div>
                        <div class="last-endl-flux new-contact">
                            <p class="small-para">
                                Office Hours: {{App\Http\Traits\HelperTrait::returnFlag(1974)}}
                            </p>
                        </div>

                    </div>
                    <div class="quick">
                        <p>QUICK LINKS</p>
                        <ul>
                            <li><a href="{{route('home')}}">Home</a></li>
                            <li><a href="{{route('front.learning')}}">Learning ACA</a></li>
                            <li><a href="{{route('front.enroll')}}">Browse Plans/Enroll</a></li>
                            <li><a href="{{route('front.contact')}}">Contact Us</a></li>
                            <li><a href="{{route('lp.app')}}">RX Savings Program</a></li>


                            <!-- <li><a href="#">Enroll Now</a></li> -->
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="endl-1">
                    <div class="phone">
                        <p>LOCATION</p>
                        <div class="last-endl-flux" style=" padding-bottom: 3px; ">
                            <i class="fa-solid fa-map"></i>
                            <p>{{App\Http\Traits\HelperTrait::returnFlag(1975)}}</p>
                        </div>
                        <div class="last-endl-flux">
                            <i class="fa-solid fa-map"></i>
                            <p>Oakland Park, Florida</p>
                        </div>
                    </div>
                    <div class="quick">
                        <p>Insurance Services</p>
                        <ul>
                            <li><a href="{{route('front.health-insurance')}}">Health Insurance</a></li>
                            <li><a href="{{route('front.dental-insurance')}}">Dental Insurance</a></li>
                            <li><a href="{{route('front.vision-insurance')}}">Vision Insurance</a></li>
                            <li><a href="{{route('front.affordable-care-act-aca')}}">Affordable Care Act</a></li>

                            <div class="two-last-endl">
                                <ul>
                                    <li><a href="{{route('front.terms')}}">Terms of Use</a></li>
                                    <li><a href="{{route('front.privacy-policy')}}">Privacy Policy</a></li>
                                </ul>

                            </div>
                        </ul>
                    </div>


                </div>
            </div>
            <div class="col-lg-3">
                <div class="enld2">
                    <div class="phone endl-2">
                        <p>GET IN TOUCH</p>
                        <p class="small-para">We welcome your email inquiries 24/7!</p>
                        <a href="nav-link" href="mailto:{{App\Http\Traits\HelperTrait::returnFlag(1976)}}">{{App\Http\Traits\HelperTrait::returnFlag(1976)}}</a>
                        <div class="media">
                            {{-- <a href="{{App\Http\Traits\HelperTrait::returnFlag(1977)}}"><i class="fa-brands fa-facebook-f"></i></a> --}}
                            <a target="_blank" href="https://www.facebook.com/people/Engage-Health-Insurance/61559676192349/"><i class="fa-brands fa-facebook-f"></i></a>
                            <!-- <a href="javascript:;"><i class="fa-brands fa-twitter"></i></a> -->
                            <!-- <a href="javascript:;"><i class="fa-brands fa-google-plus-g"></i></a> -->
{{--                            <a href="mailto:"><i class="fa-solid fa-envelope"></i></a>--}}
                            <!-- <a href="{{App\Http\Traits\HelperTrait::returnFlag(1978)}}"><i class="fa-brands fa-instagram"></i></a> -->
                            <a target="_blank" href="https://www.instagram.com/engagehealthinsurancellc/"><i class="fa-brands fa-instagram"></i></a>
                            <!-- <a href="javascript:;"><i class="fa-brands fa-linkedin-in"></i></a> -->
                        </div>
                    </div>

                    <div class="img-footer endl-2">
                        <figure>
                            <img src="{{asset('images/vector.png')}}" class="img-setting" alt="">
                        </figure>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="last-endl">
                    <div class="one-last-endl text-center main-footer">
                        <p>EngageHealthInsurance.com is a website domain of Engage Health Insurance LLC, a
                            privately-owned non-government website, and is NOT the Health Insurance Marketplace®
                            website. This website serves as an invitation for you, the customer, to inquire about
                            further information regarding health insurance and ACA subsidy eligibility and the
                            opportunity to have a licensed agent assist in performing your enrollment. Submission of
                            your contact information constitutes permission for an agent from Engage Health Insurance to
                            contact you with further information by phone, text or email to review details on cost and
                            coverage which a Qualified ACA Health Plan offers individuals and families. </p>
                        <p>We are committed to protecting your privacy and any personal data shared with us. Personal
                            data will be used solely for help in the ACA health plan Marketplace enrollment process and
                            will not be shared or sold. </p>
                        <p>This website may not display all of the Qualified Health Plans in your state. Go to the
                            Health Insurance Marketplace® website at HealthCare.gov for all available data for your
                            state.</p>
                        <p>Copyright © 2024 Engage Health Insurance LLC - All Rights Reserved</p>
                    </div>

                </div>
            </div>
        </div>
    </div>
</footer>


<style>
    .img-footer.endl-2 {
        position: absolute;
        z-index: -1;
    }
</style>


<section class="custum-modal">
    <!-- Button trigger modal -->
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
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
{{--                                            <a href="#" class="btn btn-custom">Submit</a>--}}
                                <!--  data-toggle="modal" data-target="#exampleModal -->
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@yield('js')


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
        integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init();
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"
        integrity="sha512-0QbL0ph8Tc8g5bLhfVzSqxe9GERORsKhIn1IrpxDAgUsbBGz/V7iSav2zzW325XGd1OMLdL4UiqRJj702IeqnQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    @if(session()->has('success'))
        toastr.success('{{session()->get('success')}}');
    @endif

    @if(session()->has('error'))
        toastr.error('{{session()->get('error')}}');
    @endif
</script>


<script src="{{asset('js/custom.js')}}"></script>

<!-- <script>
     setTimeout(function() {
          $('#exampleModal').modal('show');
     }, 5000);
</script> -->


<script>
    // Wrap every letter in a span
    $('.letters').each((i, item) => {
        $(item).html($(item).text().replace(/\S/g, "<span class='letter'>$&</span>"));
    });

    // var textWrapper = document.querySelector('.ml6 .letters');
    // textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

    anime.timeline({
        loop: true
    }).add({
        targets: '.ml6 .letter',
        translateY: ["1em", 0],
        translateZ: 0,
        duration: 1000,
        delay: (el, i) => 100 * i
    }).add({
        targets: '.ml6',
        opacity: 0,
        duration: 1000,
        easing: "easeOutExpo",
        delay: 3000
    });

    // Wrap every letter in a span
    var textWrapper = document.querySelector('.ml60 .letters60');
    if (textWrapper) {
        textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");
    }

    anime.timeline({
        loop: true
    }).add({
        targets: '.ml60 .letter',
        translateY: ["1em", 0],
        translateZ: 0,
        duration: 1000,
        delay: (el, i) => 100 * i
    }).add({
        targets: '.ml60',
        opacity: 0,
        duration: 1000,
        easing: "easeOutExpo",
        delay: 3000
    });
</script>

</body>

</html>
