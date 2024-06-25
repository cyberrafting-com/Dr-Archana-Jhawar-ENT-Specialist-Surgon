@extends('layouts.default')            
@section('content') 

<!-- Start BreadCrumbs Design -->
<section class="page-title" style="background-image: url({{ asset('/resources/assets/images/breadcrumb_bg.jpg')}});">
    <div class="auto-container">
        <h2>Hearing & Speech Clinic</h2>
        <ul class="page-breadcrumb">
            <li><a href="{{route('home')}}">home</a></li>
            <li>Hearing & Speech Clinic</li>  
        </ul>
    </div>
</section>   
<!-- End BreadCrumbs Design -->  

<!-- Main heading design -->
<section class="head-design">
    <div class="container">   
        <div class="row text-center">
            <div class="col-lg-12 col-md-12 col-12">
                <h1>Welcome to Audicco ENT, Hearing & Speech Clinic in Vashi, Navi Mumbai</h1>
                <p>Creating a positive impact on the lives of <b>Newborns to Elderly</b> with Communication Disorders & Hearing Difficulties.</p>
            </div>
        </div>
    </div>
</section>   

<div class="space-top"></div>

<!--  -->
<section>
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-lg-11 col-sm-12 col-md-11 col-12">
                <div class="backborderbox">                                            
                    <div class="testimonial-box-back text-center">
                        <h2 class="pb-3">About Audicco</h2>
                        <p>Audicco ENT, Hearing & Speech Clinic in Vashi, Navi Mumbai provides evidence based diagnosis & treatment of Ear, Hearing loss , tinnitus, vertigo and Speech problems for all age groups (from infancy to elderly). Dr Archana Jhawar, senior ENT specialist with 17 years’ experience examines your ear to diagnose and treat any condition which can be treated by medicine or surgery (conductive hearing loss). Post graduate qualified Audiologist provides most suitable options to help you chose best hearing aid in depending upon type of your hearing loss, your life style requirement and budget. Along with all top company digital hearing aids we provide best after sales services - proper fitting, programming, servicing and repair.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="space-top"></div>

<section class="sec-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-12">
                <div class="main-title main-title1">
                    <h2>Why Choose Audicco ENT, Hearing & Speech Clinic in Vashi, Navi Mumbai</h2>
                </div>
            </div>
        </div>
        <div class="row d-flex justify-content-center">
            <div class="col-lg-5 col-md-6 col-12">
                <div class="cat-whychoose">
                    <h4>Because We provide Hearing Solutions, Not Just Hearing Aids With,</h4>
                    <p><i class="fa fa-check" aria-hidden="true"></i>Advanced computerized Hearing Tests.</p>
                    <p><i class="fa fa-check" aria-hidden="true"></i>Medical and Surgical treatment of hearing loss.</p>
                    <p><i class="fa fa-check" aria-hidden="true"></i>Offering hearing aids from all leading brands.</p>
                    <p><i class="fa fa-check" aria-hidden="true"></i>Hearing aids to suit all budgets & lifestyles.</p>
                </div>
            </div>
            <div class="col-lg-5 col-md-6 col-12 mt-lg-0 mt-md-0 mt-4">
                <div class="cat-whychoose">
                    <img src="{{ asset('/resources/assets/images/computerized-hearing-tests.jpg')}}" class="img-fluid" alt="computerized-hearing-tests">
                </div>
            </div>
        </div>
    </div>
</section>

<div class="space-top"></div>

<!-- Request Consultation Design Form-->
<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-12 d-flex align-self-center">
                <div class="cat-consult">
                    <h3>Request Consultation</h3>
                    <h5>Call us Now</h5>
                    <a href="tel:+919322229159"><i class="fa fa-phone" aria-hidden="true"></i>+91-9322229159</a>
                </div>  
            </div>
            <div class="col-lg-6 col-md-6 col-12">
                @include('includes.book-appointment-form-design')
            </div>
        </div>
    </div>
</section>

<div class="space-top"></div>

<!--  -->
<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-12">
                <div class="main-title main-title1">
                    <h2 class="mb-5">Untreated Hearing Loss Can Result In:</h2>
                </div>
            </div>
        </div>
        <!-- Desktop View Code -->
        <div class="d-lg-block d-md-block d-none">
            <div class="row clearfix pb-5">
                <div class="col-lg-4 col-md-6 col-sm-12 statements-block">
                    <div class="statements-block-one text-center">
                        <div class="inner-box">
                            <div class="text">
                                <h3>Academic underachievement.</h3>
                            </div>
                            <div class="image-box pt-5">
                                <figure class="image"><img src="{{ asset('/resources/assets/images/academic-underachievement.jpeg')}}" alt="academic-underachievement" style="border-radius: 35px;" class="img-fluid"></figure>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 statements-block mt-5">
                    <div class="statements-block-one text-center">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><img src="{{ asset('/resources/assets/images/isolation-depression-dementia.jpg')}}" alt="isolation-depression-dementia" style="border-radius: 35px;" class="img-fluid"></figure>
                            </div>
                            <div class="text mobile-vision pt-5">
                                <h3>Increased risk of isolation, depression, and dementia.</h3>
                            </div>                          
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 statements-block">
                    <div class="statements-block-one text-center">
                        <div class="inner-box">
                            <div class="text">
                                <h3>Reduced workplace efficiency.</h3>
                            </div>
                            <div class="image-box pt-5">
                                <figure class="image"><img src="{{ asset('/resources/assets/images/reduced-workplace-efficiency.jpg')}}" alt="reduced-workplace-efficiency" style="border-radius: 35px;" class="img-fluid"></figure>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Mobile View Code -->
        <div class="d-lg-none d-md-none d-block">
            <div class="row clearfix pb-5">
                <div class="col-lg-4 col-md-6 col-sm-12 statements-block">
                    <div class="statements-block-one text-center">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><img src="{{ asset('/resources/assets/images/academic-underachievement.jpeg')}}" alt="academic-underachievement" style="border-radius: 35px;" class="img-fluid"></figure>
                            </div>
                            <div class="text">
                                <h3>Academic underachievement.</h3>
                            </div>                               
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 statements-block mt-5">
                    <div class="statements-block-one text-center">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><img src="{{ asset('/resources/assets/images/isolation-depression-dementia.jpg')}}" alt="isolation-depression-dementia" style="border-radius: 35px;" class="img-fluid"></figure>
                            </div>
                            <div class="text mobile-vision">
                                <h3>Increased risk of isolation, depression, and dementia.</h3>
                            </div>                          
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 statements-block mt-5">
                    <div class="statements-block-one text-center">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><img src="{{ asset('/resources/assets/images/reduced-workplace-efficiency.jpg')}}" alt="reduced-workplace-efficiency" style="border-radius: 35px;" class="img-fluid"></figure>
                            </div>
                            <div class="text">
                                <h3>Reduced workplace efficiency.</h3>
                            </div>                                
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="space-top"></div> 

<!--  -->
<section class="sec-balance-test">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-12">
                <div class="main-title main-title1">
                    <h2>Visit Audicco ENT and Hearing Center if you</h2>
                </div>
            </div>
        </div>
        <div class="row d-flex justify-content-center">            
            <div class="col-lg-5 col-md-6 col-12 mb-lg-0 mb-md-0 mb-5">
                <div class="cat-whychoose">
                    <img src="{{ asset('/resources/assets/images/audicco-speech-hearing-center.jpg')}}" class="img-fluid" alt="computerized-hearing-tests">
                </div>
            </div>
            <div class="col-lg-5 col-md-6 col-12">
                <div class="cat-whychoose">
                    <p><i class="fa fa-check" aria-hidden="true"></i>Frequently ask for repetitions.</p>
                    <p><i class="fa fa-check" aria-hidden="true"></i>Increase TV volume.</p>
                    <p><i class="fa fa-check" aria-hidden="true"></i>Struggle with conversations in noise or at a distance.</p>
                    <p><i class="fa fa-check" aria-hidden="true"></i>Miss words in group settings.</p>
                    <p><i class="fa fa-check" aria-hidden="true"></i>Experience ringing in the ear or vertigo.</p>
                    <h4 class="pt-2">Request Consultation</h4>
                    <a href="tel:+919322229159" class="button btn-3 mt-0 mb-5">Call us Now</a>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="space-top"></div>

<section class="">  
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-12">
                <div class="main-title main-title1">
                    <h2>Types of Hearing Aid</h2>    
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 col-12">
                <div class="service-item">
                    <img src="{{ asset('/resources/assets/images/icons/iic-icon.png')}}" alt="iic-icon" class="mb-lg-0 mb-md-0 mb-3">
                    <h4>Invisible In the Canal (IIC)</h4>
                    <p>Not visible, fit deep inside the ear canal.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12 mt-lg-0 mt-md-0 mt-5">
                <div class="service-item">
                    <img src="{{ asset('/resources/assets/images/icons/ric-icon.png')}}" alt="ric-icon" class="mb-lg-0 mb-md-0 mb-3">
                    <h4>Receiver-in-Canal (RIC)</h4>
                    <p>For sloping high frequency hearing loss</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12 mt-lg-0 mt-md-5 mt-5">
                <div class="service-item">
                    <img src="{{ asset('/resources/assets/images/icons/cic-icon.png')}}" alt="cic-icon" class="mb-lg-0 mb-md-0 mb-3">
                    <h4>Completely-In- the-Canal (CIC)</h4>
                    <p>Least visible hearing aid.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12 mt-lg-5 mt-md-5 mt-5">
                <div class="service-item">
                    <img src="{{ asset('/resources/assets/images/icons/bte-icon.png')}}" alt="bte-icon" class="mb-lg-0 mb-md-0 mb-3">
                    <h4>Behind-the-Ear (BTE)</h4>
                    <p>Easy to manipulate hearing aid.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12 mt-lg-5 mt-md-5 mt-5">
                <div class="service-item">
                    <img src="{{ asset('/resources/assets/images/icons/itc-icon.png')}}" alt="itc-icon" class="mb-lg-0 mb-md-0 mb-3">
                    <h4>In-the- Canal (ITC)</h4>
                    <p>Hearing fits into the ear canal.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12 mt-lg-5 mt-md-5 mt-5">
                <div class="service-item">
                    <img src="{{ asset('/resources/assets/images/icons/cros-icon.png')}}" alt="cros-icon" class="mb-lg-0 mb-md-0 mb-3">
                    <h4>CROS/BiCROS</h4>
                    <p>For patients with no hearing in one ear.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="space-top"></div>

<!--  -->
<section class="sec-balance-test sec-balance-test1">                
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-12">
                <div class="main-title main-title1">
                    <h2>Services Offered</h2>
                </div>
            </div>     
        </div>
        <div class="row d-flex justify-content-center">   
            <div class="col-lg-8 col-md-8 col-12">
                <div class="cat-condition">
                    <h3>Audiology Tests</h3>
                    <h4 class="mt-3">Newborn Hearing Screening:</h4>
                    <p><i class="fa fa-check" aria-hidden="true"></i>Oto Acoustic Emissions</p>
                    <h4 class="mt-4">Pediatric and Adult Hearing Evaluation:</h4>
                    <p><i class="fa fa-check" aria-hidden="true"></i>Behavioural audiometry, PT Audiometry, Impedance audiometry</p>
                    <p><i class="fa fa-check" aria-hidden="true"></i>BAHA / Cochlear implant evaluation</p>
                    <p><i class="fa fa-check" aria-hidden="true"></i>BERA / ASSR</p>
                </div>
            </div>
            <div class="col-lg-8 col-md-8 col-12 mt-5">
                <div class="cat-condition">
                    <h3>Hearing Solution</h3>
                    <p><i class="fa fa-check" aria-hidden="true"></i>Digital hearing aid from leading brands</p>
                    <p><i class="fa fa-check" aria-hidden="true"></i>After sales service and repair</p>
                    <p><i class="fa fa-check" aria-hidden="true"></i>Noise protectors</p>
                    <p><i class="fa fa-check" aria-hidden="true"></i>Tinnitus maskers</p>
                    <p><i class="fa fa-check" aria-hidden="true"></i>Medical treatment of hearing loss</p>
                    <p><i class="fa fa-check" aria-hidden="true"></i>Surgical treatment of hearing loss</p>
                </div>
            </div>
            <div class="col-lg-8 col-md-8 col-12 mt-5">
                <div class="cat-condition">
                    <h3>Speech Evaluation and Therapy</h3>
                    <p><i class="fa fa-check" aria-hidden="true"></i>Oral motor delays</p>
                    <p><i class="fa fa-check" aria-hidden="true"></i>Stuttering or fluency delays</p>
                    <p><i class="fa fa-check" aria-hidden="true"></i>Apraxia of Speech</p>
                    <p><i class="fa fa-check" aria-hidden="true"></i>Cleft lip or palate, Down's Syndrome</p>
                    <p><i class="fa fa-check" aria-hidden="true"></i>Dysphagia (swallowing disorders)</p>
                    <p><i class="fa fa-check" aria-hidden="true"></i>Traumatic brain injury or stroke or aphasia</p>
                    <p><i class="fa fa-check" aria-hidden="true"></i>Voice and resonance disorders</p>
                    <p><i class="fa fa-check" aria-hidden="true"></i>Autism</p>
                    <p><i class="fa fa-check" aria-hidden="true"></i>Learning disability</p>
                </div>
            </div>          
        </div> 
        <div class="row">           
            <div class="col-lg-4 col-md-4 col-12 mt-5">
                <div class="cat-condition text-center">
                    <h3>Vertigo Evaluation and Management</h3>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-12 mt-5">
                <div class="cat-condition text-center">
                    <h3>Video Otoscopy</h3>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-12 mt-5">
                <div class="cat-condition text-center">
                    <h3>Tinnitus Evaluation and Management</h3>
                </div>
            </div>
        </div>              
    </div>    
</section>

<div class="space-top"></div>

@stop       