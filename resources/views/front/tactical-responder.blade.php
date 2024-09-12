@php
    $page = \Illuminate\Support\Facades\DB::table('pages')->where('id', 10)->first();
    $sections = \Illuminate\Support\Facades\DB::table('section')->where('page_id', 10)->get();
@endphp


@extends('layouts.app')
@section('title', 'Tactical Responder IBSC Online Approved Review Course')

@section('css')

@endsection

@section('content')
    <section class="tactical-paramedic-section">
        <div class="container">
            <div class="row align-items-end pb-5">
                <div class="col-lg-8">
                    <div class="tactical-paramedic-text">
                        <ul>
                            <li><i class="fa-regular fa-star"></i></li>
                            <li><i class="fa-regular fa-star"></i></li>
                            <li><i class="fa-regular fa-star"></i></li>
                            <li><i class="fa-regular fa-star"></i></li>
                            <li><i class="fa-regular fa-star"></i></li>
                        </ul>
{{--                        <h5>Tactical Responder IBSC Online Approved Review Course</h5>--}}
                        {!! $page->content !!}
                        <p>Categories: <a href="javascript:;">Upcoming Training</a></p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="tactical-paramedic-ankers text-right">
                        <ul>
                            <li><a href="javascript:;"><i class="fa-solid fa-bookmark"></i> Wishlist</a></li>
                            <li><a href="javascript:;"><i class="fa-solid fa-share"></i> Share</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8">
                    <div class="tactical-paramedic-section-main">
                        <div class="tactical-paramedic-section-main-img">
                            <img src="{{asset('images/tactical-responder-img-1.webp')}}" alt="" class="img-fluid">
                        </div>
                        <div class="tactical-paramedic-tab">
                            <ul class="nav nav-pills mb-3 tactical-paramedic-tab-anker" id="pills-tab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">
                                        Course Info
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Reviews</a>
                                </li>

                            </ul>
                            <div class="tab-content" id="pills-tabContent">

                                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
{{--                                    <div class="tactical-paramedic-tab-text">--}}
{{--                                        <h4>About Course</h4>--}}
{{--                                        <p>The tactical environment is not for the faint of heart or ill-prepared. Training in tactical medicine is crucial for a number of reasons. It can, first and foremost, save lives. Prompt and competent medical care might make the difference between life and death in high-risk scenarios.  Tactical medical training can assist in ensuring that victims of injuries or wounds receive prompt and effective care by empowering medical practitioners with the knowledge and abilities to provide appropriate medical care. Goat-Trail Austere Medical Solutions (GAMS), Tactical Austere Medical Practitioner (TAM-P) Urban courses combine tactics with trauma care, emergency medicine, Basic Life Support, and Advance Life Support and involve simulations and practical exercises to prepare learners for real-world situations. The TAM-P Urban course is designed for EMS, fire, law enforcement, and first responders who operate in high-risk, high-stress, circumstances. Our course motto says it all, “Real World Medicine for Real World Situations.” Tactical medicine is a lifesaving mission, but it can also increase the effectiveness of the entire mission. Medical emergencies can interfere with operations and jeopardize staff safety in high-risk environments. Tactical medical training helps preserve operational preparedness by teaching people to deal with medical situations. Any organization that operates in high-risk situations should make an investment in tactical medical training. Tactical medical training can contribute to the saving of lives, the success of missions, and the general safety and well-being of personnel by empowering people with the information and abilities necessary to respond to tactical medical situations.</p>--}}
{{--                                        <h5>TR-C Recertification</h5>--}}
{{--                                        <p>Recertification options for the Certified Tactical Responder (TR-C) credential include the following:</p>--}}
{{--                                        <ul>--}}
{{--                                            <li>Complete the required continuing education (CE) credits</li>--}}
{{--                                        </ul>--}}
{{--                                        <p>The purpose of these recertification options is to ensure the certificate maintains competency and compliance with the domains listed on the Detailed Content Outline for the certification. Retaking the exam and or providing approved continuing education hours ensures compliance and continued competency are met.</p>--}}
{{--                                        <h5>Eligibility Requirements for Recertification</h5>--}}
{{--                                        <ul>--}}
{{--                                            <li>Hold an unrestricted license or certificate to practice as an Emergency Medical Responder (EMR), Emergency Medical Technician (EMT), Advanced Emergency Medical Technician (AEMT), or be currently licensed or certified as a Law</li>--}}
{{--                                            <li>Enforcement Officer (LEO).</li>--}}
{{--                                            <li>Hold medical director authorization to practice (Canada only).</li>--}}
{{--                                            <li>Have tactical knowledge consistent with current TCCC/TECC guidelines.</li>--}}
{{--                                            <li>Submit a license or certification for verification and approval. (Sworn law enforcement officers who have had formalized medical training but are not currently licensed may petition the IBSC for a waiver).</li>--}}
{{--                                        </ul>--}}
{{--                                        <h5>What Will You Learn?</h5>--}}
{{--                                        <ul>--}}
{{--                                            <li>Introduction to Tactical & Austere Medicine</li>--}}
{{--                                            <li>Care Under Fire</li>--}}
{{--                                            <li>Massive Hemorrhage Management</li>--}}
{{--                                            <li>Airway Management</li>--}}
{{--                                            <li>Respiratory Management</li>--}}
{{--                                            <li>Circulatory Management</li>--}}
{{--                                            <li>Head Injury & Hypothermia Management</li>--}}
{{--                                            <li>Triage Considerations</li>--}}
{{--                                            <li>Security Response Considerations</li>--}}
{{--                                            <li>Evacuation Care</li>--}}
{{--                                            <li>Environmental Emergencies Pt.1 Heat & Cold Injuries</li>--}}
{{--                                            <li>Environmental Emergencies Pt. 2 Allergic Reaction</li>--}}
{{--                                            <li>Environmental Pt. 3 Inhalation & Electrical Injuries</li>--}}
{{--                                            <li>Advance Airway Management Pt. 1</li>--}}
{{--                                            <li>Advance Airway Management Pt. 2</li>--}}
{{--                                            <li>Acid-Base Balance & Ventilator Management</li>--}}
{{--                                            <li>Advance Cardiology</li>--}}
{{--                                            <li>Flight Physiology & Gas Laws</li>--}}
{{--                                            <li>Ballistic, Blast, and Less Lethal Injuries</li>--}}
{{--                                            <li>Torso Trauma</li>--}}
{{--                                            <li>Head, Neck, and Spinal Injuries</li>--}}
{{--                                            <li>Musculoskeletal, Soft Tissue, and Burns</li>--}}
{{--                                            <li>SWAT Unit Essential & Medical Consideration</li>--}}
{{--                                            <li>M4 Carbine Firearms Safety & Marksmanship</li>--}}
{{--                                            <li>Glock 19 Firearms Safety & Marksmanship</li>--}}
{{--                                            <li>Operational SWAT Callout’s Types</li>--}}
{{--                                            <li>Operational Tactics for Conventional Threats and Weapons Commonly Improvised</li>--}}
{{--                                            <li>Active Shooter</li>--}}
{{--                                            <li>Fire as a Weapon</li>--}}
{{--                                            <li>Flight Operations & LZ Considerations.</li>--}}
{{--                                        </ul>--}}
{{--                                        <h5>How is the Course Provided?</h5>--}}
{{--                                        <h6 class="line-bottom">eLearning model:</h6>--}}
{{--                                        <h6>Online Course </h6>--}}
{{--                                        <ul>--}}
{{--                                            <li>The course consists of an interactive PowerPoint presentation that is self-paced and includes quizzes after each session.</li>--}}
{{--                                        </ul>--}}
{{--                                        <h6>All course students receive the following certifications:</h6>--}}
{{--                                        <ul>--}}
{{--                                            <li>IBSC – Approved Tactical Paramedic Review Course Certificate = 16 Hours CE</li>--}}
{{--                                        </ul>--}}
{{--                                        <h5 class="pt-4">Course Content</h5>--}}
{{--                                        <div class="tactical-paramedic-tab-text-according">--}}
{{--                                            <div id="accordion">--}}
{{--                                                <div class="card">--}}
{{--                                                    <div class="card-header" id="headingOne">--}}
{{--                                                        <h5 class="mb-0">--}}
{{--                                                            <button class=" btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">--}}

{{--                                                                <div class="card-btn">--}}
{{--                                                                    <div class="card-text">--}}
{{--                                                                        GAMS Tactical Austere Medical Practitioner Course TAM-P Assessment Considerations--}}
{{--                                                                    </div>--}}

{{--                                                                    <div class="card-arrow">--}}
{{--                                                                        <span class="arrow-right"><i class="fas fa-chevron-right"></i></span>--}}

{{--                                                                        <span class="arrow-up"><i class="fas fa-chevron-up"></i></span>--}}
{{--                                                                    </div>--}}

{{--                                                                </div>--}}

{{--                                                            </button>--}}
{{--                                                        </h5>--}}
{{--                                                    </div>--}}

{{--                                                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">--}}
{{--                                                        <div class="card-body">--}}
{{--                                                            <div class="tactical-paramedic-tab-text-according-text">--}}
{{--                                                                <ul>--}}
{{--                                                                    <li><span><i class="fa-solid fa-file"></i>--}}
{{--                                                                Introduction to Tactical & Austere Medicine</span><span><i class="fa-solid fa-lock"></i></span></li>--}}
{{--                                                                    <li><span><i class="fa-solid fa-file"></i>--}}
{{--                                                                TAM-P-Care-Under-Fire</span><span><i class="fa-solid fa-lock"></i></span></li>--}}

{{--                                                                    <li><span><i class="fa-solid fa-file"></i>--}}
{{--                                                                TAM-P-Field-Care-MARCH-PAWS-Controlling-Massive-Hemorrhage</span><span><i class="fa-solid fa-lock"></i></span></li>--}}


{{--                                                                    <li><span><i class="fa-solid fa-file"></i>--}}
{{--                                                                TAM-P-Field-Care-MARCH-PAWS-Airway</span><span><i class="fa-solid fa-lock"></i></span></li>--}}

{{--                                                                    <li><span><i class="fa-solid fa-file"></i>--}}
{{--                                                                TAM-P-Field-Care-MARCH-PAWS-Respiration</span><span><i class="fa-solid fa-lock"></i></span></li>--}}

{{--                                                                    <li><span><i class="fa-solid fa-file"></i>--}}
{{--                                                                TAM-P-Field-Care-MARCH-PAWS-Circulation</span><span><i class="fa-solid fa-lock"></i></span></li>--}}

{{--                                                                    <li><span><i class="fa-solid fa-file"></i>--}}
{{--                                                                TAM-P-Field-Care-MARCH-PAWS-Head-Injury-Hypothermia</span><span><i class="fa-solid fa-lock"></i></span></li>--}}

{{--                                                                    <li><span><i class="fa-solid fa-file"></i>--}}
{{--                                                                TAM-P-Field-Care-START-Triage-System</span><span><i class="fa-solid fa-lock"></i></span></li>--}}

{{--                                                                    <li><span><i class="fa-solid fa-file"></i>--}}
{{--                                                                TAM-P-Security-Response-to-Mass-Casualty-Event</span><span><i class="fa-solid fa-lock"></i></span></li>--}}

{{--                                                                    <li><span><i class="fa-solid fa-file"></i>--}}
{{--                                                                TAM-P-Evacuation-TACEVAC</span><span><i class="fa-solid fa-lock"></i></span></li>--}}

{{--                                                                    <li><span><i class="fa-regular fa-circle-question"></i> TAMP Assessment Considerations</span><span><i class="fa-solid fa-lock"></i></span></li>--}}

{{--                                                                    <li><span><i class="fa-regular fa-circle-question"></i> TAMP Assessment Considerations</span><span><i class="fa-solid fa-lock"></i></span></li>--}}

{{--                                                                    <li><span><i class="fa-regular fa-circle-question"></i> TAMP Assessment Considerations</span><span><i class="fa-solid fa-lock"></i></span></li>--}}

{{--                                                                    <li><span><i class="fa-regular fa-circle-question"></i> TAMP Assessment Considerations</span><span><i class="fa-solid fa-lock"></i></span></li>--}}

{{--                                                                    <li><span><i class="fa-regular fa-circle-question"></i> TAMP Assessment Considerations</span><span><i class="fa-solid fa-lock"></i></span></li>--}}

{{--                                                                </ul>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <div class="card">--}}
{{--                                                    <div class="card-header" id="headingTwo">--}}
{{--                                                        <h5 class="mb-0">--}}
{{--                                                            <button class="btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">--}}
{{--                                                                <div class="card-btn">--}}
{{--                                                                    <div class="card-text">--}}
{{--                                                                        GAMS Tactical Austere Medical Practitioner (TAM-P) Advance Medical Considerations--}}
{{--                                                                    </div>--}}

{{--                                                                    <div class="card-arrow">--}}
{{--                                                                        <span class="arrow-right"><i class="fas fa-chevron-right"></i></span>--}}

{{--                                                                        <span class="arrow-up"><i class="fas fa-chevron-up"></i></span>--}}
{{--                                                                    </div>--}}

{{--                                                                </div>--}}
{{--                                                            </button>--}}
{{--                                                        </h5>--}}
{{--                                                    </div>--}}
{{--                                                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">--}}
{{--                                                        <div class="card-body">--}}
{{--                                                            <div class="tactical-paramedic-tab-text-according-text">--}}
{{--                                                                <ul>--}}

{{--                                                                    <li><span><i class="fa-solid fa-file"></i> TAM-P Environmental Part 1 – Heat & Cold Injuries</span><span><i class="fa-solid fa-lock"></i></span></li>--}}

{{--                                                                    <li><span><i class="fa-solid fa-file"></i>--}}
{{--                                                                TAM-P Environmental Part 2 – Allergic Reaction and Anaphylaxis</span><span><i class="fa-solid fa-lock"></i></span></li>--}}

{{--                                                                    <li><span><i class="fa-solid fa-file"></i>--}}
{{--                                                                TAM-P Environmental Part 3 – Inhalation & Electrical Injuries--}}
{{--                                                                </span><span><i class="fa-solid fa-lock"></i></span></li>--}}

{{--                                                                    <li><span><i class="fa-solid fa-file"></i>--}}
{{--                                                                TAM-P Advanced Airway Management Part 1</span><span><i class="fa-solid fa-lock"></i></span></li>--}}

{{--                                                                    <li><span><i class="fa-solid fa-file"></i>--}}
{{--                                                                TAM-P Advanced Airway Management Part 2</span><span><i class="fa-solid fa-lock"></i></span></li>--}}

{{--                                                                    <li><span><i class="fa-solid fa-file"></i>--}}
{{--                                                                TAM-P Advanced Cardiology Part 1</span><span><i class="fa-solid fa-lock"></i></span></li>--}}

{{--                                                                    <li><span><i class="fa-solid fa-file"></i>--}}
{{--                                                                TAM-P Advanced Cardiology Part 2</span><span><i class="fa-solid fa-lock"></i></span></li>--}}

{{--                                                                    <li><span><i class="fa-solid fa-file"></i>--}}
{{--                                                                TAM-P Acid Base Balance</span><span><i class="fa-solid fa-lock"></i></span></li>--}}

{{--                                                                    <li><span><i class="fa-solid fa-file"></i>--}}
{{--                                                                TAM-P Flight Physiology and Gas Laws</span><span><i class="fa-solid fa-lock"></i></span></li>--}}

{{--                                                                    <li><span><i class="fa-solid fa-file"></i> TAM-P Ballistic, Blast, and Less Lethal Injuries</span><span><i class="fa-solid fa-lock"></i></span></li>--}}

{{--                                                                    <li><span><i class="fa-solid fa-file"></i> TAM-P Thoracic & Spinal Injuries</span><span><i class="fa-solid fa-lock"></i></span></li>--}}

{{--                                                                    <li><span><i class="fa-solid fa-file"></i>--}}
{{--                                                                TAM-P Musculoskeletal, Soft Tissue, and Burn Injuries</span><span><i class="fa-solid fa-lock"></i></span></li>--}}

{{--                                                                    <li><span><i class="fa-regular fa-circle-question"></i> TAMP Medical Considerations</span><span><i class="fa-solid fa-lock"></i></span></li>--}}

{{--                                                                    <li><span><i class="fa-regular fa-circle-question"></i> TAMP Medical Considerations</span><span><i class="fa-solid fa-lock"></i></span></li>--}}

{{--                                                                </ul>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <div class="card">--}}
{{--                                                    <div class="card-header" id="headingThree">--}}
{{--                                                        <h5 class="mb-0">--}}
{{--                                                            <button class="btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">--}}
{{--                                                                <div class="card-btn">--}}
{{--                                                                    <div class="card-text">--}}
{{--                                                                        GAMS Tactical Austere Medical Practitioner Course TAM-P Operational Considerations--}}
{{--                                                                    </div>--}}

{{--                                                                    <div class="card-arrow">--}}
{{--                                                                        <span class="arrow-right"><i class="fas fa-chevron-right"></i></span>--}}

{{--                                                                        <span class="arrow-up"><i class="fas fa-chevron-up"></i></span>--}}
{{--                                                                    </div>--}}

{{--                                                                </div>--}}
{{--                                                            </button>--}}
{{--                                                        </h5>--}}
{{--                                                    </div>--}}
{{--                                                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">--}}
{{--                                                        <div class="card-body">--}}
{{--                                                            <div class="tactical-paramedic-tab-text-according-text">--}}
{{--                                                                <ul>--}}

{{--                                                                    <li><span><i class="fa-solid fa-file"></i>--}}
{{--                                                                TAM-P Tactical Unit Essentials Medical Considerations</span><span><i class="fa-solid fa-lock"></i></span></li>--}}

{{--                                                                    <li><span><i class="fa-solid fa-file"></i>--}}
{{--                                                                TAM-P Tactical Firearm Safety, Handling & Marksmanship, M4 Carbine</span><span><i class="fa-solid fa-lock"></i></span></li>--}}

{{--                                                                    <li><span><i class="fa-solid fa-file"></i>--}}
{{--                                                                TAM-P Tactical Firearm Safety, Handling & Marksmanship, Glock 19</span><span><i class="fa-solid fa-lock"></i></span></li>--}}

{{--                                                                    <li><span><i class="fa-solid fa-file"></i>--}}
{{--                                                                TAM-P Types of Operational Tactical Callouts</span><span><i class="fa-solid fa-lock"></i></span></li>--}}

{{--                                                                    <li><span><i class="fa-solid fa-file"></i>--}}
{{--                                                                TAM-P Active Shooter</span><span><i class="fa-solid fa-lock"></i></span></li>--}}

{{--                                                                    <li><span><i class="fa-solid fa-file"></i>--}}
{{--                                                                TAM-P Fire as a Weapon</span><span><i class="fa-solid fa-lock"></i></span></li>--}}
{{--                                                                </ul>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}

                                    {!! $sections[0]->value !!}
                                </div>

                                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">

                                    <div class="tactical-paramedic-tab-text">
                                        <h4>Student Ratings & Reviews</h4>
                                        <div class="tactical-paramedic-tab-text-img text-center">
                                            <img src="{{asset('images/tactical-paramedic-tab-text.svg')}}" alt="" class="img-fluid">
                                            <p>No Review Yet</p>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="tactical-paramedic-section-main-2">

                        <div class="tactical-paramedic-section-main-2-box p-0">
                            <div class="tactical-paramedic-section-main-2-box-1">
                                <h5>$350.00</h5>
                                <a href="https://roryemtp.ispring.com/view/90916141-SZJnF-pUkVC-x4wqS" class="box-anker">Add to cart</a>
                            </div>
                            <ul class="tactical-paramedic-section-main-2-box-2">
                                <li><i class="fa-regular fa-clock"></i> Intermediate</li>
                                <li><i class="fa-regular fa-clock"></i> 1 Total Enrolled</li>
                                <li><i class="fa-regular fa-clock"></i> 16 hours Duration</li>
                                <li><i class="fa-regular fa-clock"></i> May 18, 2024 Last Updated</li>
                                <li><i class="fa-regular fa-clock"></i> Certificate of completion</li>
                            </ul>
                        </div>
                        <div class="tactical-paramedic-section-main-2-box box-change">
                            <p>A course by</p>
                            <ul class="tactical-paramedic-box">
                                <li> <span class="background">GA</span></li>
                                <li><a href="javascript:;">Goat-Trail Austere Medical Solutions (GAMS)</a></li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('js')

@endsection