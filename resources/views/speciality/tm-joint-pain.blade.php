@extends('layouts.default')            
@section('content') 

<!-- Start BreadCrumbs Design -->
<section class="page-title" style="background-image: url({{ asset('/resources/assets/images/breadcrumb_bg.jpg')}});">
    <div class="auto-container">
        <h2>TM Joint Pain & Migraine Management</h2>
        <ul class="page-breadcrumb">
            <li><a href="{{route('home')}}">home</a></li>
            <li>TM Joint Pain & Migraine Management</li>  
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
                    <h1>TM Joint Pain & Migraine Management</h1>
                    <div class="space-top"></div>
                    <img src="{{ asset('/resources/assets/images/services/migrane-management.jpg')}}" alt="migrane-management" class="img-fluid">
                    <div class="space-top"></div>
                    <div class="single-item-service">
                        <p>Temporomandibular Joint (TMJ) pain and migraines are two distressing conditions that often go hand in hand, affecting millions of people worldwide.</p>
                        <p>Our clinic specializes in recognizing the interconnected nature of TMJ pain and migraines, offering a multidisciplinary approach to diagnosing and treating.</p>
                        <p>We use advanced imaging techniques, such as MRI and CT scans, to understand the underlying issues. Based on the assessment, personalized treatment plans are devised by our specialists.</p>
                        <p>Our clinic uses the most advanced technologies and treatment strategies to help you with this condition. We also provide counseling sessions for the patients. Empowering patients with knowledge about their conditions is an integral part of these clinics.</p>
                    </div>
                    <div class="space-top"></div>
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