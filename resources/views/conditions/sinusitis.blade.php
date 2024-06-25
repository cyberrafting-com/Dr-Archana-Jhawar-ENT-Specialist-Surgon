@extends('layouts.default')            
@section('content') 

<!-- Start BreadCrumbs Design -->
<section class="page-title" style="background-image: url({{ asset('/resources/assets/images/breadcrumb_bg.jpg')}});">
    <div class="auto-container">
        <h2>Sinusitis</h2>
        <ul class="page-breadcrumb">
            <li><a href="{{route('home')}}">home</a></li>
            <li>Sinusitis</li>
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
                    @include('includes.nose-conditions-sidebar')  
                </div>
            </div>        
            <div class="col-lg-8 col-md-8 col-12">
                <div class="cat-services">
                    <h1>Sinusitis Treatment in Navi Mumbai</h1>
                    <div class="space-top"></div>
                    <img src="{{ asset('/resources/assets/images/services/sinusitis.jpg')}}" alt="sinusitis">
                    <div class="space-top"></div>
                    <h2>What is Sinusitis?</h2>
                    <div class="single-item-service">
                        <p>Sinusitis is the inflammation of the sinuses, causing discomfort and impacting daily life. When the sinuses become inflamed, they will fill with fluid, leading to various symptoms associated with sinusitis.</p>
                    </div>
                    <div class="space-top"></div>
                    <div class="single-item-service">
                        <h3>Causes</h3>
                        <p>Sinusitis can result from various factors, including:</p>
                        <i class="fa fa-check" aria-hidden="true"></i><p class="para">Viral Infections.</p>
                        <i class="fa fa-check" aria-hidden="true"></i><p class="para">Bacterial Infections.</p>
                        <i class="fa fa-check" aria-hidden="true"></i><p class="para">Allergies.</p>
                        <i class="fa fa-check" aria-hidden="true"></i><p class="para">Nasal Polyps (small, noncancerous growths in the nasal passages).</p>
                    </div>
                    <div class="space-top"></div>
                    <div class="single-item-service">
                        <h3>Risk Factors</h3>
                        <p>The primary risk factors that can increase the risk of developing sinusitis are:</p>
                        <i class="fa fa-check" aria-hidden="true"></i><p class="para">Respiratory Tract Infections.</p>
                        <i class="fa fa-check" aria-hidden="true"></i><p class="para">Allergies.</p>
                        <i class="fa fa-check" aria-hidden="true"></i><p class="para">Structural issues in the nose.</p>
                        <i class="fa fa-check" aria-hidden="true"></i><p class="para">Immune System Disorders.</p>
                    </div>
                    <div class="space-top"></div>
                    <div class="single-item-service">
                        <h3>Symptoms</h3>
                        <p>Common symptoms of sinusitis include:</p>
                        <i class="fa fa-check" aria-hidden="true"></i><p class="para">Pain and tenderness over the forehead, cheeks, and behind the eyes.</p>
                        <i class="fa fa-check" aria-hidden="true"></i><p class="para">Difficulty breathing through the nose due to blockage.</p>
                        <i class="fa fa-check" aria-hidden="true"></i><p class="para">Thick yellow or green mucus may indicate an infection.</p>
                        <i class="fa fa-check" aria-hidden="true"></i><p class="para">Coughing.</p>
                        <i class="fa fa-check" aria-hidden="true"></i><p class="para">Headache.</p>
                    </div>
                    <div class="space-top"></div>                    
                    <h2>When to See an Doctor</h2>
                    <div class="single-item-service">
                        <p>It's advisable to seek medical attention if you experience:</p>
                        <i class="fa fa-check" aria-hidden="true"></i><p class="para">Symptoms lasting more than ten days without improvement.</p>
                        <i class="fa fa-check" aria-hidden="true"></i><p class="para">Intense facial pain, high fever, or neurological symptoms.</p>
                        <i class="fa fa-check" aria-hidden="true"></i><p class="para">Frequent Recurrence.</p>
                        <i class="fa fa-check" aria-hidden="true"></i><p class="para">Worsening Symptoms.</p>
                    </div>
                    <div class="space-top"></div>
                    <div class="single-item-service">
                        <h3>Treatment</h3>
                        <p>The main treatment options for sinusitis are:</p>
                        <i class="fa fa-check" aria-hidden="true"></i><p class="para">Antibiotics: If a bacterial infection is present.</p>
                        <i class="fa fa-check" aria-hidden="true"></i><p class="para">Decongestants: To alleviate nasal congestion.</p>
                        <i class="fa fa-check" aria-hidden="true"></i><p class="para">Nasal Corticosteroids: Reduce inflammation in the nasal passages.</p>
                        <i class="fa fa-check" aria-hidden="true"></i><p class="para">Pain Relievers: Over-the-counter pain medications for symptom relief.</p>
                        <i class="fa fa-check" aria-hidden="true"></i><p class="para">Saline Nasal Irrigation: Helps clear mucus and soothe nasal passages.</p>
                    </div>
                    <div class="space-top"></div>
                    <div class="single-item-service">
                        <h3>Prevention</h3>
                        <p>To reduce the risk of sinusitis:</p>
                        <i class="fa fa-check" aria-hidden="true"></i><p class="para">Wash hands regularly to prevent the spread of viruses.</p>
                        <i class="fa fa-check" aria-hidden="true"></i><p class="para">Manage Allergies.</p>
                        <i class="fa fa-check" aria-hidden="true"></i><p class="para">Use Humidifiers.</p>
                        <i class="fa fa-check" aria-hidden="true"></i><p class="para">Stay Hydrated.</p>
                        <i class="fa fa-check" aria-hidden="true"></i><p class="para">Avoid Irritants.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>   
<!-- End Service Inner Section -->
@stop