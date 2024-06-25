@extends('layouts.default')            
@section('content') 

<!-- Start BreadCrumbs Design -->
<section class="page-title" style="background-image: url({{ asset('/resources/assets/images/breadcrumb_bg.jpg')}});">
    <div class="auto-container">
        <h2>Tinnitus Clinic, Vashi, Navi Mumbai</h2>
        <ul class="page-breadcrumb">
            <li><a href="{{route('home')}}">home</a></li>
            <li>Tinnitus Clinic, Vashi, Navi Mumbai</li>  
        </ul>
    </div>
</section>   
<!-- End BreadCrumbs Design -->    

<div class="space-top"></div>

<!--  -->
<section>
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-lg-11 col-sm-12 col-md-11 col-12">
                <div class="backborderbox">                                            
                    <div class="testimonial-box-back text-center">
                        <p><strong>Dr. Jhawar's Tinnitus and Hyperacusis Clinic at Neoalta Specialty Clinic Vashi, Navi Mumbai</strong> provide advanced services to find out the underlying cause, if any and best possible treatment of tinnitus, hyperacusis and hearing loss. Our team of experienced ENT Specialists and Qualified Audiologists, help find evidence based ways to manage Tinnitus by Tinnitus retraining Therapy, cognitive behavioural therapy (CBT) and Sound Therapy</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="space-top"></div>

<!--  -->
<div class="">
    <div class="container">                    
        <div class="row">            
            <div class="col-lg-12">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-9 col-md-9 col-12">
                        <div class="member">
                            <div class="row">
                                <div class="col-lg-3 col-md-3 col-12">  
                                    <div>
                                        <img src="{{ asset('/resources/assets/images/tinnitus-treatment-img.jpg')}}" alt="tinnitus-treatment-img" class="img-fluid">
                                    </div> 
                                </div>
                                <div class="col-lg-9 col-md-9 col-12 d-flex align-self-center">
                                    <div class="member-info member-info1 mt-lg-0 mt-md-0 mt-4">
                                        <h4>What is Tinnitus?</h4>
                                        <p>Tinnitus is the sensation of noise perceived in one or both ears or inside the head where the sound has no external source, and reported as ringing, buzzing, humming, clicking, hissing or other sounds.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="col-lg-9 col-md-9 col-12 mt-5">
                        <div class="member">
                            <div class="row">
                                <div class="col-lg-3 col-md-3 col-12">  
                                    <div>
                                        <img src="{{ asset('/resources/assets/images/hyperacusis-treatment-img.jpg')}}" alt="hyperacusis-treatment-img" class="img-fluid">
                                    </div> 
                                </div>
                                <div class="col-lg-9 col-md-9 col-12 d-flex align-self-center">
                                    <div class="member-info member-info1 mt-lg-0 mt-md-0 mt-4">
                                        <h4>What is Hyperacusis?</h4>
                                        <p>Hyperacusis is hypersensitivity to the routine sound like noise irritation in crowded area, utensil sound because of that person avoids such situation or become hyperirritable or anxious and isolates themselves.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
</div>

<div class="space-top"></div>

<!--  -->
<section class="sec-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-12">
                <div class="main-title main-title1">
                    <h2>What Causes Tinnitus?</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-4 col-12">
                <div class="folio_pricing_single favourite_pricing">
                    <div class="price_cost">
                        <img src="{{ asset('/resources/assets/images/icons/outer-ear-icon.png')}}" alt="outer-ear-icon" class="img-fluid">
                    </div>
                    <div class="price_title">
                        <h2>Disorders in the outer ear</h2>
                    </div>
                    <div class="pricing_details">
                        <ul>
                            <li><i class="fa fa-check" aria-hidden="true"></i>Ear wax</li>     
                            <li><i class="fa fa-check" aria-hidden="true"></i>A hair touching the eardrum</li>
                            <li><i class="fa fa-check" aria-hidden="true"></i>A foreign body or a perforated eardrum</li>                                
                        </ul>             
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <div class="folio_pricing_single favourite_pricing">
                    <div class="price_cost">
                    <img src="{{ asset('/resources/assets/images/icons/middle-ear-icon.png')}}" alt="middle-ear-icon" class="img-fluid">
                    </div>
                    <div class="price_title">
                        <h2>Disorders in the middle ear</h2>
                    </div>
                    <div class="pricing_details">
                        <ul>
                            <li><i class="fa fa-check" aria-hidden="true"></i>Eustachian tube dysfunction</li> 
                            <li><i class="fa fa-check" aria-hidden="true"></i>Middle ear fluid</li> 
                            <li><i class="fa fa-check" aria-hidden="true"></i>Ear infection, otosclerosis, allergies or benign tumors</li>                                
                        </ul>             
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <div class="folio_pricing_single favourite_pricing">
                    <div class="price_cost">
                        <img src="{{ asset('/resources/assets/images/icons/inner-ear-icon.png')}}" alt="inner-ear-icon" class="img-fluid">
                    </div>
                    <div class="price_title">
                        <h2>Disorders in the inner ear</h2>
                    </div>
                    <div class="pricing_details">
                        <ul>
                            <li><i class="fa fa-check" aria-hidden="true"></i>Hearing loss due to noise exposure</li> 
                            <li><i class="fa fa-check" aria-hidden="true"></i>Aging</li> 
                            <li><i class="fa fa-check" aria-hidden="true"></i>Ototoxic medication</li> 
                            <li><i class="fa fa-check" aria-hidden="true"></i>Inner ear infection or Meniere's disease</li>                               
                        </ul>             
                    </div>
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
<section class="sec-bg1">                
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-12">
                <div class="main-title main-title1">
                    <h2>Services We Offer</h2>
                    <h3 class="pb-3">Tinnitus Treatment Options at Neoalta Clinic, Vashi, Navi Mumbai</h3>                    
                </div>
            </div>
        </div>
        <div class="row cat-serv"> 
            <div class="col-md-3 d-flex align-self-center">
                <h3>Digital Hearing Aids for Tinnitus</h3>
            </div>
            <div class="col-md-5 offset-md-1 col-md-3 d-flex align-self-center">
                <p>We offer a selection of digital hearing aids from various manufacturers to suit your hearing test results, budget, and personal comfort. These aids amplify external sounds or the internal noise of hearing aids, which can help mask the symptoms of tinnitus.</p>
            </div>
            <div class="col-md-3">
                <img src="{{ asset('/resources/assets/images/neuro-assessment.jpg')}}" alt="neuro-assessment" class="img-fluid">
            </div>
        </div>   
        <div class="row cat-serv mt-5"> 
            <div class="col-md-3 d-flex align-self-center">
                <h3>Tinnitus Retraining Therapy (TRT) </h3>
            </div>
            <div class="col-md-5 offset-md-1 col-md-3 d-flex align-self-center">
                <p>TRT takes a holistic approach by combining sound therapy and counseling to help patients habituate to the noise associated with tinnitus. Through this therapy, patients learn techniques to ignore the undesirable noise, training their brain to filter it out effectively.</p>
            </div>
            <div class="col-md-3">
                <img src="{{ asset('/resources/assets/images/trt-tinnitus-retraining-therapy.jpg')}}" alt="trt-tinnitus-retraining-therapy" class="img-fluid">
            </div>
        </div> 
        <div class="row cat-serv mt-5"> 
            <div class="col-md-3 d-flex align-self-center">
                <h3>Music Therapy</h3>
            </div>
            <div class="col-md-5 offset-md-1 col-md-3 d-flex align-self-center">
                <p>Tailored music therapy involves merging the user's favourite music files with specific sound therapy files designed to target the individual's tinnitus frequency. This technique aims to reduce hyperactivity in the brain that contributes to tinnitus symptoms.</p>
            </div>
            <div class="col-md-3">
                <img src="{{ asset('/resources/assets/images/music-therapy.jpg')}}" alt="music-therapy" class="img-fluid">
            </div>
        </div>  
        <div class="row cat-serv mt-5"> 
            <div class="col-md-3 d-flex align-self-center">
                <h3>Neuromodulation</h3>
            </div>
            <div class="col-md-5 offset-md-1 col-md-3 d-flex align-self-center">
                <p>We also offer neuromodulation therapy for tinnitus. Utilizing techniques like transcranial magnetic stimulation (TMS) or transcutaneous electrical nerve stimulation (TENS), this advanced treatment targets specific brain areas associated with tinnitus perception, aiming to disrupt abnormal neural activity and alleviate symptoms.</p>
            </div>
            <div class="col-md-3">
                <img src="{{ asset('/resources/assets/images/neuromodulation.jpg')}}" alt="neuromodulation" class="img-fluid">
            </div>
        </div>  
        <div class="row cat-serv mt-5"> 
            <div class="col-md-3 d-flex align-self-center">
                <h3>Yoga</h3>
            </div>
            <div class="col-md-5 offset-md-1 col-md-3 d-flex align-self-center">
                <p>Incorporating Pranayama, an essential aspect of Yoga, can help reduce anxiety levels in patients with tinnitus. Yoga offers holistic benefits for both physical and mental well-being, which can complement other treatment modalities.</p>
            </div>
            <div class="col-md-3">
                <img src="{{ asset('/resources/assets/images/yoga.jpg')}}" alt="yoga" class="img-fluid">
            </div>
        </div>   
        <div class="row cat-serv mt-5"> 
            <div class="col-md-3 d-flex align-self-center">
                <h3>Cognitive Behavioral Therapy (CBT)</h3>
            </div>
            <div class="col-md-5 offset-md-1 col-md-3 d-flex align-self-center">
                <p>For patients experiencing severe distress, depression, or anxiety due to tinnitus, CBT can be beneficial. This therapy helps patients develop coping strategies and addresses associated psychological challenges, promoting better management of tinnitus symptoms.</p>
            </div>
            <div class="col-md-3">
                <img src="{{ asset('/resources/assets/images/cognitive-behavioral-therapy.jpg')}}" alt="cognitive-behavioral-therapy" class="img-fluid">
            </div>
        </div>               
    </div>  
    <div class="container mt-5">
        <div class="row d-flex justify-content-center">
            <div class="col-lg-9 col-md-9 col-12 cat-book-apt text-center">
                <p>At Neoalta Clinic in Vashi, Navi Mumbai, we understand the challenges posed by tinnitus and offer personalized treatment plans tailored to each individual's needs. Our experts collaborate closely with you to effectively manage tinnitus symptoms, addressing the root cause through targeted medical interventions.</p>
                <a href="tel:+919322229159" class="button btn-3 mb-5 mt-5">Request Consultation Now</a>
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
                    <h2 class="mb-5">Four Steps to Tinnitus Treatment</h2>
                </div>
            </div>
        </div>
        <div class="row listar-feature-items">    
            <div class="col-lg-3 col-sm-6 col-md-4 listar-feature-item-wrapper listar-height-changed" data-aos="fade-zoom-in" data-aos-group="features">
                <div class="listar-feature-item listar-feature-has-link">
                    <a href="#" target="_blank"></a>
                    <div class="listar-feature-item-inner">
                        <div class="listar-feature-right-border"></div>
                        <div class="listar-feature-block-content-wrapper">
                        <div class="listar-feature-icon-wrapper">
                        <div class="listar-feature-icon-inner">
                            <div>
                                <img alt="" class="listar-image-icon" src="{{ asset('/resources/assets/images/icons/arrow-icon.png')}}" class="img-fluid">
                            </div>
                        </div>
                        </div>
                        <div class="listar-feature-content-wrapper" style="padding-top: 0px;">
                            <div class="listar-feature-item-title listar-feature-counter-added">
                                <span><span>01</span>
                                Book Appointment </span>
                            </div>
                            <div class="listar-feature-item-excerpt">
                            Initiate the process by scheduling an appointment at the Tinnitus Clinic.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-md-4 listar-feature-item-wrapper listar-height-changed" data-aos="fade-zoom-in" data-aos-group="features">
                <div class="listar-feature-item listar-feature-has-link">
                    <a href="#" target="_blank"></a>
                    <div class="listar-feature-item-inner">
                        <div class="listar-feature-right-border"></div>
                        <div class="listar-feature-block-content-wrapper">
                        <div class="listar-feature-icon-wrapper">
                        <div class="listar-feature-icon-inner">
                            <div>
                            <img alt="" class="listar-image-icon" src="{{ asset('/resources/assets/images/icons/arrow-icon.png')}}" class="img-fluid">
                            </div>
                        </div>
                        </div>
                        <div class="listar-feature-content-wrapper" style="padding-top: 0px;">
                        <div class="listar-feature-item-title listar-feature-counter-added">
                            <span><span>02</span>
                            ENT Clearance</span>
                        </div>
                        <div class="listar-feature-item-excerpt">
                            Otolaryngologists conduct a thorough assessment to identify underlying causes that may be treatable through medication or surgery.</div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-md-4 listar-feature-item-wrapper listar-height-changed" data-aos="fade-zoom-in" data-aos-group="features">
                <div class="listar-feature-item listar-feature-has-link">
                    <a href="#" target="_blank"></a>
                    <div class="listar-feature-item-inner">
                        <div class="listar-feature-right-border"></div>
                        <div class="listar-feature-block-content-wrapper">
                        <div class="listar-feature-icon-wrapper">
                        <div class="listar-feature-icon-inner">
                            <div>
                            <img alt="" class="listar-image-icon" src="{{ asset('/resources/assets/images/icons/arrow-icon.png')}}" class="img-fluid">
                            </div>
                        </div>
                        </div>
                        <div class="listar-feature-content-wrapper" style="padding-top: 0px;">
                        <div class="listar-feature-item-title listar-feature-counter-added">
                            <span><span>03</span>
                            Audiological Evaluation</span>
                        </div>
                        <div class="listar-feature-item-excerpt">
                        Audiologists perform diagnostic tests, including Pure-tone Audiometry, Speech Audiometry, OAE, BERA, and tinnitus pitch and loudness matching.</div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-md-4 listar-feature-item-wrapper listar-height-changed" data-aos="fade-zoom-in" data-aos-group="features">
                <div class="listar-feature-item listar-feature-has-link">
                    <a href="#" target="_blank"></a>
                    <div class="listar-feature-item-inner">
                        <div class="listar-feature-right-border"></div>
                        <div class="listar-feature-block-content-wrapper">
                        <div class="listar-feature-icon-wrapper">
                        <div class="listar-feature-icon-inner">
                            <div>
                            <img alt="" class="listar-image-icon" src="{{ asset('/resources/assets/images/icons/arrow-icon.png')}}" class="img-fluid">
                            </div>
                        </div>
                        </div>
                        <div class="listar-feature-content-wrapper" style="padding-top: 0px;">
                        <div class="listar-feature-item-title listar-feature-counter-added">
                            <span><span>04</span>
                            Report and Counseling</span>
                        </div>
                        <div class="listar-feature-item-excerpt">
                        Patients receive a comprehensive report, along with counseling about tinnitus and a personalized treatment plan.</div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>   
</section>
<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-12">
                <img src="{{ asset('/resources/assets/images/four-steps-for-tinnitus.png')}}" alt="" class="img-fluid">
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row d-flex justify-content-start">
            <div class="col-lg-10 col-md-9 col-12 cat-book-apt pb-4 offset-2">
                <i class="fa fa-long-arrow-right" aria-hidden="true"></i><p>A lot of people buy a sound machine or app and use it to ‘mask’ tinnitus.</p>
                <i class="fa fa-long-arrow-right" aria-hidden="true"></i><p>Masking is not an effective long-term treatment of tinnitus.</p>
                <i class="fa fa-long-arrow-right" aria-hidden="true"></i><p>Sound enriched environment  and counselling is effective to make tinnitus stop affecting a person’s life and emotional health.</p>
                <i class="fa fa-long-arrow-right" aria-hidden="true"></i><p>In most cases tinnitus is not harmful but patient should be investigated properly to find any treatable reason.</p>
            </div>
        </div>
        <!-- <div class="row d-flex justify-content-center">
            <div class="col-lg-9 col-md-9 col-12 cat-book-apt text-center pb-4">
                <p><a href="tel:+919322229159">Schedule an appointment at the Tinnitus Clinic for an evaluation by Otolaryngologists and Audiologists, leading to a personalized treatment plan, comprehensive report, and counseling.</a></p>
            </div>
        </div>
        <div class="row d-flex justify-content-center">
            <div class="col-lg-9 col-md-9 col-12 cat-book-apt text-center">
                <a href="tel:+919322229159" class="button btn-3 mb-5">Book an Appointment Now</a>
            </div>
        </div> -->
    </div> 
</section>

<section class="cat-appointment">
    <div class="container-fluid">
        <div class="row d-flex justify-content-center text-center">
            <div class="col-lg-9 col-md-9 col-12"> 
                <h2 class="pb-3">Schedule an appointment at the Tinnitus Clinic</h2>
                <h3>For an evaluation by Otolaryngologists and Audiologists, leading to a personalized treatment plan, comprehensive report, and counseling.</h3>
                <a href="tel:+919322229159">Book Appointment</a>
            </div>
        </div>
    </div>
</section>
@stop       