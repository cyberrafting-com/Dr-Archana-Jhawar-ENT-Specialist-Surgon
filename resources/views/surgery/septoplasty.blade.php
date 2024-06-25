@extends('layouts.default')            
@section('content') 

<!-- Start BreadCrumbs Design -->
<section class="page-title" style="background-image: url({{ asset('/resources/assets/images/breadcrumb_bg.jpg')}});">
    <div class="auto-container">
        <h2>Septoplasty</h2>
        <ul class="page-breadcrumb">
            <li><a href="{{route('home')}}">home</a></li>
            <li>Septoplasty</li>
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
                    <h1>Septoplasty Surgery in Navi Mumbai</h1>
                    <div class="space-top"></div>
                    <img src="{{ asset('/resources/assets/images/services/septoplasty.jpg')}}" alt="septoplasty" class="img-fluid">
                    <div class="space-top"></div>
                    <h2>What is Septoplasty Surgery?</h2>
                    <div class="single-item-service">
                        <p>Septoplasty is a surgical procedure aimed at correcting a deviated nasal septum, which is the cartilage and bone that divides the two nostrils. This condition can cause difficulty in breathing, nasal congestion, and other related issues. During septoplasty, the surgeon reshapes or repositions the septum to improve airflow through the nose and alleviate symptoms.</p>
                    </div>
                    <div class="space-top"></div>
                    <h2>Procedure Details</h2>
                    <div class="single-item-service">
                        <i class="fa fa-check" aria-hidden="true"></i><p class="para">Septoplasty is typically performed under general or local anesthesia. The surgeon makes an incision inside the nostrils to access the septum.</p>
                        <i class="fa fa-check" aria-hidden="true"></i><p class="para">Using specialized instruments, the surgeon carefully lifts and separates the mucous membrane lining the septum from the underlying cartilage and bone.</p>
                        <i class="fa fa-check" aria-hidden="true"></i><p class="para">The deviated portion of the septum is then straightened, trimmed, or repositioned as needed to improve nasal airflow and alleviate symptoms.</p>
                        <i class="fa fa-check" aria-hidden="true"></i><p class="para">In some cases, additional procedures such as turbinate reduction or nasal valve repair may be performed to further optimize nasal function.</p>
                        <i class="fa fa-check" aria-hidden="true"></i><p class="para">The incisions are then closed, and nasal packing or splints may be placed temporarily to support the septum during healing.</p>
                    </div>
                    <div class="space-top"></div>
                    <div class="single-item-service">
                        <h3>Benefits</h3>
                        <i class="fa fa-check" aria-hidden="true"></i><p class="para">Septoplasty aims to alleviate symptoms associated with a deviated septum, including nasal congestion, difficulty breathing through the nose, and recurrent sinus infections.</p>
                        <i class="fa fa-check" aria-hidden="true"></i><p class="para">By correcting the structural abnormality, septoplasty can lead to improved nasal function and overall quality of life for many patients.</p>
                    </div>
                    <div class="space-top"></div>
                    <div class="single-item-service">
                        <h3>Risks</h3>
                        <i class="fa fa-check" aria-hidden="true"></i><p class="para">While septoplasty is generally considered safe, there are potential risks associated with any surgical procedure.</p>
                        <i class="fa fa-check" aria-hidden="true"></i><p class="para">These may include bleeding, infection, changes in sensation or shape of the nose, or complications related to anesthesia.</p>
                        <i class="fa fa-check" aria-hidden="true"></i><p class="para">The severity of risks depends on factors such as the patient's overall health and the complexity of the septal deviation.</p>
                    </div>
                    <div class="space-top"></div>
                    <div class="single-item-service">
                        <h3>Recovery</h3>
                        <i class="fa fa-check" aria-hidden="true"></i><p class="para">Recovery after septoplasty varies from patient to patient but typically involves mild discomfort, nasal congestion, and drainage in the days following the procedure.</p>
                        <i class="fa fa-check" aria-hidden="true"></i><p class="para">Pain medication and nasal irrigation may be recommended to manage symptoms.</p>
                        <i class="fa fa-check" aria-hidden="true"></i><p class="para">Most people can resume normal activities within a week, although strenuous exercise and heavy lifting should be avoided for several weeks to allow for proper healing.</p>
                    </div>
                    <div class="space-top"></div>
                    <h2>When to See an ENT Specialist</h2>
                    <div class="single-item-service">
                        <p class="para">Patients should contact their doctor if they experience severe pain, persistent bleeding, signs of infection, or worsening symptoms after septoplasty. Follow-up appointments with an ear, nose, and throat (ENT) specialist are essential to monitor healing and ensure the long-term success of the procedure.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>   
<!-- End Service Inner Section -->

@stop       