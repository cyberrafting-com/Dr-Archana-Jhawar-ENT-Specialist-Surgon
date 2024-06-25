@extends('layouts.default')            
@section('content') 

<!-- Start BreadCrumbs Design -->
<section class="page-title" style="background-image: url({{ asset('/resources/assets/images/breadcrumb_bg.jpg')}});">
    <div class="auto-container">
        <h2>Adenoids Microdebrider Surgery</h2>
        <ul class="page-breadcrumb">
            <li><a href="{{route('home')}}">home</a></li>
            <li>Adenoids Microdebrider Surgery</li>
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
                    <h1>Adenoids Microdebrider Surgery in Navi Mumbai</h1>
                    <div class="space-top"></div>
                    <img src="{{ asset('/resources/assets/images/services/adenoids-microdebrider-surgery.jpg')}}" alt="adenoids-microdebrider-surgery" class="img-fluid">
                    <div class="space-top"></div>
                    <h2>What is Adenoid Microdebrider Surgery?</h2>
                    <div class="single-item-service">
                        <p>Adenoid microdebrider surgery is a procedure used to remove or reduce the size of the adenoids utilizing a microdebrider. The adenoids are lymphoid tissues located at the upper part of the throat behind the nose. The microdebrider is a powered cutting device with suction that allows for precise removal of tissue while minimizing damage to surrounding structures.</p>
                    </div>
                    <div class="space-top"></div>
                    <h2>Procedure Details</h2>
                    <div class="single-item-service">
                        <i class="fa fa-check" aria-hidden="true"></i><p class="para">Adenoid microdebrider surgery is typically performed under general anesthesia.</p>
                        <i class="fa fa-check" aria-hidden="true"></i><p class="para">The microdebrider consists of a small, rotating blade that cuts and suctions tissue simultaneously.</p>
                        <i class="fa fa-check" aria-hidden="true"></i><p class="para">The surgeon uses the microdebrider to target and remove or reduce the size of the adenoid tissue.</p>
                    </div>
                    <div class="space-top"></div>
                    <h2>Benefits</h2>
                    <div class="single-item-service">
                        <p>Adenoid microdebrider surgery aims to address issues related to enlarged or infected adenoids, such as difficulty breathing, recurrent infections, or sleep-disordered breathing.</p>
                    </div>
                    <div class="space-top"></div>
                    <h2>Risks</h2>
                    <div class="single-item-service">
                        <p>Potential risks include bleeding, infection, changes in voice, and, in rare cases, damage to nearby structures.</p>
                    </div>
                    <div class="space-top"></div>
                    <h2>Recovery</h2>
                    <div class="single-item-service">
                        <p>Complete recovery may take a week or more, and patients are often advised to avoid certain foods and activities during the healing process. Regular follow-up appointments help monitor healing and address any concerns.</p>
                    </div>
                    <div class="space-top"></div>
                    <h2>When to see an ENT Specialist</h2>
                    <div class="single-item-service">
                        <p>Patients should contact their ENT Specialist if they experience severe pain, persistent bleeding, signs of infection, difficulty breathing, or worsening symptoms after adenoid microdebrider surgery.</p>
                    </div>
                </div>
            </div>  
        </div>
    </div>
</section>   
<!-- End Service Inner Section -->
@stop       