@extends('layouts.default')            
@section('content') 

<!-- Start BreadCrumbs Design -->
<section class="page-title" style="background-image: url({{ asset('/resources/assets/images/breadcrumb_bg.jpg')}});">
    <div class="auto-container">
        <h2>Endo DCR Surgery</h2>
        <ul class="page-breadcrumb">
            <li><a href="{{route('home')}}">home</a></li>
            <li>Endo DCR Surgery</li>        
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
                    @include('includes.nose-surgery-sidebar')  
                </div>
            </div>        
            <div class="col-lg-8 col-md-8 col-12">
                <div class="cat-services">
                    <h1>Endo DCR Surgery in Navi Mumbai</h1>
                    <div class="space-top"></div>
                    <img src="{{ asset('/resources/assets/images/services/endo-dcr.jpg')}}" alt="endo-dcr" class="img-fluid">
                    <div class="space-top"></div>
                    <h2>What is Endoscopic Dacryocystorhinostomy?</h2>
                    <div class="single-item-service">
                        <p>Endoscopic Dacryocystorhinostomy (Endo DCR) is a surgical procedure performed to treat nasolacrimal duct obstruction, a condition that results in the blockage of the tear duct.</p>
                    </div>
                    <div class="space-top"></div>
                    <h2>Procedure Details</h2>
                    <div class="single-item-service">
                        <i class="fa fa-check" aria-hidden="true"></i><p class="para">Endo DCR is typically performed using an endoscope, a thin, flexible tube with a camera and light at its end. This allows the surgeon to visualize the nasal and lacrimal (tear duct) passages without the need for external incisions.</p>
                        <i class="fa fa-check" aria-hidden="true"></i><p class="para">The surgeon creates a small opening in the nasal cavity area where tears collect before draining into the nasal passages.</p>
                        <i class="fa fa-check" aria-hidden="true"></i><p class="para">Any obstructions or scar tissue blocking the nasolacrimal duct are removed to establish a clear passage for tears.</p>
                    </div>
                    <div class="space-top"></div>
                    <h2>Benefits</h2>
                    <div class="single-item-service">
                        <p>Endo DCR aims to restore the normal flow of tears, relieving symptoms such as excessive tearing, recurrent eye infections, and discomfort. The endoscopic approach offers the advantage of minimal scarring and a potentially faster recovery compared to traditional open procedures.</p>
                    </div>
                    <div class="space-top"></div>
                    <h2>Risks</h2>
                    <div class="single-item-service">
                        <p>Potential risks of Endo DCR include bleeding, infection, scarring, and failure to achieve a persistent opening. The overall risk profile depends on factors such as the patient's health and the complexity of the case.</p>
                    </div>
                    <div class="space-top"></div>
                    <h2>Recovery</h2>
                    <div class="single-item-service">
                        <p>Recovery after Endo DCR is generally quicker than with traditional open procedures. Patients may experience some nasal congestion, mild discomfort, or tearing in the days following the surgery. Most people can resume normal activities within a week, although strenuous activities may be limited for a short period.</p>
                    </div>
                    <div class="space-top"></div>
                    <h2>When to see an ENT Specialist</h2>
                    <div class="single-item-service">
                        <p>Patients should contact their doctor if they experience severe pain, persistent bleeding, signs of infection, or worsening symptoms after Endo DCR. Regular follow-up appointments help ensure the ongoing success of the procedure.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>   
<!-- End Service Inner Section -->
@stop       