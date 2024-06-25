@extends('layouts.default')            
@section('content') 

<!-- Start BreadCrumbs Design -->
<section class="page-title" style="background-image: url({{ asset('/resources/assets/images/breadcrumb_bg.jpg')}});">
    <div class="auto-container">
        <h2>Pediatric ENT</h2>
        <ul class="page-breadcrumb">
            <li><a href="{{route('home')}}">home</a></li>
            <li>Pediatric ENT</li>  
        </ul>
    </div>
</section>   
<!-- End BreadCrumbs Design -->    

<!-- Start Service Inner Section -->
<section class="sec-services mb-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-12">
                <div class="at-sidebar">  
                    @include('includes.speciality-sidebar')  
                </div>
            </div>
            <div class="col-lg-8 col-md-8 col-12">
                <div class="cat-services">
                    <h1>Pediatric ENT In Navi Mumbai</h1>
                    <div class="space-top"></div>
                    <img src="{{ asset('/resources/assets/images/services/pediatric-ent.jpg')}}" alt="pediatric-ent" class="img-fluid">
                    <div class="space-top"></div>
                    <div class="single-item-service">
                        <p>Our Pediatric Ear, Nose, and Throat (ENT) clinic, is crucial in ensuring the well-being of children facing ear, nose, and throat-related issues.</p>
                    </div>
                    <div class="space-top"></div>
                    <h2>We offer the following services</h2>
                    <div class="single-item-service">
                        <h3>Ear Infections:</h3>
                        <i class="fa fa-check" aria-hidden="true"></i><p class="para">Pediatric ENT clinics diagnose and treat ear infections, a common issue among children.</p>
                        <h3>Hearing Loss:</h3>
                        <i class="fa fa-check" aria-hidden="true"></i><p class="para">Audiologists in Pediatric ENT clinics assess and address hearing issues in children. Early detection and intervention are crucial for preventing long-term consequences on a child's speech and language development.</p>
                        <h3>Speech and Language Disorders:</h3>
                        <i class="fa fa-check" aria-hidden="true"></i><p class="para">We treat and address speech and language disorders caused by conditions like cleft palate or hearing impairment, ensuring children can communicate effectively.</p>
                        <h3>Tonsil and Adenoid Issues:</h3>
                        <i class="fa fa-check" aria-hidden="true"></i><p class="para">Problems with the tonsils and adenoids can affect breathing, sleep, and overall health. Our pediatric ENT clinic offers surgical interventions, such as tonsillectomy and adenoidectomy.</p>
                        <h3>Allergies and Sinus Issues:</h3>
                        <i class="fa fa-check" aria-hidden="true"></i><p class="para">Allergies and sinus problems are common in children. Our pediatric ENT specialists help diagnose and manage these conditions, promoting respiratory health.</p>
                        <p>Our ENT Pediatric clinic is designed to create a welcoming and child-friendly atmosphere, reducing anxiety and fear often associated with medical visits. Through specialized expertise, child-friendly environments, and a commitment to preventive care, our clinic contributes significantly to ensuring that children grow up healthy and thriving.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Service Inner Section -->

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

@stop       