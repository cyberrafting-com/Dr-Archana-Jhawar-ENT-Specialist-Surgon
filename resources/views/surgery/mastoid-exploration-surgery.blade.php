@extends('layouts.default')            
@section('content') 

<!-- Start BreadCrumbs Design -->
<section class="page-title" style="background-image: url({{ asset('/resources/assets/images/breadcrumb_bg.jpg')}});">
    <div class="auto-container">
        <h2>Mastoid Exploration & Cholesteatoma Surgery</h2>
        <ul class="page-breadcrumb">
            <li><a href="{{route('home')}}">home</a></li>
            <li>Mastoid Exploration & Cholesteatoma Surgery</li>
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
                    <h1>Mastoid Exploration Surgery in Navi Mumbai</h1>
                    <div class="space-top"></div>
                    <img src="{{ asset('/resources/assets/images/services/mastoid-exploration-surgery-cholesteatoma-surgery.jpg')}}" alt="mastoid-exploration-surgery-cholesteatoma-surgery" class="img-fluid">
                    <div class="space-top"></div>
                    <h2>What is Mastoid Exploration Surgery?</h2>
                    <div class="single-item-service">
                        <p>Mastoid exploration surgery, often performed for the treatment of cholesteatoma, is a procedure that involves the exploration and removal of abnormal growths or cysts in the middle ear and mastoid bone. Cholesteatoma is a non-cancerous but potentially problematic growth of skin cells in the middle ear.</p>
                    </div>
                    <div class="space-top"></div>
                    <h2>Procedure Details</h2>
                    <div class="single-item-service">
                        <h3>The steps of Mastoid Exploration Surgery are:</h3>
                        <i class="fa fa-check" aria-hidden="true"></i><p class="para">The surgeon typically makes an incision behind the ear to access the mastoid bone and middle ear.</p>
                        <i class="fa fa-check" aria-hidden="true"></i><p class="para">The surgeon carefully explores the area, looking for and removing any cholesteatoma growths. The goal is to eliminate the abnormal tissue to prevent damage to the surrounding structures, such as the bones of the ear and the facial nerve.</p>
                        <i class="fa fa-check" aria-hidden="true"></i><p class="para">In some cases, the surgeon may need to reconstruct or repair damaged structures, including the eardrum or middle ear bones.</p>
                    </div>
                    <div class="space-top"></div>
                    <h2>Benefits</h2>
                    <div class="single-item-service">
                        <p>The primary benefit of mastoid exploration surgery is the removal of cholesteatoma, which can help prevent complications such as hearing loss, balance problems, or infections. The surgery aims to restore the health and function of the ear.</p>
                    </div>
                    <div class="space-top"></div>
                    <h2>Risks</h2>
                    <div class="single-item-service">
                        <p>Risks associated with the procedure may include infection, hearing loss, injury to the facial nerve, and a risk of recurrence of cholesteatoma.</p>
                    </div>
                    <div class="space-top"></div>
                    <h2>Recovery</h2>
                    <div class="single-item-service">
                        <i class="fa fa-check" aria-hidden="true"></i><p class="para">Patients may experience some temporary hearing changes or drainage from the ear, but these typically improve over time.</p>
                        <i class="fa fa-check" aria-hidden="true"></i><p class="para">Regular follow-up appointments are crucial to monitor healing and address any concerns.</p>
                    </div>
                    <div class="space-top"></div>
                    <h2>When to see an ENT Specialist</h2>
                    <div class="single-item-service">
                        <p>Patients should contact their doctor if they experience severe pain, signs of infection, worsening hearing loss, persistent drainage, or any other concerning symptoms after mastoid exploration surgery.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>   
<!-- End Service Inner Section -->
@stop       