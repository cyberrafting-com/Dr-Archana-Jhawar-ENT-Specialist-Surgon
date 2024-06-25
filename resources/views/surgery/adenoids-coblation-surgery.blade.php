@extends('layouts.default')            
@section('content') 

<!-- Start BreadCrumbs Design -->
<section class="page-title" style="background-image: url({{ asset('/resources/assets/images/breadcrumb_bg.jpg')}});">
    <div class="auto-container">
        <h2>Adenoids Coblation Surgery</h2>
        <ul class="page-breadcrumb">
            <li><a href="{{route('home')}}">home</a></li>
            <li>Adenoids Coblation Surgery</li>
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
                    <h1>Adenoids Coblation Surgery in Navi Mumbai</h1>
                    <div class="space-top"></div>
                    <img src="{{ asset('/resources/assets/images/services/adenoids-coblation-surgery.jpg')}}" alt="adenoids-coblation-surgery" class="img-fluid">
                    <div class="space-top"></div>
                    <h2>What is Adenoid Coblation Surgery?</h2>
                    <div class="single-item-service">
                        <p>Adenoid coblation surgery is a procedure used to remove or reduce the size of the adenoids using coblation technology. The adenoids are lymphoid tissues located at the upper part of the throat behind the nose. Coblation is a technique that uses radiofrequency energy to remove or shrink tissue with minimal damage to surrounding structures.</p>
                    </div>
                    <div class="space-top"></div>
                    <h2>Procedure Details</h2>
                    <div class="single-item-service">
                        <i class="fa fa-check" aria-hidden="true"></i><p class="para">Adenoid coblation surgery is typically performed under general anesthesia. This means the patient is asleep during the procedure.</p>
                        <i class="fa fa-check" aria-hidden="true"></i><p class="para">Coblation involves the use of a device that combines radiofrequency energy and saline to remove the adenoid tissue while minimizing damage to nearby structsures.</p>
                        <i class="fa fa-check" aria-hidden="true"></i><p class="para">The surgeon guides the coblation wand to target and remove or reduce the size of the adenoid tissue. Coblation allows for a more precise and controlled removal compared to traditional methods.</p>
                    </div>
                    <div class="space-top"></div>
                    <h2>Benefits</h2>
                    <div class="single-item-service">
                        <p>Adenoid coblation surgery addresses issues related to enlarged or infected adenoids, such as difficulty breathing, recurrent infections, or sleep-disordered breathing.</p>
                    </div>
                    <div class="space-top"></div>
                    <h2>Risks</h2>
                    <div class="single-item-service">
                        <p>Potential risks include bleeding, infection, changes in voice, and, in rare cases, damage to nearby structures.</p>
                    </div>
                    <div class="space-top"></div>
                    <h2>Recovery</h2>
                    <div class="single-item-service">
                        <p>Recovery after adenoid coblation surgery varies, but many individuals experience less pain and a quicker recovery compared to traditional adenoidectomy methods. Pain management, hydration, and a soft diet may be recommended during the initial recovery period.</p>
                    </div>
                    <div class="space-top"></div>
                    <h2>When to see an ENT Specialist</h2>
                    <div class="single-item-service">
                        <p>Patients should contact their doctor if they experience severe pain, persistent bleeding, signs of infection, difficulty breathing, or worsening symptoms after adenoid coblation surgery.</p>
                        <p>Regular follow-up appointments are essential for assessing the ongoing success of the procedure.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>   
<!-- End Service Inner Section -->
@stop       