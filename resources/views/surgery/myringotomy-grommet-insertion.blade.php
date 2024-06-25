@extends('layouts.default')            
@section('content') 

<!-- Start BreadCrumbs Design -->
<section class="page-title" style="background-image: url({{ asset('/resources/assets/images/breadcrumb_bg.jpg')}});">
    <div class="auto-container">
        <h2>Myringotomy and Grommet Insertion</h2>
        <ul class="page-breadcrumb">
            <li><a href="{{route('home')}}">home</a></li>
            <li>Myringotomy and Grommet Insertion</li>
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
                    <h1>Myringotomy and Grommet Insertion Surgery in Navi Mumbai</h1>
                    <div class="space-top"></div>
                    <img src="{{ asset('/resources/assets/images/services/myringotomy-grommet-insertion.jpg')}}" alt="myringotomy-and-grommet-insertion" class="img-fluid">
                    <div class="space-top"></div>
                    <h2>What is Myringotomy and Grommet Insertion?</h2>
                    <div class="single-item-service">
                        <p>Myringotomy and grommet insertion is a medical procedure designed to treat issues related to the middle ear. This surgical procedure involves creating a small incision in the eardrum (myringotomy) and inserting a tiny tube, known as a grommet, into the incision. The surgery reduces recurrent ear infections, persistent fluid accumulation in the middle ear, or hearing loss.</p>
                    </div>                    
                    <div class="space-top"></div>
                    <h2>Procedure Details</h2>
                    <div class="single-item-service">
                        <p>Before undergoing myringotomy and grommet insertion, patients typically receive a thorough examination and consultation with their ENT Specialist. The procedure is performed under general anesthesia, especially in pediatric cases.</p>
                        <h3>The steps of the surgery are:</h3>
                        <i class="fa fa-check" aria-hidden="true"></i><p class="para">During the surgery, the surgeon makes a small incision in the eardrum to allow drainage of fluids and relieve pressure in the middle ear.</p>
                        <i class="fa fa-check" aria-hidden="true"></i><p class="para">The grommet, a tiny tube made of plastic or metal, is then inserted into the incision. The tube insertion facilitates continuous ventilation of the middle ear, preventing the recurrence of fluid buildup and reducing the risk of infections in the ear.</p>
                    </div>
                    <div class="space-top"></div>
                    <h2>Benefits</h2>
                    <div class="single-item-service">
                        <p>The advantages of myringotomy and grommet insertion include:</p>
                        <i class="fa fa-check" aria-hidden="true"></i><p class="para">Improved hearing.</p>
                        <i class="fa fa-check" aria-hidden="true"></i><p class="para">Reduced frequency of ear infections.</p>
                        <i class="fa fa-check" aria-hidden="true"></i><p class="para">Prevention of complications associated with persistent middle ear fluid. The procedure is often considered a safe and effective solution for individuals experiencing recurrent ear issues.</p>
                    </div>
                    <div class="space-top"></div>
                    <h2>Risks</h2>
                    <div class="single-item-service">
                        <p>Patients may experience temporary drainage from the ear, and in rare cases, the grommet may become dislodged or lead to persistent perforation of the eardrum.</p>
                    </div>
                    <div class="space-top"></div>
                    <h2>Recovery</h2>
                    <div class="single-item-service">
                        <p>Recovery after myringotomy and grommet insertion is generally fast. Patients may experience some mild discomfort, temporary changes in hearing, or ear drainage in the immediate postoperative period. However, these effects typically resolve within a short time.</p>
                        <p>Return to normal activities, including work or school, is usually quick, with most individuals resuming their regular routines within a few days. Follow-up appointments with your doctor are essential to monitor the condition, ensure proper healing, and address any concerns.</p>
                    </div>
                    <div class="space-top"></div>
                    <h2>When to see an ENT Specialist</h2>
                    <div class="single-item-service">
                        <p>While mild discomfort and changes in hearing are normal after the procedure, patients should immediately contact their doctor if they experience severe pain, persistent drainage, worsening hearing loss, or signs of infection such as fever.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>   
<!-- End Service Inner Section -->
@stop       