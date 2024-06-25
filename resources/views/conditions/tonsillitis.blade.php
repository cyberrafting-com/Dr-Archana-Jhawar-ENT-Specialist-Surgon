@extends('layouts.default')            
@section('content') 

<!-- Start BreadCrumbs Design -->
<section class="page-title" style="background-image: url({{ asset('/resources/assets/images/breadcrumb_bg.jpg')}});">
    <div class="auto-container">
        <h2>Tonsillitis</h2>
        <ul class="page-breadcrumb">
            <li><a href="{{route('home')}}">home</a></li>
            <li>Tonsillitis</li>
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
                    @include('includes.throat-conditions-sidebar')  
                </div>
            </div>        
            <div class="col-lg-8 col-md-8 col-12">
                <div class="cat-services">
                    <h1>Tonsillitis Treatment in Navi Mumbai</h1>
                    <div class="space-top"></div>
                    <img src="{{ asset('/resources/assets/images/services/tonsillitis.jpg')}}" alt="tonsillitis" class="img-fluid">
                    <div class="space-top"></div>
                    <h2>What is Tonsillitis?</h2>
                    <div class="single-item-service">
                        <p>Tonsillitis is when the tonsils, the two oval-shaped tissue pads at the back side of the throat, are inflamed. While Tonsillitis can be uncomfortable and sometimes painful, it is generally treatable and rarely leads to serious complications.</p>
                    </div>
                    <div class="space-top"></div>
                    <div class="single-item-service">
                        <h3>Causes:</h3>
                        <i class="fa fa-check" aria-hidden="true"></i><p class="para">Viral Infections.</p>
                        <i class="fa fa-check" aria-hidden="true"></i><p class="para">Bacterial Infections.</p>
                    </div>
                    <div class="space-top"></div>
                    <div class="single-item-service">
                        <h3>Risk Factors</h3>
                        <p>The risk factors of Tonsillitis are:</p>
                        <i class="fa fa-check" aria-hidden="true"></i><p class="para">Tonsillitis is most common in children, but it can occur at any age.</p>
                        <i class="fa fa-check" aria-hidden="true"></i><p class="para">Being in close proximity to individuals with respiratory infections increases the risk of viral or bacterial transmission.</p>
                        <i class="fa fa-check" aria-hidden="true"></i><p class="para">Individuals with weakened immune systems are more susceptible to infections, including Tonsillitis.</p>
                    </div>
                    
                    <div class="space-top"></div>

                    <div class="single-item-service">
                        <h3>Symptoms</h3>
                        <p>Common symptoms of Tonsillitis include:</p>
                        <i class="fa fa-check" aria-hidden="true"></i><p class="para">Sore Throat.</p>
                        <i class="fa fa-check" aria-hidden="true"></i><p class="para">Swollen Tonsils.</p>
                        <i class="fa fa-check" aria-hidden="true"></i><p class="para">Fever.</p>
                        <i class="fa fa-check" aria-hidden="true"></i><p class="para">Headache and Earache.</p>
                        <i class="fa fa-check" aria-hidden="true"></i><p class="para">Difficulty Swallowing.</p>
                    </div>
                    <div class="space-top"></div>
                    <h2>When to See an Doctor</h2>
                    <div class="single-item-service">                       
                        <p>It is suggested to consult a doctor if:</p>
                        <i class="fa fa-check" aria-hidden="true"></i><p class="para">Symptoms are severe, persistent, or worsening over time.</p>
                        <i class="fa fa-check" aria-hidden="true"></i><p class="para">Swelling is severe enough to cause difficulty in breathing.</p>
                        <i class="fa fa-check" aria-hidden="true"></i><p class="para">Tonsillitis episodes frequently recur.</p>
                        <i class="fa fa-check" aria-hidden="true"></i><p class="para">Fever persists for an extended period.</p>
                    </div>
                    <div class="space-top"></div>
                    <div class="single-item-service">
                        <h3>Treatment</h3>
                        <p>Treatment options for Tonsillitis depend on the cause:</p>
                        <i class="fa fa-check" aria-hidden="true"></i><p class="para">Viral Tonsillitis: Generally resolves on its own, and treatment focuses on symptom relief through rest, hydration, and over-the-counter pain relievers.</p>
                        <i class="fa fa-check" aria-hidden="true"></i><p class="para">Bacterial Tonsillitis: Antibiotics may be prescribed to treat bacterial infections, particularly streptococcal infections.</p>
                        <i class="fa fa-check" aria-hidden="true"></i><p class="para">Surgical Intervention: In severe or recurrent cases, your doctor may suggest the removal of the tonsils (tonsillectomy).</p>
                    </div>
                    <div class="space-top"></div>
                    <div class="single-item-service">
                        <h3>Prevention</h3>
                        <p>To reduce the risk of Tonsillitis:</p>
                        <i class="fa fa-check" aria-hidden="true"></i><p class="para">Wash your hands daily and avoid close contact with individuals who are sick.</p>
                        <i class="fa fa-check" aria-hidden="true"></i><p class="para">Maintain a healthy lifestyle.</p>
                        <i class="fa fa-check" aria-hidden="true"></i><p class="para">Avoid Smoking and Secondhand Smoke.</p>
                        <i class="fa fa-check" aria-hidden="true"></i><p class="para">Stay Hydrated.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>   
<!-- End Service Inner Section -->
@stop