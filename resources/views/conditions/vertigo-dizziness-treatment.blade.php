@extends('layouts.default')            
@section('content') 

<!-- Start BreadCrumbs Design -->
<section class="page-title" style="background-image: url({{ asset('/resources/assets/images/breadcrumb_bg.jpg')}});">
    <div class="auto-container">
        <h2>Vertigo and Dizziness Management</h2>
        <ul class="page-breadcrumb">
            <li><a href="{{route('home')}}">home</a></li>
            <li>Vertigo and Dizziness Management</li>
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
                    @include('includes.ear-conditions-sidebar')  
                </div>
            </div>        
            <div class="col-lg-8 col-md-8 col-12">
                <div class="cat-services">
                    <h1>Vertigo and Dizziness Management in Navi Mumbai</h1>
                    <div class="space-top"></div>
                    <img src="{{ asset('/resources/assets/images/services/vertigo-and-dizziness-management.jpg')}}" alt="vertigo-and-dizziness-management">
                    <div class="space-top"></div>   
                    <h2>What is Vertigo and Dizziness?</h2>
                    <div class="single-item-service">
                        <p>Vertigo is a kind of dizziness characterized by a sensation of spinning or whirling, often accompanied by a feeling of imbalance or unsteadiness. Dizziness is a term used to describe many sensations that can include lightheadedness, unsteadiness, and a feeling of imbalance. While these symptoms can be unsettling, understanding their causes, risk factors, and appropriate management strategies is crucial for maintaining overall well-being.</p>
                    </div>
                    <div class="space-top"></div>
                    <div class="single-item-service">
                        <h3>Causes and Risk Factors:</h3>
                        <i class="fa fa-check" aria-hidden="true"></i><p class="para">Inner ear disorders can lead to vertigo or dizziness.</p>
                        <i class="fa fa-check" aria-hidden="true"></i><p class="para">Individuals who suffer from migraines may experience vertigo as a symptom.</p>
                        <i class="fa fa-check" aria-hidden="true"></i><p class="para">Medications those that affect the central nervous system, can cause dizziness as a side effect.</p>
                        <i class="fa fa-check" aria-hidden="true"></i><p class="para">Dehydration.</p>
                        <i class="fa fa-check" aria-hidden="true"></i><p class="para">Low Blood Sugar.</p>
                    </div>
                    <div class="space-top"></div>
                    <div class="single-item-service">
                        <h3>Symptoms:</h3>
                        <p>Vertigo and dizziness manifest in various ways, including:</p>
                        <i class="fa fa-check" aria-hidden="true"></i><p class="para">Spinning Sensation.</p>
                        <i class="fa fa-check" aria-hidden="true"></i><p class="para">Unsteadiness.</p>
                        <i class="fa fa-check" aria-hidden="true"></i><p class="para">Nausea and Vomiting.</p>
                        <i class="fa fa-check" aria-hidden="true"></i><p class="para">Sweating.</p>
                    </div>
                    <div class="space-top"></div>
                    <h2>When to see an ENT Specialist</h2>
                    <div class="single-item-service">                        
                        <p>While occasional dizziness may not be cause for immediate concern, it is crucial to consult an ENT Specialist if:</p>
                        <i class="fa fa-check" aria-hidden="true"></i><p class="para">If episodes of vertigo or dizziness become frequent or severe.</p>
                        <i class="fa fa-check" aria-hidden="true"></i><p class="para">Symptoms such as headaches, difficulty speaking, or weakness accompany dizziness.</p>
                        <i class="fa fa-check" aria-hidden="true"></i><p class="para">If dizziness leads to falls or other injuries.</p>
                    </div>
                    <div class="space-top"></div>
                    <div class="single-item-service">
                        <h3>Treatment:</h3>
                        <i class="fa fa-check" aria-hidden="true"></i><p class="para">Medications such as anti-vertigo drugs, anti-nausea medications, or migraine-specific medications may be prescribed.</p>
                        <i class="fa fa-check" aria-hidden="true"></i><p class="para">Physical therapy exercises are designed to improve balance and reduce dizziness.</p>
                    </div>
                    <div class="space-top"></div>
                    <div class="single-item-service">
                        <h3>Prevention:</h3>
                        <i class="fa fa-check" aria-hidden="true"></i><p class="para">Stay Hydrated.</p>
                        <i class="fa fa-check" aria-hidden="true"></i><p class="para">Balanced Diet.</p>
                        <i class="fa fa-check" aria-hidden="true"></i><p class="para">Regular Exercise.</p>
                        <i class="fa fa-check" aria-hidden="true"></i><p class="para">Manage Stress.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>   
<!-- End Service Inner Section -->
@stop