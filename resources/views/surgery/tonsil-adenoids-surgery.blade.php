@extends('layouts.default')            
@section('content') 

<!-- Start BreadCrumbs Design -->
<section class="page-title" style="background-image: url({{ asset('/resources/assets/images/breadcrumb_bg.jpg')}});">
    <div class="auto-container">
        <h2>Tonsil and Adenoids Surgery</h2>
        <ul class="page-breadcrumb">
            <li><a href="{{route('home')}}">home</a></li>
            <li>Tonsil and Adenoids Surgery</li>
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
                    <h1>Tonsil and Adenoids Surgery in Navi Mumbai</h1>
                    <div class="space-top"></div>
                    <img src="{{ asset('/resources/assets/images/services/tonsils-and-adenoids.jpg')}}" alt="tonsils-and-adenoids" class="img-fluid">
                    <div class="space-top"></div>
                    <h2>What are Tonsil and Adenoid Surgery?</h2>
                    <div class="single-item-service">
                        <p>Tonsil and adenoid surgery, also known as tonsillectomy and adenoidectomy, is a surgical procedure to remove the tonsils and adenoids, which are lymphoid tissues located at the back of the throat and the upper part of the throat behind the nose, respectively. This surgery is commonly performed to address recurrent infections, enlarged tonsils causing breathing difficulties, or other related issues.</p>
                    </div>
                    <div class="space-top"></div>
                    <h2>Procedure Details</h2>
                    <div class="single-item-service">
                        <i class="fa fa-check" aria-hidden="true"></i><p class="para">Tonsil and adenoid surgery is usually performed under general anesthesia. Meaning the patient is asleep during the procedure.</p>
                        <i class="fa fa-check" aria-hidden="true"></i><p class="para">Removal of Tonsils (Tonsillectomy): The surgeon uses a scalpel, laser, or electrocautery to remove the tonsils.</p>
                        <i class="fa fa-check" aria-hidden="true"></i><p class="para">Removal of Adenoids (Adenoidectomy): Adenoids are typically removed through the mouth using a curette or suction device.</p>
                    </div>   
                    <div class="space-top"></div>
                    <h2>Benefits</h2>
                    <div class="single-item-service">
                        <p>Tonsil and adenoid surgery are performed to alleviate symptoms such as recurrent throat infections, difficulty breathing or swallowing, and sleep-disordered breathing. Removal of enlarged or infected tonsils and adenoids can improve overall health and quality of life.</p>
                    </div>  
                    <div class="space-top"></div>
                    <h2>Risks</h2>
                    <div class="single-item-service">
                        <p>Potential risks include bleeding, infection, changes in voice, and, in rare cases, damage to nearby structures. The severity of risks depends on factors such as the surgical technique used and the patient's overall health.</p>
                    </div>  
                    <div class="space-top"></div>
                    <h2>Recovery</h2>
                    <div class="single-item-service">
                        <p>Recovery after tonsil and adenoid surgery varies, but most individuals experience some discomfort and throat pain in the immediate postoperative period. Pain management, hydration, and a soft diet are typically recommended during the recovery phase.</p>
                    </div>  
                    <div class="space-top"></div>
                    <h2>When to see an ENT Specialist</h2>
                    <div class="single-item-service">
                        <p>Patients should contact their ENT Specialist if they experience severe pain, persistent bleeding, signs of infection, difficulty breathing, or worsening symptoms after tonsil and adenoid surgery.</p>
                    </div>    
                </div>                    
            </div>
        </div>
    </div>
</section>   
<!-- End Service Inner Section -->
@stop       