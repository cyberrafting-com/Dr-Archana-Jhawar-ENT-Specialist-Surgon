@extends('layouts.default')            
@section('content') 

<!-- Start BreadCrumbs Design -->
<section class="page-title" style="background-image: url({{ asset('/resources/assets/images/breadcrumb_bg.jpg')}});">
    <div class="auto-container">
        <h2>Nasal Polyp Surgery</h2>
        <ul class="page-breadcrumb">
            <li><a href="{{route('home')}}">home</a></li>
            <li>Nasal Polyp Surgery</li>
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
                    <h1>Nasal Polyp Surgery in Navi Mumbai</h1>
                    <div class="space-top"></div>
                    <img src="{{ asset('/resources/assets/images/services/nasal-polyp.jpg')}}" alt="nasal-polyp" class="img-fluid">
                    <div class="space-top"></div>
                    <h2>What is Nasal Polyp Surgery?</h2>
                    <div class="single-item-service">
                        <p>Nasal polyp surgery, also called polypectomy, is a surgical procedure performed to remove nasal polyps—soft, noncancerous growths that can develop on the lining of the nasal passages or sinuses. These growths often result in symptoms such as nasal congestion, difficulty breathing, loss of smell, and recurrent sinus infections.</p>
                    </div>
                    <div class="space-top"></div>
                    <h2>Procedure Details</h2>
                    <div class="single-item-service">
                        <i class="fa fa-check" aria-hidden="true"></i><p class="para">Nasal polyp surgery is typically performed under general anesthesia.</p>
                        <i class="fa fa-check" aria-hidden="true"></i><p class="para">Most nasal polyp surgeries are conducted endoscopically. The surgeon uses a thin, flexible tube with a light and camera (endoscope) to visualize and access the nasal passages.</p>
                        <i class="fa fa-check" aria-hidden="true"></i><p class="para">The surgeon uses specialized instruments to carefully remove the nasal polyps. The goal is to clear the nasal passages and sinuses to improve airflow and alleviate symptoms.</p>
                    </div>
                    <div class="space-top"></div>
                    <h2>Benefits</h2>
                    <div class="single-item-service">
                        <p>Nasal polyp surgery aims to relieve symptoms associated with nasal polyps, such as congestion, difficulty breathing, and sinus infections. By removing the polyps, the surgery can improve nasal airflow and restore the sense of smell.</p>
                    </div>
                    <div class="space-top"></div>
                    <h2>Risks</h2>
                    <div class="single-item-service">
                        <p>Potential risks of nasal polyp surgery include bleeding, infection, recurrence of polyps, and changes in smell or taste</p>
                    </div>
                    <div class="space-top"></div>
                    <h2>Recovery</h2>
                    <div class="single-item-service">
                        <p>Recovery after nasal polyp surgery varies, but most individuals experience an improvement in symptoms within a few weeks. Nasal congestion and discomfort are common in the immediate postoperative period.</p>
                    </div>
                    <div class="space-top"></div>
                    <h2>When to see an ENT Specialist</h2>
                    <div class="single-item-service">
                        <p>Patients should contact their doctor if they experience severe pain, persistent bleeding, signs of infection, or worsening symptoms after nasal polyp surgery. Regular follow-up appointments help ensure the ongoing success of the procedure.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>   
<!-- End Service Inner Section -->
@stop       