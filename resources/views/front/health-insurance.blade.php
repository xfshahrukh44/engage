@extends('layouts.app')
@section('title', 'Health Insurance')

@section('css')
     <style>
          .aetna-img img {
               width: 14%;
               filter: sepia(1);
          }
     </style>
     <style>
          .aetna-img img {
               width: 10%;
               margin: 0px 29px;
          }

          span.blue {
               color: #117cbe !important;
               font-style: italic;
          }

          .tabs-coverage p span {
               color: #117cbe;
               font-size: 16px;
               font-weight: 600;
               margin-right: 5px;
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
     </style>
@endsection

@section('content')
     <section class="inner-banner health-banner">
          <div class="container">
               <div class="row">
                    <div class="col-lg-12">
                         <div class="main-heading" aos-init aos-animate="" data-aos="fade-left" data-aos-offset="300"
                         data-aos-easing="ease-in-sine" data-aos-duration="1500">
                         <h1>Health <span class="blue">
                                   <span class="ml6">
                                        <span class="text-wrapper">
                                             <span class="letters">Insurance</span>
                                        </span>
                                   </span>
                         </h1>
                    </div>
               </div>
          </div>
          </div>
     </section>

     <section class="vision-pg">
          <div class="container">
               <div class="row">
                    <div class="col-lg-3">
                         <div class="main-collaps">
                              <ul class="nav nav-tabs" role="tablist">
                                   <li class="nav-item">
                                        <a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab">Health
                                             Insurance</a>
                                   </li>
                                   <li class="nav-item">
                                        <a class="nav-link" href="{{route('front.vision-insurance')}}">Vision
                                             Insurance</a>
                                   </li>
                                   <li class="nav-item">
                                        <a class="nav-link" href="{{route('front.dental-insurance')}}">Dental
                                             Insurance</a>
                                   </li>
                                   <li class="nav-item">
                                        <a class="nav-link" href="{{route('front.affordable-care-act-aca')}}">Affordable Care
                                             Act</a>
                                   </li>
                              </ul>
                         </div>
                         <div class="talk-insurance">
                              <img src="{{asset('images/circle-phone.png')}}" class="img-fluid" alt="">
                              <h4>Talk to Our <span class="d-block">Insurance Agent</span></h4>
                              <h3><a href="tel:+833-775-1105">833-775-1105</a></h3>
                              <!-- <span class="d-block">
                                        Call to Our Experts</span> -->
                         </div>
                    </div>
                    <div class="col-lg-9">
                         <div class="tabs-show-nav">
                              <div class="tab-content">
                                   <div class="tab-pane active" id="tabs-1" role="tabpanel">
                                        <div class="tabs-coverage">
                                             <h2>Health Insurance Protects You and Yours</h2>
                                             <p>We all need health care and often help paying for it. A good health insurance
                                                  plan can help you prioritize your health without paying more than you
                                                  should and to be prepared for both preventative care and the unexpected.
                                             </p>

                                             <p>The primary purpose of health insurance is to provide financial protection
                                                  against the high costs of medical care and access to great networks of
                                                  providers. This helps you to access necessary medical care without worrying
                                                  about the financial implications especially when faced with serious illness
                                                  or injury.
                                                  Health insurance can be obtained through various sources, including
                                                  employers, government programs (such as Medicare and Medicaid), private
                                                  insurance companies, or through healthcare marketplace exchanges.</p>
                                             <p>Engage Health Insurance LLC is here to help you make an informed decision on
                                                  your health insurance and to match you up with the best plan for your
                                                  needs. We work with multiple trusted health insurance carriers for unbiased
                                                  recommendations tailored to your unique circumstances. </p>
                                             <h2>Insurance Options</h2>
                                             <p><span>Health Management Networks:</span> Depending on how many plans are
                                                  offered in your area, you may find several network types such as, HMO, PPO,
                                                  EPO, and POS, at each metal level—Bronze, Silver, Gold and Platinum. </p>
                                             <p><span>Individual and Family Plans: </span>Affordable health plans bring peace
                                                  of mind to individuals and families in providing effective financial
                                                  support for the costs of medical care. Engage Health Insurance LLC will
                                                  help to navigate the ACA Certified Individual and Family plans with you to
                                                  help determine eligibility for cost savings or even $0 premium plans.
                                             </p>



                                             <p><span>Short-Term Medical Insurance:</span>These plans are designed to help
                                                  with gaps in insurance coverage such as those created when you leave one
                                                  job and take another before you can enroll in the new plan. These plans can
                                                  run from 1 to 12 months and can be a prudent precaution.
                                             </p>
                                             <p><span>Hospital Indemnity:</span>Hospital indemnity insurance is an insurance
                                                  plan you can purchase in addition to your health insurance plan. You will
                                                  have a monthly premium as you would with other insurance. Should you end up
                                                  spending time in the hospital, you receive a fixed benefit amount paid
                                                  directly to you to help cover expenses. These plans are supplemental to
                                                  health insurance for hospitalization and do not replace your health
                                                  insurance.
                                             </p>
                                             <p><span>Accident Expense Insurance:</span> These plans are ancillary health
                                                  plans which can be combined with your primary coverage that will pay a cash
                                                  benefit in the event of an accidental injury or sickness. They may pay a
                                                  lump sum for the ambulance, emergency room, hospital, doctors,
                                                  rehabilitation, nursing, or prescriptions which are the result of the
                                                  accident. Often accident plans do not have a requirement to stay in-network
                                                  for coverage.
                                             </p>
                                             <div class="row">
                                                  <div class="col-lg-6">
                                                       <div class="plan-insurance">
                                                            <img src="{{asset('images/couple.png')}}" class="img-fluid" alt="">
                                                       </div>
                                                  </div>
                                                  <div class="col-lg-6">
                                                       <div class="include-health">
                                                            <h2 class="side-heading aos-init aos-animate="" aos-init=""
                                                                aos-animate="" data-aos="fade-down" data-aos-offset="300"
                                                            data-aos-easing="ease-in-sine" data-aos-duration="1000">
                                                            Health <span class="blue">Insurance </span> Plans include
                                                            </h2>
                                                            <p>Health Management Networks such as HMO, PPO, EPO, POS and some
                                                                 plans meant to coordinate with a health savings account.</p>
                                                            <ul>
                                                                 <li>
                                                                      <span><i class="fa-solid fa-check"></i></span>
                                                                      <p>Individual and Family Plans</p>
                                                                 </li>
                                                                 <li>
                                                                      <span><i class="fa-solid fa-check"></i></span>
                                                                      <p>Short-Term Medical</p>
                                                                 </li>
                                                                 <li>
                                                                      <span><i class="fa-solid fa-check"></i></span>
                                                                      <p>Hospital Indemnity</p>
                                                                 </li>
                                                                 <li>
                                                                      <span><i class="fa-solid fa-check"></i></span>
                                                                      <p>Accident</p>
                                                                 </li>
                                                            </ul>
                                                       </div>
                                                  </div>
                                             </div>
                                             <!-- <p>The friendly agents at Engage Health Insurance LLC can review vision plan
                                                  options with you on the phone and provide a quotation for your review and
                                                  enrollment.</p> -->
                                        </div>
                                   </div>
                                   <div class="tab-pane" id="tabs-2" role="tabpanel">
                                        <div class="tabs-coverage">
                                             <h2>Why should I consider vision insurance?</h2>
                                             <p>The purpose of vision insurance is to assist individuals in managing the
                                                  costs associated with eye care and vision-related expenses. Vision
                                                  insurance is designed to cover services and products related to maintaining
                                                  good eye health and correcting vision problems. Having vision insurance
                                                  helps promote a preventative approach to eyecare and encouragement to
                                                  prioritize eye health.</p>
                                             <h2>Your sight is precious – coverage is priceless!</h2>
                                             <p>The purpose of vision insurance is to assist individuals in managing the
                                                  costs associated with eye care and vision-related expenses. Vision
                                                  insurance is designed to cover services and products related to maintaining
                                                  good eye health and correcting vision problems. Having vision insurance
                                                  helps promote a preventative approach to eyecare and encouragement to
                                                  prioritize eye health.</p>

                                        </div>
                                        <div class="point-bot">
                                             <div class="financial-assistance">
                                                  <div class="financial-name">
                                                       <img src="{{asset('images/financial.png')}}" class="img-fluid" alt="">
                                                       <h4>Financial Assistance</h4>
                                                  </div>
                                                  <div class="financial-discription">
                                                       <p>Health Insurance doesn’t generally cover vision care but eyecare
                                                            plays an important
                                                            role in your overall health. Vision coverage is relatively
                                                            inexpensive and can save
                                                            on many out-of-pocket eye care expenses including prescription
                                                            glasses and contact
                                                       </p>
                                                  </div>
                                             </div>
                                             <div class="financial-assistance">
                                                  <div class="financial-name">
                                                       <img src="{{asset('images/financial-1.png')}}" class="img-fluid" alt="">
                                                       <h4>Coverage</h4>
                                                  </div>
                                                  <div class="financial-discription">
                                                       <p>Like health insurance you pay a monthly premium and have access to
                                                            providers, such as
                                                            optometrists and opthalmologists.
                                                       </p>
                                                  </div>
                                             </div>
                                             <div class="financial-assistance">
                                                  <div class="financial-name">
                                                       <img src="{{asset('images/financial-2.png')}}" class="img-fluid" alt="">
                                                       <h4>Prevention</h4>
                                                  </div>
                                                  <div class="financial-discription">
                                                       <p>Yearly exams are recommended but it is also advisable to see the
                                                            doctor anytime you
                                                            notice a change in your vision. Eyesight changes over time and
                                                            prescriptions for
                                                            glasses need to keep pace with those changes. Coverage makes
                                                            regular eye exams
                                                            affordable so that you can take appropriate corrective action.
                                                            Regular exams can
                                                            catch conditions like glaucoma, cataracts, retina abnormalities
                                                            or cancer at an early
                                                            state.
                                                       </p>
                                                  </div>
                                             </div>
                                             <div class="financial-assistance">
                                                  <div class="financial-name">
                                                       <img src="{{asset('images/financial-3.png')}}" class="img-fluid" alt="">
                                                       <h4>Other Benefits</h4>
                                                  </div>
                                                  <div class="financial-discription">
                                                       <p>Participating in a vision plan can give you discounts on vision
                                                            expenses, eyeglasses
                                                            and even allowances on designer frames.
                                                       </p>
                                                  </div>
                                             </div>
                                             <div class="financial-assistance">
                                                  <div class="financial-name">
                                                       <img src="{{asset('images/financial-4.png')}}" class="img-fluid" alt="">
                                                       <h4>Choosing a Plan</h4>
                                                  </div>
                                                  <div class="financial-discription">
                                                       <p>What does the plan cover? What are the deductibles and co-pays? Are
                                                            there waiting
                                                            periods? What the allowances are given for eyeglasses, frames,
                                                            contacts or laser
                                                            vision correction? Are doctors in the carrier’s network
                                                            convenient to your location?
                                                       </p>
                                                  </div>
                                             </div>
                                             <div class="financial-assistance llc-assistance">
                                                  <div class="financial-name">
                                                       <img src="{{asset('images/setting.png')}}" class="img-fluid" alt="">
                                                  </div>
                                                  <div class="financial-discription">
                                                       <!-- <p>The friendly agents at Engage Health Insurance LLC can review
                                                            vision plan options with
                                                            you on the phone and provide a quotation for your review and
                                                            enrollment.
                                                       </p> -->
                                                  </div>
                                             </div>
                                             <div class="amerities-img">
                                                  <img src="{{asset('images/ameritas-logo.png')}}" class="img-fluid" alt="">
                                                  <img src="{{asset('images/uniterd.png')}}" class="img-fluid" alt="">
                                                  <img src="{{asset('images/vision-logo.png')}}" class="img-fluid" alt="">
                                             </div>
                                        </div>
                                   </div>
                                   <div class="tab-pane" id="tabs-3" role="tabpanel">
                                        <div class="tabs-coverage">
                                             <h2>Your sight is precious – coverage is priceless!</h2>
                                             <p>The purpose of vision insurance is to assist individuals in managing the
                                                  costs associated with eye care and vision-related expenses. Vision
                                                  insurance is designed to cover services and products related to maintaining
                                                  good eye health and correcting vision problems. Having vision insurance
                                                  helps promote a preventative approach to eyecare and encouragement to
                                                  prioritize eye health.</p>
                                             <h2>Why should I consider vision insurance?</h2>
                                             <p>The purpose of vision insurance is to assist individuals in managing the
                                                  costs associated with eye care and vision-related expenses. Vision
                                                  insurance is designed to cover services and products related to maintaining
                                                  good eye health and correcting vision problems. Having vision insurance
                                                  helps promote a preventative approach to eyecare and encouragement to
                                                  prioritize eye health.</p>
                                        </div>
                                        <div class="point-bot">
                                             <div class="financial-assistance">
                                                  <div class="financial-name">
                                                       <img src="{{asset('images/financial.png')}}" class="img-fluid" alt="">
                                                       <h4>Financial Assistance</h4>
                                                  </div>
                                                  <div class="financial-discription">
                                                       <p>Health Insurance doesn’t generally cover vision care but eyecare
                                                            plays an important
                                                            role in your overall health. Vision coverage is relatively
                                                            inexpensive and can save
                                                            on many out-of-pocket eye care expenses including prescription
                                                            glasses and contact
                                                       </p>
                                                  </div>
                                             </div>
                                             <div class="financial-assistance">
                                                  <div class="financial-name">
                                                       <img src="{{asset('images/financial-1.png')}}" class="img-fluid" alt="">
                                                       <h4>Coverage</h4>
                                                  </div>
                                                  <div class="financial-discription">
                                                       <p>Like health insurance you pay a monthly premium and have access to
                                                            providers, such as
                                                            optometrists and opthalmologists.
                                                       </p>
                                                  </div>
                                             </div>
                                             <div class="financial-assistance">
                                                  <div class="financial-name">
                                                       <img src="{{asset('images/financial-2.png')}}" class="img-fluid" alt="">
                                                       <h4>Prevention</h4>
                                                  </div>
                                                  <div class="financial-discription">
                                                       <p>Yearly exams are recommended but it is also advisable to see the
                                                            doctor anytime you
                                                            notice a change in your vision. Eyesight changes over time and
                                                            prescriptions for
                                                            glasses need to keep pace with those changes. Coverage makes
                                                            regular eye exams
                                                            affordable so that you can take appropriate corrective action.
                                                            Regular exams can
                                                            catch conditions like glaucoma, cataracts, retina abnormalities
                                                            or cancer at an early
                                                            state.
                                                       </p>
                                                  </div>
                                             </div>
                                             <div class="financial-assistance">
                                                  <div class="financial-name">
                                                       <img src="{{asset('images/financial-3.png')}}" class="img-fluid" alt="">
                                                       <h4>Other Benefits</h4>
                                                  </div>
                                                  <div class="financial-discription">
                                                       <p>Participating in a vision plan can give you discounts on vision
                                                            expenses, eyeglasses
                                                            and even allowances on designer frames.
                                                       </p>
                                                  </div>
                                             </div>
                                             <div class="financial-assistance">
                                                  <div class="financial-name">
                                                       <img src="{{asset('images/financial-4.png')}}" class="img-fluid" alt="">
                                                       <h4>Choosing a Plan</h4>
                                                  </div>
                                                  <div class="financial-discription">
                                                       <p>What does the plan cover? What are the deductibles and co-pays? Are
                                                            there waiting
                                                            periods? What the allowances are given for eyeglasses, frames,
                                                            contacts or laser
                                                            vision correction? Are doctors in the carrier’s network
                                                            convenient to your location?
                                                       </p>
                                                  </div>
                                             </div>
                                             <div class="financial-assistance llc-assistance">
                                                  <div class="financial-name">
                                                       <img src="{{asset('images/setting.png')}}" class="img-fluid" alt="">
                                                  </div>
                                                  <div class="financial-discription">
                                                       <!-- <p>The friendly agents at Engage Health Insurance LLC can review
                                                            vision plan options with
                                                            you on the phone and provide a quotation for your review and
                                                            enrollment.
                                                       </p> -->
                                                  </div>
                                             </div>
                                             <div class="amerities-img">
                                                  <img src="{{asset('images/ameritas-logo.png')}}" class="img-fluid" alt="">
                                                  <img src="{{asset('images/uniterd.png')}}" class="img-fluid" alt="">
                                                  <img src="{{asset('images/vision-logo.png')}}" class="img-fluid" alt="">
                                             </div>
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
                                             954-280-4561</a>
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

     <div class="amerities-img aetna-img health-insurances-img">
          <div class="slider owl-carousel owl-theme owl-loaded owl-drag">
               <div class="item">
                    <img src="{{asset('images/logo1.png')}}" class="img-fluid" alt="">
               </div>
               <div class="item">
                    <img src="{{asset('images/logo2.png')}}" class="img-fluid" alt="">
               </div>
               <div class="item">
                    <img src="{{asset('images/logo3.png')}}" class="img-fluid" alt="">
               </div>
               <div class="item">
                    <img src="{{asset('images/logo4.png')}}" class="img-fluid" alt="">
               </div>
               <div class="item">
                    <img src="{{asset('images/logo5.png')}}" class="img-fluid" alt="">
               </div>
               <div class="item">
                    <img src="{{asset('images/Ambetter.webp')}}" class="img-fluid" alt="">
               </div>
               <div class="item">
                    <img src="{{asset('images/images.png')}}" class="img-fluid" alt="">
               </div>

               <div class="item">
                    <img src="{{asset('images/images111.png')}}" class="img-fluid" alt="">
               </div>
          </div>
     </div>
@endsection

@section('js')

@endsection