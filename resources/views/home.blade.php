
@extends('layouts.default')            
@section('content') 

<!-- Start Slider Design For Desktop View -->
<div id="carouselExampleIndicators" class="carousel slide banner d-lg-block d-md-block d-none" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="{{ asset('/resources/assets/images/dr-archana-jhawar-ent-specialist-navi-mumbai-banner1.jpg')}}" class="d-block w-100 img-fluid mt-lg-5 mt-md-5 mt-0" alt="dr-archana-jhawar-ent-specialist-navi-mumbai-banner1">
            <div class="carousel-caption01">
			  <a href="{{('book-appointment')}}" class="button btn-3 btn-3-1 btn-3-2">Book Appointment</a>
			</div>    
        </div>    
        <div class="carousel-item">
            <img src="{{ asset('/resources/assets/images/vertigo.jpg')}}" class="d-block w-100 img-fluid mt-lg-5 mt-md-5 mt-0" alt="vertigo">
            <div class="carousel-caption">
			  <a href="{{('book-appointment')}}" class="button btn-3 btn-3-1 btn-3-2">Book Appointment</a>
			</div>
        </div>  
        <div class="carousel-item">
            <img src="{{ asset('/resources/assets/images/tinnitus-hyperacusis-clinic-navi-mumbai-banner3.jpg')}}" class="d-block w-100 img-fluid mt-lg-5 mt-md-5 mt-0" alt="tinnitus-hyperacusis-clinic-navi-mumbai-banner3">
            <div class="carousel-caption">
			  <a href="{{('book-appointment')}}" class="button btn-3 btn-3-1 btn-3-2">Book Appointment</a>
			</div>
        </div>   
        <div class="carousel-item">
            <img src="{{ asset('/resources/assets/images/hearing-banner.jpg')}}" class="d-block w-100 img-fluid mt-lg-5 mt-md-5 mt-0" alt="hearing-banner">
            <div class="carousel-caption">
			  <a href="{{('book-appointment')}}" class="button btn-3 btn-3-1 btn-3-2">Book Appointment</a>
			</div>
        </div>
        <div class="carousel-item">       
            <img src="{{ asset('/resources/assets/images/allery-sinus-clinic-navi-mumbai-banner2.jpg')}}" class="d-block w-100 img-fluid mt-lg-5 mt-md-5 mt-0" alt="allery-sinus-clinic-navi-mumbai-banner2">
            <div class="carousel-caption">
			  <a href="{{('book-appointment')}}" class="button btn-3 btn-3-1 btn-3-2">Book Appointment</a>
			</div>
        </div>     
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>    
</div>
<!-- End Slider Design -->  

<!-- Start Slider Design For Mobile View -->
<div id="carouselExampleIndicators-2" class="carousel slide banner d-lg-none d-md-none d-block" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="{{ asset('/resources/assets/images/dr-archana-jhawar-ent-specialist-navi-mumbai-banner-mob1.jpg')}}" class="d-block w-100 img-fluid mt-lg-5 mt-md-5 mt-0" alt="dr-archana-jhawar-ent-specialist-navi-mumbai-banner1">
            <div class="carousel-caption02">
			  <a href="{{('book-appointment')}}" class="button btn-3 btn-3-1 btn-3-2">Book Appointment</a>
			</div>
        </div>          
        <div class="carousel-item">
            <img src="{{ asset('/resources/assets/images/vertigo-movile-view.jpg')}}" class="d-block w-100 img-fluid mt-lg-5 mt-md-5 mt-0" alt="vertigo">
            <div class="carousel-caption02">
			  <a href="{{('book-appointment')}}" class="button btn-3 btn-3-1 btn-3-2">Book Appointment</a>
			</div>
        </div>   
        <div class="carousel-item">
            <img src="{{ asset('/resources/assets/images/tinnitus-hyperacusis-clinic-and-tinnitus-banner-mobile-view.jpg')}}" class="d-block w-100 img-fluid mt-lg-5 mt-md-5 mt-0" alt="tinnitus-hyperacusis-clinic-and-tinnitus-banner-mobile-view">
            <div class="carousel-caption02">
			  <a href="{{('book-appointment')}}" class="button btn-3 btn-3-1 btn-3-2">Book Appointment</a>
			</div>
        </div>  
        <div class="carousel-item">        
            <img src="{{ asset('/resources/assets/images/hearing-banner-mobile-view.jpg')}}" class="d-block w-100 img-fluid mt-lg-5 mt-md-5 mt-0" alt="hearing-banner-mobile-view">
            <div class="carousel-caption02">
			  <a href="{{('book-appointment')}}" class="button btn-3 btn-3-1 btn-3-2">Book Appointment</a>
			</div>
        </div>
        <div class="carousel-item">       
            <img src="{{ asset('/resources/assets/images/allergy-sinus-clinic-at-navi-mobile-view.jpg')}}" class="d-block w-100 img-fluid mt-lg-5 mt-md-5 mt-0" alt="allergy-sinus-clinic-at-navi-mobile-view">
            <div class="carousel-caption02">
			  <a href="{{('book-appointment')}}" class="button btn-3 btn-3-1 btn-3-2">Book Appointment</a>
			</div>
        </div>  
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators-2" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators-2" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>    
</div>
<!-- End Slider Design -->    

<section class="sec-locations">
    <div class="container">
        <div class="row d-flex justify-content-center text-center">
            <div class="col-lg-9 col-md-8 col-12 ">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-12">
                        <h2>Our Locations in Mumbai</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-12 mt-lg-0 mt-md-0 mt-5">
                        <div class="cat-locations">
                            <i class="fa fa-map-marker"></i>
                            <h4>Neoalta ENT Clinic</h4>
                            <p>Vashi, Navi Mumbai</p>
                            <a href="{{route('contact')}}" class="button btn-3 btn-3-1 mt-4 mb-2">Book Appointment</a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-12 mt-lg-0 mt-md-0 mt-5">
                        <div class="cat-locations">
                            <i class="fa fa-map-marker"></i>
                            <h4>Kokilaben Dhirubhai Ambani Hospital</h4>
                            <p>Kopar Khairane, Navi Mumbai</p>
                            <a href="{{route('contact')}}" class="button btn-3 btn-3-1 mt-4 mb-2">Book Appointment</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="space-top"></div>

<!-- Start About Us Design -->
<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-12 order-lg-1 order-md-1 order-2">
                <div class="cat-about">
                    <h2>Dr. Archana Jhawar</h2> 
                    <i class="fa fa-angle-double-right"></i><h3>MBBS M.S. E.N.T</h3>
                    <i class="fa fa-angle-double-right"></i><h3>Senior ENT Specialist & Surgeon</h3>
                    <i class="fa fa-angle-double-right"></i><h3>Consultant Doctor at Neoalta Clinic, Vashi</h3>
                    <i class="fa fa-angle-double-right"></i><h3>Consultant Doctor at Kokilaben Dhirubhai Ambani Hospital, Navi Mumbai (formerly Reliance Hospital)</h3>
                    <!-- <h3><i class="fa fa-long-arrow-right" style="padding-right:10px;"></i>Neoalta ENT Clinic, Vashi, Navi Mumbai</h3>
                    <h3><i class="fa fa-long-arrow-right" style="padding-right:10px;"></i>Kokilaben Dhirubhai Ambani Hospital, Navi Mumbai (formerly Reliance Hospital)</h3> -->
                    <p class="pt-4">Dr Archana Jhawar, senior ENT specialist with 23 years’ experience offers accurate diagnosis as well as medical and surgical treatment of Ear, Nose and Throat related various problems like Ear Pain, Ear Infections, Nasal Allergies, Sinus Problems, Hearing Problems, Throat Infections, Vertigo, Tinnitus and Surgeries of Ear, Adenoids, Nose and Sinus. She consults at Neoalta Clinic Vashi/Seawoods & Kokilaben Dhirubhai Ambani Hospital, Koparkhairane, Navi Mumbai (formerly Reliance Hospital). She is secretary Association of Otorhinolaryngologist, Navi Mumbai & Raigad.</p>
                    <a href="{{route('about')}}" class="button btn-3 mt-4 mb-lg-5 mb-0 mb-md-5 mr-5">View More</a>
                    <a href="{{route('book-appointment')}}" class="button btn-3 mt-4 mb-lg-5 mb-md-5 mb-0 ml-5">Book Appointment</a>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-12 order-lg-2 order-md-2 order-1">
                <div class="image_boxes style_one">
                    <div class="image one img-border">
                        <img src="{{ asset('/resources/assets/images/neoalta-clinic-img.jpg')}}" class="img-fluid" alt="">
                    </div>
                    <div class="year_of_experience">
                        <div class="year">
                            23<sup>+</sup>
                        </div>
                        <div class="content">
                            <h2> Years Of Experience</h2>                            
                        </div>
                    </div>
                </div> 
            </div>       
        </div>
    </div>
</section>   
<!-- End About Us Design -->

<div class="space-top"></div>

<!-- Start speciality ent clinic Design -->
<div class="services-2 content-area-5 bg-grea-3">
    <div class="container">
        <div class="main-title-3">
            <h1>speciality ent clinic</h1>
        </div>
        <div class="row wow animated" style="visibility: visible;">
            <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12 wow fadeInLeft delay-04s" style="visibility: visible; animation-name: fadeInLeft;">
                <div class="service-info-5">
                    <div class="icon">
                        <div class="service-i">
                          <img src="{{ asset('/resources/assets/images/icons/vertigo-icon.png')}}" class="img-fluid" alt="vertigo-icon">
                        </div>
                    </div>
                    <h4>
                        <a href="{{route('vertigo-clinic')}}">Vertigo</a>
                    </h4>
                    <p>The vertigo clinic specializes in the diagnosis and management of vertigo and Dizziness, employing various strategies, including medication, physical therapy, and lifestyle modifications.</p>
                    <a href="{{route('vertigo-clinic')}}" class="button btn-4 mt-4">View More</a>
                  </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12 wow fadeInLeft delay-04s" style="visibility: visible; animation-name: fadeInLeft;">
                <div class="service-info-5">
                    <div class="icon">
                        <div class="service-i">
                          <img src="{{ asset('/resources/assets/images/icons/tinnitus-icon.png')}}" class="img-fluid" alt="tinnitus-icon">
                        </div>
                    </div>
                    <h4>
                        <a href="{{route('tinnitus-clinic')}}">Tinnitus</a>
                    </h4>
                    <p>The tinnitus clinic focuses on the evaluation and management of tinnitus, employing sound therapy, counseling, and medical interventions to alleviate symptoms.</p>
                    <a href="{{route('tinnitus-clinic')}}" class="button btn-4 mt-4">View More</a>
                  </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12 wow fadeInLeft delay-04s" style="visibility: visible; animation-name: fadeInLeft;">
                <div class="service-info-5">
                    <div class="icon">
                        <div class="service-i">
                          <img src="{{ asset('/resources/assets/images/icons/migraine-pain-icon.png')}}" class="img-fluid" alt="migraine-pain-icon">
                        </div>
                    </div>
                    <h4>
                        <a href="{{route('tm-joint-pain')}}">TMJ & Migraine Pain</a>
                    </h4>
                    <p>Specialized management of temporomandibular (TM) joint pain and migraines involves a multidisciplinary approach, including medications, physical therapy.</p>
                    <a href="{{route('tm-joint-pain')}}" class="button btn-4 mt-4">View More</a>
                  </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12 wow fadeInLeft delay-04s" style="visibility: visible; animation-name: fadeInLeft;">
                <div class="service-info-5">
                    <div class="icon">
                        <div class="service-i">
                          <img src="{{ asset('/resources/assets/images/icons/pediatric-ent-icon.png')}}" class="img-fluid" alt="pediatric-ent-icon">
                        </div>
                    </div>
                    <h4>
                        <a href="{{route('pediatric-ent')}}">Pediatric ENT</a>
                    </h4>
                    <p>Pediatric ENT specializes in the diagnosis and treatment of ear, nose, and throat disorders in children, addressing issues such as recurrent infections, hearing loss, & airway problems.</p>
                    <a href="{{route('pediatric-ent')}}" class="button btn-4 mt-4">View More</a>
                  </div>
            </div>
        </div>
        <div class="text-center">
          <a href="{{route('vertigo-clinic')}}" class="button btn-3 mt-4">View More</a>
        </div>
    </div>
</div>
<!-- End speciality ent clinic Design -->

<!--  -->
<div class="pricing-tables-1 content-area">
    <div class="container">
        <div class="main-title">
            <h1>Conditions</h1>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-12">
                <div class="pricing-1 plan plan2">
                  <img src="{{ asset('/resources/assets/images/services/ear-condition-img.jpg')}}" alt="ear-condition-img" class="img-fluid">
                    <div class="plan-header">
                        <h5>Ear</h5>
                    </div>
                    <div class="plan-list">
                        <ul>
                            <i class="fa fa-long-arrow-right" aria-hidden="true"></i><li><a href="{{route('ear-wax-removal')}}">Ear Wax</a> <a href="{{route('ear-pain-treatment')}}">Ear Pain</a></li>
                            <i class="fa fa-long-arrow-right" aria-hidden="true"></i><li><a href="{{route('foreign-body-ear-removal')}}">Foreign Body in Ear</a></li>
                            <i class="fa fa-long-arrow-right" aria-hidden="true"></i><li><a href="{{route('ear-itching-treatment')}}">Ear Itching / Otomycosis / Otitis Externa</a></li>
                            <i class="fa fa-long-arrow-right" aria-hidden="true"></i><li><a href="{{route('eardrum-rupture-treatment')}}">Ear Drum Rupture</a> / <a href="{{route('ear-infection-treatment')}}">Ear Infection</a></li>
                            <i class="fa fa-long-arrow-right" aria-hidden="true"></i><li><a href="{{route('middle-ear-medical-treatment')}}">Middle Ear Fluid</a></li>
                            <i class="fa fa-long-arrow-right" aria-hidden="true"></i><li><a href="{{route('vertigo-dizziness-treatment')}}">Vertigo and Dizziness</a></li>
                            <i class="fa fa-long-arrow-right" aria-hidden="true"></i><li><a href="{{route('tinnitus-management')}}">Tinnitus - Sound & Music Therapy</a></li>
                            <i class="fa fa-long-arrow-right" aria-hidden="true"></i><li><a href="{{route('hearing-loss-management')}}">Hearing Loss & Hearing Aids</a></li>
                        </ul>
                        <!-- <ul>
                            <i class="fa fa-long-arrow-right" aria-hidden="true"></i><li><a href="{{route('home')}}">Ear wax (Cerumen)</a></li>
                            <i class="fa fa-long-arrow-right" aria-hidden="true"></i><li><a href="{{route('home')}}">Foreign Body in Ear</a></li>
                            <i class="fa fa-long-arrow-right" aria-hidden="true"></i><li><a href="{{route('home')}}">Ear Pain (Earache)</a></li>
                            <i class="fa fa-long-arrow-right" aria-hidden="true"></i><li><a href="{{route('home')}}">Ear Itching / Otomycosis / Otitis Externa</a></li>
                            <i class="fa fa-long-arrow-right" aria-hidden="true"></i><li><a href="{{route('home')}}">Ear-Drum Rupture </a></li>
                            <i class="fa fa-long-arrow-right" aria-hidden="true"></i><li><a href="{{route('home')}}">Ear Infection</a></li>
                            <i class="fa fa-long-arrow-right" aria-hidden="true"></i><li><a href="{{route('home')}}">Middle Ear Fluid</a></li>
                            <i class="fa fa-long-arrow-right" aria-hidden="true"></i><li><a href="{{route('home')}}">Vertigo and Dizziness</a></li>
                            <i class="fa fa-long-arrow-right" aria-hidden="true"></i><li><a href="{{route('home')}}">Tinnitus Management - Sound & Music Therapy</a></li>
                            <i class="fa fa-long-arrow-right" aria-hidden="true"></i><li><a href="{{route('home')}}">Hearing Loss Management & Hearing Aids</a></li>
                        </ul> -->
                        <div class="plan-button text-center">
                            <a href="{{route('ear-wax-removal')}}" class="btn btn-outline pricing-btn button-theme">View More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="pricing-1 plan plan2">
                  <img src="{{ asset('/resources/assets/images/services/nose-condition-img.jpg')}}" alt="ear-condition-img" class="img-fluid">
                    <div class="plan-header">
                        <h5>Nose</h5>
                    </div>
                    <div class="plan-list">
                        <ul>
                            <i class="fa fa-long-arrow-right" aria-hidden="true"></i><li><a href="{{route('frequent-cold-nose-block')}}">Frequent Cold and Nose Block </a></li>
                            <i class="fa fa-long-arrow-right" aria-hidden="true"></i><li><a href="{{route('allergic-rhinitis')}}">Allergic Rhinitis (Sneezing and Runny Nose)</a></li>
                            <i class="fa fa-long-arrow-right" aria-hidden="true"></i><li><a href="{{route('sinus-headaches')}}">Sinus Headaches</a></li>
                            <i class="fa fa-long-arrow-right" aria-hidden="true"></i><li><a href="{{route('migraine-treatment')}}">Migraine</a></li>
                            <i class="fa fa-long-arrow-right" aria-hidden="true"></i><li><a href="{{route('sinusitis')}}">Sinusitis</a></li>
                            <i class="fa fa-long-arrow-right" aria-hidden="true"></i><li><a href="{{route('foreign-body-nose-removal')}}">Foreign Body Nose Removal</a></li>
                        </ul>
                        <div class="plan-button plan-button1 text-center">
                            <a href="{{route('frequent-cold-nose-block')}}" class="btn btn-outline pricing-btn button-theme">View More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="pricing-1 plan plan2">
                  <img src="{{ asset('/resources/assets/images/services/throat-condition-img.jpg')}}" alt="ear-condition-img" class="img-fluid">
                    <div class="plan-header">
                        <h5>Throat</h5>
                    </div>
                    <div class="plan-list">
                        <ul>
                            <i class="fa fa-long-arrow-right" aria-hidden="true"></i><li><a href="{{route('throat-infection')}}">Throat infection /Sore Throat /Throat Pain</a></li>
                            <i class="fa fa-long-arrow-right" aria-hidden="true"></i><li><a href="{{route('chronic-cough')}}">Chronic Cough</a></li>
                            <i class="fa fa-long-arrow-right" aria-hidden="true"></i><li><a href="{{route('tonsillitis')}}">Tonsillitis</a></li>
                            <i class="fa fa-long-arrow-right" aria-hidden="true"></i><li><a href="{{route('adenoid-enlargement')}}">Adenoid Enlargement in Children</a></li>
                            <i class="fa fa-long-arrow-right" aria-hidden="true"></i><li><a href="{{route('hoarseness-voice')}}">Hoarseness of Voice</a></li>
                            <i class="fa fa-long-arrow-right" aria-hidden="true"></i><li><a href="{{route('hyperacidity')}}">Hyperacidity</a></li>
                        </ul>
                        <div class="plan-button plan-button1 text-center">
                            <a href="{{route('throat-infection')}}" class="btn btn-outline pricing-btn button-theme">View More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--  -->

<!--  -->
<div class="services-2 content-area-11 bg-grea-3">
    <div class="container">
        <!-- Main title -->
        <div class="main-title-4">
            <h1>ENT Surgeries </h1>        
        </div>
        <div class="row wow animated" style="visibility: visible;">
            <!-- <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 wow fadeInLeft delay-04s d-flex align-self-center" style="visibility: visible; animation-name: fadeInLeft;">
                <div class="services-demo">
                    <img class="img-fluid" src="{{ asset('/resources/assets/images/services/ent-surgeries-img.png')}}" alt="ent-surgeries-img">
                </div>
            </div> -->
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 wow fadeInRight delay-04s" style="visibility: visible; animation-name: fadeInRight;">
                <div class="service-section2">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="service-info-3 d-flex d-lg-flex d-md-flex flex-wrap flex-lg-nowrap flex-md-nowrap">
                                <div class="icon flex-shrink-0 me-3">
                                <img class="img-fluid" src="{{ asset('/resources/assets/images/icons/hearing-improvement-surgery-icon.png')}}" alt="hearing-improvement-surgery-icon">
                                </div>
                                <div class="service-detail">
                                    <h3>
                                        <a href="{{route('myringotomy-grommet-insertion')}}">Microscopic Ear Surgery and Hearing Improvement Surgery</a>
                                    </h3>
                                    <i class="fa fa-long-arrow-right" aria-hidden="true"></i><p><a href="{{route('myringotomy-grommet-insertion')}}">Myringotomy and Grommet Insertion (Ear Tubes)</a></p>
                                    <i class="fa fa-long-arrow-right" aria-hidden="true"></i><p><a href="{{route('tympanoplasty')}}">Tympanoplasty and</a> <a href="{{route('ossiculoplasty')}}">Ossiculoplasty ​</a></p>
                                    <i class="fa fa-long-arrow-right" aria-hidden="true"></i><p><a href="{{route('stapedotomy-stapedectomy')}}">​Stapedotomy and Stapedectomy</a></p>
                                    <i class="fa fa-long-arrow-right" aria-hidden="true"></i><p><a href="{{route('mastoid-exploration-surgery')}}">Mastoid Exploration Surgery - Cholesteatoma Surgery</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="service-info-3 d-flex d-lg-flex d-md-flex flex-wrap flex-lg-nowrap flex-md-nowrap">
                                <div class="icon flex-shrink-0 me-3">
                                <img class="img-fluid" src="{{ asset('/resources/assets/images/icons/sinus-surgery-icon.png')}}" alt="sinus-surgery-icon">
                                </div>
                                <div class="service-detail">
                                    <h3>
                                        <a href="{{route('functional-endoscopic-sinus-surgery')}}">Endoscopic Nose and Sinus Surgery (FESS / ESS)</a>
                                    </h3>
                                    <i class="fa fa-long-arrow-right" aria-hidden="true"></i><p><a href="{{route('septoplasty')}}">Septoplasty</a></p>
                                    <i class="fa fa-long-arrow-right" aria-hidden="true"></i><p><a href="{{route('functional-endoscopic-sinus-surgery')}}">Functional Endoscopic Sinus Surgery (FESS)</a></p>
                                    <i class="fa fa-long-arrow-right" aria-hidden="true"></i><p><a href="{{route('endo-dcr')}}">Endoscopic DCR (Dacryocystorhinostomy)</a></p>
                                    <i class="fa fa-long-arrow-right" aria-hidden="true"></i><p><a href="{{route('nasal-polyp-surgery')}}">Nasal Polyp Surgery</a></p>
                                  </div>
                            </div>
                        </div>
                    </div>
                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-16 col-md-6 col-12">
                            <div class="service-info-3 d-flex d-lg-flex d-md-flex flex-wrap flex-lg-nowrap flex-md-nowrap">
                                <div class="icon flex-shrink-0 me-3">
                                <img class="img-fluid" src="{{ asset('/resources/assets/images/icons/throat-surgery-icon.png')}}" alt="throat-surgery-icon">
                                </div>
                                <div class="service-detail">
                                    <h3>
                                        <a href="{{route('tonsil-adenoids-surgery')}}">Throat Surgery</a>
                                    </h3>
                                    <i class="fa fa-long-arrow-right" aria-hidden="true"></i><p><a href="{{route('tonsil-adenoids-surgery')}}">Tonsil and Adenoids Surgery</a></p>
                                    <i class="fa fa-long-arrow-right" aria-hidden="true"></i><p><a href="{{route('adenoids-coblation-surgery')}}">Adenoids Coblation Surgery</a></p>
                                    <i class="fa fa-long-arrow-right" aria-hidden="true"></i><p><a href="{{route('adenoids-microdebrider-surgery')}}">Adenoids Microdebrider Surgery</a></p>
                                    <i class="fa fa-long-arrow-right" aria-hidden="true"></i><p><a href="{{route('laser-vocal-nodule-surgery')}}">LASER Vocal Nodule Surgery</a></p>
                                  </div>
                            </div>
                        </div>
                    </div>       
                </div>
            </div>
        </div>
    </div>
</div>
<!--  -->

<!-- Counters strat -->
<!-- <div class="counters-3">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 align-self-center wow fadeInLeft delay-04s" style="visibility: visible; animation-name: fadeInLeft;">
                <div class="heading">
                    <p>Our Experience</p>
                    <h1>More than 23 Years of Experience</h1>
                </div>
            </div>
            <div class="col-lg-7 wow fadeInRight delay-04s" style="visibility: visible; animation-name: fadeInRight;">
                <div class="infos clearfix">
                    <div class="counter-box b-button b-right d-flex">
                        <div class="icon">
                        <i class="fa fa-frown-o"></i>
                        </div>
                        <div class="detail">
                            <h1 class="counter Starting">967</h1>
                            <p>Happy Patients</p>
                        </div>
                    </div>
                    <div class="counter-box b-button d-flex">
                        <div class="icon">
                        <i class="lnr lnr-highlight"></i>
                        </div>
                        <div class="detail">
                            <h1 class="counter Starting">1276</h1>
                            <p>Surgeries Performed</p>
                        </div>
                    </div>
                    <div class="counter-box b-right d-flex">
                        <div class="icon">
                            <i class="lnr lnr-thumbs-up"></i>
                        </div>
                        <div class="detail">
                            <h1 class="counter Starting">100%</h1>
                            <p>Trust & Care</p>
                        </div>
                    </div>
                    <div class="counter-box d-flex">
                        <div class="icon">
                            <i class="fa fa-trophy"></i>
                        </div>
                        <div class="detail">
                            <h1 class="counter Starting">22</h1>
                            <p>Awarded</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->
<!-- Counters end -->   

<!-- Testimonial 3 start -->
<div class="testimonial-3 comon-slick">
    <div class="container">
        <!-- Main title -->
        <div class="main-title-3">
            <h1>Our <span>Testimonials</span></h1>
        </div>
        <div class="slick row comon-slick-inner wow fadeInUp delay-04s" data-slick='{"slidesToShow": 2, "responsive":[{"breakpoint": 1024,"settings":{"slidesToShow": 1}}, {"breakpoint": 768,"settings":{"slidesToShow": 1}}]}'>
            <div class="item slide-box">
                <div class="testimonial-inner">
                    <div class="content-box">
                        <div class="user">
                            <a href="#">
                                <img src="{{ asset('/resources/assets/images/icons/vinay-review.png')}}" alt="vinay-review">
                            </a>
                        </div>
                        <div class="testimonial-info">
                            <h3>VINAY BHANDARI (vinu)</h3>
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <p>Dr. Archana Jhawar performed my ear drum surgery in 2013, Before surgery Dr explained everything in detail to relieve my anxiety. She listens patiently. Recently visited her at her neoalta clinic for my brothers ear drum perforation issue and highly recommend her clinic to anyone looking for ENT specialist in Navi Mumbai.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item slide-box">
                <div class="testimonial-inner">
                    <div class="content-box">
                        <div class="user">
                            <a href="#">
                              <img src="{{ asset('/resources/assets/images/icons/sejal-vaishya-review.png')}}" alt="sejal-vaishya-review">
                            </a>
                        </div>
                        <div class="testimonial-info">
                            <h3>
                            Sejal Vaishya
                            </h3>
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <p>Dr. Archana Jhawar is a top-notch ENT specialist! Highly skilled, compassionate, and caring. She took the time to listen, explained my condition thoroughly, and provided effective treatment options. Clinic is well-maintained, and the staff is friendly and efficient. Highly recommend her to anyone in need of an ENT specialis! Dhanyawad.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item slide-box">
                <div class="testimonial-inner">
                    <div class="content-box">
                        <div class="user">
                            <a href="#">
                              <img src="{{ asset('/resources/assets/images/icons/arman-khan-review.png')}}" alt="arman-khan-review">
                            </a>
                        </div>
                        <div class="testimonial-info">
                            <h3>
                            Arman Khan
                            </h3>
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-half-full"></i>
                            </div>
                            <p>Dr. Jhawar is a highly skilled and compassionate ENT specialist. I will highly recommend her for anyone seeking ENT care in navi mumbai.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row d-flex justify-content-center mt-5">
          <div class="col-lg-4 col-md-4 col-12 text-center">
            <a href="{{route('testimonial')}}" class="button btn-3 mt-4 mb-5">View More</a>
          </div>
        </div>
    </div>
</div>
<!-- Testimonial 3 end -->

<!--  -->
<div class="our-team-1 content-area bg-grea-3">
    <div class="container">
        <div class="main-title">
            <h1>Consulting Places</h1>
        </div>
        <div class="row d-flex justify-content-center">
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                <div class="team-2 df-box">
                    <div class="team-photo">
                        <a href="#">
                            <img src="{{ asset('/resources/assets/images/neolta-logo.jpg')}}" alt="neolta-logo" class="img-fluid">
                        </a>
                    </div>
                    <div class="team-details">
                        <h5>Neoalta ENT Clinic</h5>
                        <p><i class="bi bi-geo-alt" style="padding-right: 13px;"></i>Vashi, Navi Mumbai</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                <div class="team-2 df-box">
                    <div class="team-photo">
                        <a href="#">
                            <img src="{{ asset('/resources/assets/images/hospital-attachment-1.jpg')}}" alt="hospital-attachment-1" class="img-fluid">
                        </a>
                    </div>
                    <div class="team-details">
                        <h5>Kokilaben Dhirubhai Ambani Hospital</h5>
                        <p><i class="bi bi-geo-alt" style="padding-right: 13px;"></i>Kopar Khairane, Navi Mumbai</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--  -->
@stop