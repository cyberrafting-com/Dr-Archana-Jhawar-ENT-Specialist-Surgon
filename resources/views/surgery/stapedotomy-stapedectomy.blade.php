@extends('layouts.default')            
@section('content') 

<!-- Start BreadCrumbs Design -->
<section class="page-title" style="background-image: url({{ asset('/resources/assets/images/breadcrumb_bg.jpg')}});">
    <div class="auto-container">
        <h2>Stapedotomy and Stapedectomy Surgery</h2>
        <ul class="page-breadcrumb">
            <li><a href="{{route('home')}}">home</a></li>
            <li>Stapedotomy and Stapedectomy Surgery</li>
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
                    @include('includes.ear-surgery-sidebar')  
                </div>
            </div>        
            <div class="col-lg-8 col-md-8 col-12">
                <div class="cat-services">
                    <h1>Stapedotomy and Stapedectomy Surgery in Navi Mumbai</h1>
                    <div class="space-top"></div>
                    <img src="{{ asset('/resources/assets/images/services/stapedotomy-and-stapedectomy.jpg')}}" alt="stapedotomy-and-stapedectomy" class="img-fluid">
                    <div class="space-top"></div>
                    <h2>What is Stapedotomy and Stapedectomy?</h2>
                    <div class="single-item-service">
                        <p>Stapedotomy and stapedectomy are surgical procedures designed to treat hearing loss caused by otosclerosis, a condition where unusual bone growth in the middle ear disturbs the movement of the stapes bone.</p>
                    </div>
                    <div class="space-top"></div>
                    <h2>Procedure Details</h2>
                    <div class="single-item-service">
                        <i class="fa fa-check" aria-hidden="true"></i><p class="para">Stapedotomy: In this procedure, a small hole (stapedotomy) is made in the footplate of the stapes bone, and a prosthesis is placed. The surgery is often performed through the ear canal.</p>
                        <i class="fa fa-check" aria-hidden="true"></i><p class="para">Stapedectomy: Stapedectomy involves the complete removal of the stapes bone, which is then replaced with a prosthesis.</p>
                        <p>Both procedures aim to restore the normal vibratory function of the middle ear, allowing sound waves to reach the inner ear more effectively.</p>
                    </div>
                    <div class="space-top"></div>
                    <h2>Benefits</h2>
                    <div class="single-item-service">
                        <p>The primary benefit of stapedotomy and stapedectomy is the potential improvement in hearing for individuals with otosclerosis.</p>
                    </div>
                    <div class="space-top"></div>
                    <h2>Risks</h2>
                    <div class="single-item-service">
                        <p>Infection, changes in taste, tinnitus (ringing in the ears), and, in rare cases, hearing loss are the risks of these surgeries.</p>
                    </div>
                    <div class="space-top"></div>
                    <h2>Recovery</h2>
                    <div class="single-item-service">
                        <p>Recovery after stapedotomy or stapedectomy typically involves a period of rest and follow-up appointments to monitor healing. Patients may experience some temporary changes in taste, dizziness, or ringing in the ears, but these usually subside over time.</p>
                    </div>
                    <div class="space-top"></div>
                    <h2>When to see an ENT Specialist</h2>
                    <div class="single-item-service">
                        <p>Patients should contact their doctor if they experience severe pain, signs of infection, worsening hearing loss, or persistent dizziness after stapedotomy or stapedectomy. Regular follow-up appointments are essential to assess the long-term success of the surgery.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>   
<!-- End Service Inner Section -->
@stop       