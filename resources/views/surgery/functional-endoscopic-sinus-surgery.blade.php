@extends('layouts.default')            
@section('content') 

<!-- Start BreadCrumbs Design -->
<section class="page-title" style="background-image: url({{ asset('/resources/assets/images/breadcrumb_bg.jpg')}});">
    <div class="auto-container">
        <h2>FESS - Functional Endoscopic Sinus Surgery</h2>
        <ul class="page-breadcrumb">
            <li><a href="{{route('home')}}">home</a></li>
            <li>FESS - Functional Endoscopic Sinus Surgery</li>
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
                    <h1>Functional Endoscopic Sinus Surgery in Navi Mumbai</h1>
                    <div class="space-top"></div>
                    <img src="{{ asset('/resources/assets/images/services/functional-endoscopic-sinus-surgery.jpg')}}" alt="functional-endoscopic-sinus-surgery" class="img-fluid">
                    <div class="space-top"></div>
                    <h2>What is Functional Endoscopic Sinus Surgery?</h2>
                    <div class="single-item-service">
                        <p>Functional Endoscopic Sinus Surgery (FESS) is a surgical procedure to treat chronic sinusitis and other conditions affecting the nasal and sinus passages. This minimally invasive technique uses a thin, flexible endoscope to access and remove obstructions, improve drainage, and promote better airflow within the sinuses.</p>
                    </div>
                    <div class="space-top"></div>
                    <div class="single-item-service">
                        <h3>Procedure Details</h3>
                        <i class="fa fa-check" aria-hidden="true"></i><p class="para">FESS is performed using an endoscope, a small tube with a light and camera at its tip. This enables the surgeon to visualize the sinus passages without the need for external incisions.</p>
                        <i class="fa fa-check" aria-hidden="true"></i><p class="para">Through the nasal passages, the surgeon navigates the endoscope to access the sinus openings.</p>
                        <i class="fa fa-check" aria-hidden="true"></i><p class="para">Various techniques, such as cutting instruments or lasers, may be used to remove polyps, inflamed tissue, or other obstructions blocking the sinus passages</p>
                        <i class="fa fa-check" aria-hidden="true"></i><p class="para">The goal is to improve the natural drainage of the sinuses, reducing inflammation and preventing recurrent infections.</p>
                    </div>
                    <div class="space-top"></div>
                    <h2>Benefits</h2>
                    <div class="single-item-service">
                        <p>FESS aims to alleviate symptoms of chronic sinusitis, including congestion, facial pain, and recurrent infections. By addressing structural issues and improving sinus drainage, FESS can lead to long-term relief for many patients.</p>
                    </div>
                    <div class="space-top"></div>
                    <h2>Risks</h2>
                    <div class="single-item-service">
                        <p>While FESS is generally considered safe, there are potential risks, including bleeding, infection, changes in sense of smell, or injury to nearby structures. The severity of risks depends on factors such as the patient's overall health and the complexity of the procedure.</p>
                    </div>
                    <div class="space-top"></div>
                    <h2>Recovery</h2>
                    <div class="single-item-service">
                        <p>Recovery after FESS is typically faster than traditional sinus surgeries. Patients may experience some congestion, mild discomfort, or nasal drainage in the days following the procedure. Most people can return to normal activities within a week, although strenuous activities may be limited for a slightly longer period.</p>
                    </div>
                    <div class="space-top"></div>
                    <h2>When to see an ENT Specialist</h2>
                    <div class="single-item-service">
                        <p>Patients should immediately consult their doctor if they experience severe pain, persistent bleeding, signs of infection, or worsening symptoms after FESS. Regular follow-up appointments help ensure the ongoing success of the procedure.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>   
<!-- End Service Inner Section -->
@stop       