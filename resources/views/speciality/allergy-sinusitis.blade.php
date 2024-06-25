@extends('layouts.default')            
@section('content') 

<!-- Start BreadCrumbs Design -->
<section class="page-title" style="background-image: url({{ asset('/resources/assets/images/breadcrumb_bg.jpg')}});">
    <div class="auto-container">
        <h2>Allergy and Sinusitis </h2>
        <ul class="page-breadcrumb">
            <li><a href="{{route('home')}}">home</a></li>
            <li>Allergy and Sinusitis </li>  
        </ul>
    </div>
</section>   
<!-- End BreadCrumbs Design -->    

<!-- Main heading design -->
<section class="head-design">
    <div class="container">   
        <div class="row text-center">
            <div class="col-lg-12 col-md-12 col-12">
                <h1>Welcome to Neoalta Allergy and Sinusitis Clinic, Vashi</h1>
            </div>
        </div>
    </div>
</section> 

<div class="space-top"></div>

<section>
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-lg-9 col-md-9 col-12">
                <div class="main-title main-title1">
                    <p>At Neoalta Allergy and Sinusitis Clinic, in Vashi, Navi Mumbai, we specialize in providing comprehensive care for allergic conditions and sinusitis. Led by Dr. Archana Jhawar, an esteemed ENT specialist, our clinic offers advanced diagnostic and treatment options to effectively manage allergies and sinus issues.</p>
                </div>
            </div>
        </div>
        <div class="row d-flex justify-content-center">
            <div class="col-lg-9 col-md-9 col-12">
                <div class="cat-allergy">
                    <h5>01</h5>
                    <h4>Nasal Endoscopy:</h4>
                    <p>Our clinic is equipped with state-of-the-art endoscopic technology to accurately diagnose structural issues within the nasal and sinus passages.</p>
                </div>
                <div class="cat-allergy">
                    <h5>02</h5>
                    <h4>Allergy Testing:</h4>
                    <p>We offer skin prick tests and blood tests to identify specific allergens triggering your symptoms, enabling us to create personalized treatment plans.</p>
                </div>
                <div class="cat-allergy">
                    <h5>03</h5>
                    <h4>Medical Management:</h4>
                    <p>Our team provides expert medical management for allergies and sinusitis, utilizing the latest evidence-based treatments to alleviate symptoms and improve quality of life.</p>
                </div>
                <div class="cat-allergy">
                    <h5>04</h5>
                    <h4>Endoscopic Surgery:</h4>
                    <p>Dr. Archana Jhawar performs advanced endoscopic nose and sinus surgeries at renowned hospitals, including Kokilaben Dhirubhai Ambani Hospital and KK Hospital, Navi Mumbai.</p>
                </div>
                <div class="cat-allergy">
                    <h5>05</h5>
                    <h4>Immunotherapy:</h4>
                    <p>We offer personalized immunotherapy, including allergy shots and drops, to help your body build tolerance to allergens and reduce sensitivity over time.</p>
                </div>
                <div class="cat-allergy">
                    <h5>06</h5>
                    <h4>Patient Education:</h4>
                    <p>Education is a cornerstone of our approach. We empower patients with knowledge about allergy triggers and sinusitis prevention strategies, enabling them to take control of their health.</p>
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

<section class="sec-balance-test">                
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-lg-9 col-md-9 col-12">
                <div class="main-title main-title1">
                    <h2>Understanding Allergies and Sinusitis</h2>
                    <img src="{{ asset('/resources/assets/images/allergies-and-sinusitis.jpg')}}" alt="allergies-and-sinusitis" class="img-fluid pt-5">
                    <p class="pt-4">Allergies occur when the immune system reacts excessively to harmless substances, leading to symptoms such as sneezing, itching, and congestion. Sinusitis involves inflammation of the sinus cavities, causing facial pain, headaches, and nasal congestion. Allergies can often exacerbate sinusitis, highlighting the interconnected nature of these conditions.</p>
                </div>
            </div>
        </div>            
    </div>    
</section>

<div class="space-top"></div>

<section>
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-lg-9 col-md-9 col-12">
                <div class="main-title main-title1">
                    <h2>Allergy Testing</h2>
                    <p>Our clinic conducts thorough allergy testing to identify triggers accurately. Skin prick tests and blood tests are both available, with skin tests offering quick and reliable results.</p>
                </div>
            </div>
        </div>
        <div class="row d-flex justify-content-center">
            <div class="col-lg-6 col-md-6 col-12">
                <div class="cat-balance-test">
                    <h3>Skin Prick Tests</h3>
                    <p>This method involves applying potential allergens to the skin's surface to observe reactions.</p>
                    <h3>Blood Allergy Tests</h3>
                    <p>A simple blood draw allows us to analyze specific antibodies related to allergies.</p>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-12">
            <img src="{{ asset('/resources/assets/images/allergy-testing-treatment.jpg')}}" class="img-fluid" alt="allergy-testing-treatment">
            </div>
        </div>
        <div class="space-top"></div>
        <div class="row d-flex justify-content-center">
            <div class="col-lg-9 col-md-9 col-12">
                <div class="main-title main-title1">
                    <h2>Immunotherapy: Allergy Shots and Drops</h2>
                    <p>Immunotherapy, including allergy shots and drops, offers long-term relief by desensitizing the body to allergens.</p>
                </div>
            </div>
        </div>
        <div class="row d-flex justify-content-center">          
            <div class="col-lg-6 col-md-6 col-12 d-flex align-self-center">
                <img src="{{ asset('/resources/assets/images/immunotherapy.jpg')}}" class="img-fluid" alt="immunotherapy">
            </div>
            <div class="col-lg-6 col-md-6 col-12">
                <div class="cat-balance-test">
                    <h3>Allergy Shots</h3>
                    <p>Administered over several months, allergy shots gradually reduce sensitivity to allergens, leading to symptom improvement or resolution.</p>
                    <h3>Allergy Drops</h3>
                    <p>Sublingual immunotherapy involves placing drops under the tongue to achieve similar desensitization effects.</p>
                    <h3>Benefits of Immunotherapy</h3>
                    <p>Immunotherapy can significantly enhance your quality of life by reducing or eliminating allergy symptoms, allowing you to enjoy outdoor activities and pursue your passions without limitations.</p>
                    <p>At Neoalta Allergy and Sinusitis Clinic, we are committed to providing compassionate care and effective solutions to help you breathe easier and live life to the fullest. Schedule a consultation today and take the first step towards relief from allergies and sinusitis.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="space-top"></div>

@stop       