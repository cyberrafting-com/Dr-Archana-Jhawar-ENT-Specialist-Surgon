@extends('layouts.default')            
@section('content') 

<!-- Start BreadCrumbs Design -->
<section class="page-title" style="background-image: url({{ asset('/resources/assets/images/breadcrumb_bg.jpg')}});">
    <div class="auto-container">
        <h2>Ossiculoplasty</h2>
        <ul class="page-breadcrumb">
            <li><a href="{{route('home')}}">home</a></li>
            <li>Ossiculoplasty</li>
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
                    <h1>Ossiculoplasty Surgery in Navi Mumbai</h1>
                    <div class="space-top"></div>
                    <img src="{{ asset('/resources/assets/images/services/ossiculopalsty.jpg')}}" alt="ossiculopalsty" class="img-fluid">
                    <div class="space-top"></div>
                    <h2>What is Ossiculoplasty?</h2>
                    <div class="single-item-service">
                        <p>Ossiculoplasty is typically performed to treat issues such as damage or erosion of the ossicles due to chronic ear infections, trauma, congenital malformations, or other middle ear diseases. The goal of the procedure is to improve hearing by restoring the normal function of the ossicular chain.</p>
                    </div>
                    <div class="space-top"></div>
                    <h2>Procedure Details</h2>
                    <div class="single-item-service">
                        <p>The procedure involves accessing the middle ear, often directly through the ear canal or by making a small incision behind the ear. The surgeon may use various techniques, including the placement of prosthetic devices or grafts, to repair or replace damaged ossicles.</p>
                    </div>
                    <div class="space-top"></div>
                    <h2>Benefits</h2>
                    <div class="single-item-service">
                        <p>The primary benefit of Ossiculoplasty is the potential improvement in hearing. By reconstructing the ossicular chain, sound transmission can be restored, leading to enhanced auditory function.</p>
                    </div>
                    <div class="space-top"></div>
                    <h2>Risks</h2>
                    <div class="single-item-service">
                        <p>As with any surgical procedure, there are potential risks involved, such as infection, changes in taste, or failure of the graft or prosthesis.</p>
                    </div>
                    <div class="space-top"></div>
                    <h2>Recovery</h2>
                    <div class="single-item-service">
                        <p>Recovery after ossiculoplasty varies, but most individuals can expect some improvement in hearing over time. Patients will need to follow postoperative care instructions, which may include restrictions on certain activities and medications to prevent infection.</p>
                    </div>
                    <div class="space-top"></div>
                    <h2>When to see an ENT Specialist</h2>
                    <div class="single-item-service">
                        <p>Patients should contact their doctor if they experience persistent pain, signs of infection, or any worsening of hearing after ossiculoplasty. Regular follow-up appointments will allow the doctor to address any concerns and track the long-term outcomes of the procedure.</p>
                    </div>
                </div>    
            </div>     
        </div>
    </div>
</section>   
<!-- End Service Inner Section -->
@stop       