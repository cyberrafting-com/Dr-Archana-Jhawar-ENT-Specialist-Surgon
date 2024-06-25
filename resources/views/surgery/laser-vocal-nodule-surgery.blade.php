@extends('layouts.default')            
@section('content') 

<!-- Start BreadCrumbs Design -->
<section class="page-title" style="background-image: url({{ asset('/resources/assets/images/breadcrumb_bg.jpg')}});">
    <div class="auto-container">
        <h2>LASER Vocal Nodule Surgery</h2>
        <ul class="page-breadcrumb">
            <li><a href="{{route('home')}}">home</a></li>
            <li>LASER Vocal Nodule Surgery</li>
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
                    @include('includes.throat-surgeries-sidebar')  
                </div>
            </div>        
            <div class="col-lg-8 col-md-8 col-12">
                <div class="cat-services">
                    <h1>LASER Vocal Nodule Surgery in Navi Mumbai</h1>
                    <div class="space-top"></div>
                    <img src="{{ asset('/resources/assets/images/services/laser-vocal-nodule-surgery.jpg')}}" alt="laser-vocal-nodule-surgery" class="img-fluid">
                    <div class="space-top"></div>
                    <h2>What is LASER Vocal Nodule Surgery?</h2>
                    <div class="single-item-service">
                        <p>LASER vocal nodule surgery is a procedure that utilizes laser technology to treat vocal cord nodules. Vocal cord nodules are noncancerous growths that can develop on the vocal cords, leading to hoarseness, voice strain, and other voice-related issues.</p>
                    </div>
                    <div class="space-top"></div>
                    <h2>Procedure Details</h2>
                    <div class="single-item-service">
                        <i class="fa fa-check" aria-hidden="true"></i><p class="para">LASER vocal nodule surgery is typically performed under local anesthesia or general anesthesia, depending on the extent and location of the nodules.</p>
                        <i class="fa fa-check" aria-hidden="true"></i><p class="para">During the procedure, a laser beam is used to vaporize or ablate the vocal cord nodules precisely.</p>
                        <i class="fa fa-check" aria-hidden="true"></i><p class="para">The LASER is directed at the vocal cord nodules, removing or shrinking them.</p>
                    </div>
                    <div class="space-top"></div>
                    <h2>Benefits</h2>
                    <div class="single-item-service">
                        <p>LASER vocal nodule surgery offers several benefits, including precise targeting of nodules, reduced bleeding, and potentially faster recovery compared to traditional surgery. The procedure aims to restore normal vocal cord function and improve voice quality.</p>
                    </div>
                    <div class="space-top"></div>
                    <h2>Risks</h2>
                    <div class="single-item-service">
                        <p>Potential risks include temporary or, in rare cases, permanent changes to voice quality, bleeding, infection, and scarring.</p>
                    </div>
                    <div class="space-top"></div>
                    <h2>Recovery</h2>
                    <div class="single-item-service">
                        <p>Voice rest and proper vocal hygiene are typically recommended during the initial recovery period. Complete recovery may take several weeks, and patients may be advised to follow specific voice care instructions to optimize healing. Regular follow-up appointments are crucial to monitor recovery and address any concerns.</p>
                    </div>
                    <div class="space-top"></div>
                    <h2>When to see an ENT Specialist</h2>
                    <div class="single-item-service">
                        <p>Patients should contact their doctor if they experience severe pain, persistent bleeding, signs of infection, significant changes in voice quality, or worsening symptoms after LASER vocal nodule surgery. Regular follow-up appointments help ensure the ongoing success of the procedure.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>   
<!-- End Service Inner Section -->
@stop       