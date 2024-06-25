@extends('layouts.default')            
@section('content') 

<!-- Start BreadCrumbs Design -->
<section class="page-title" style="background-image: url({{ asset('/resources/assets/images/breadcrumb_bg.jpg')}});">
    <div class="auto-container">
        <h2>Allergic Rhinitis (Sneezing and Runny Nose)</h2>
        <ul class="page-breadcrumb">
            <li><a href="{{route('home')}}">home</a></li>
            <li>Allergic Rhinitis (Sneezing and Runny Nose)</li>
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
                    <h1>Allergic Rhinitis Treatment in Navi Mumbai</h1>
                    <div class="space-top"></div>
                    <img src="{{ asset('/resources/assets/images/services/allergic-rhinitis-sneezing-and-running-nose.jpg')}}" alt="allergic-rhinitis-sneezing-and-running-nose" class="img-fluid">
                    <div class="space-top"></div>
                    <h2>What is Allergic Rhinitis?</h2>
                    <div class="single-item-service">
                        <p>Allergic rhinitis is an inflammatory disorder of the nasal membrane. It is characterized by symptoms such as sneezing, a runny or stuffy nose, and itching; allergic rhinitis is often triggered by allergens in the environment.</p>
                    </div>
                    <div class="space-top"></div>
                    <div class="single-item-service">
                        <h3>Causes</h3>
                        <p>The primary cause of allergic rhinitis is exposure to allergens. Common triggers include:</p>
                        <i class="fa fa-check" aria-hidden="true"></i><p class="para">Pollen.</p>
                        <i class="fa fa-check" aria-hidden="true"></i><p class="para">Microscopic creatures that thrive in bedding, upholstery, and carpets.</p>
                        <i class="fa fa-check" aria-hidden="true"></i><p class="para">Tiny skin flakes from animals like cats, dogs, and rodents.</p>
                        <i class="fa fa-check" aria-hidden="true"></i><p class="para">Mold Spores.</p>
                    </div>
                    <div class="space-top"></div>
                    <div class="single-item-service">
                        <h3>Risk Factors</h3>
                        <p>The main risk factors of allergic rhinitis are:</p>
                        <i class="fa fa-check" aria-hidden="true"></i><p class="para">A family history of allergic conditions.</p>
                        <i class="fa fa-check" aria-hidden="true"></i><p class="para">Living in areas with high pollen counts or increased levels of indoor allergens.</p>
                        <i class="fa fa-check" aria-hidden="true"></i><p class="para">Allergic rhinitis often develops during childhood or adolescence, but it can affect individuals of any age.</p>
                    </div>
                    <div class="space-top"></div>
                    <div class="single-item-service">
                        <h3>Symptoms</h3>
                        <p>Common symptoms of allergic rhinitis include:</p>
                        <i class="fa fa-check" aria-hidden="true"></i><p class="para">Sneezing.</p>
                        <i class="fa fa-check" aria-hidden="true"></i><p class="para">Runny or Stuffy Nose.</p>
                        <i class="fa fa-check" aria-hidden="true"></i><p class="para">Itching in the Nose, Eyes, or Throat.</p>
                        <i class="fa fa-check" aria-hidden="true"></i><p class="para">Watery Eyes.</p>
                        <i class="fa fa-check" aria-hidden="true"></i><p class="para">Coughing.</p>
                        <i class="fa fa-check" aria-hidden="true"></i><p class="para">Fatigue.</p>
                    </div>
                    <div class="space-top"></div>
                    <div class="single-item-service">
                        <h3>When to See an Doctor</h3>
                        <p>While allergic rhinitis is often manageable with over-the-counter medications, it's essential to consult an ENT Specialist if:</p>
                        <i class="fa fa-check" aria-hidden="true"></i><p class="para">If symptoms significantly impact daily life or last for an extended period.</p>
                        <i class="fa fa-check" aria-hidden="true"></i><p class="para">If non-prescription medications fail to provide relief.</p>
                        <i class="fa fa-check" aria-hidden="true"></i><p class="para">Signs of development of infection.</p>
                    </div>
                    <div class="space-top"></div>
                    <div class="single-item-service">
                        <h3>Treatment</h3>
                        <p>Your doctor may suggest you:</p>
                        <i class="fa fa-check" aria-hidden="true"></i><p class="para">Antihistamines: To counteract the effects of histamine and alleviate symptoms.</p>
                        <i class="fa fa-check" aria-hidden="true"></i><p class="para">Nasal Corticosteroids: It will help reduce the inflammation in the nasal passag.</p>
                        <i class="fa fa-check" aria-hidden="true"></i><p class="para">Decongestants: Temporary relief for nasal congestion.</p>
                        <i class="fa fa-check" aria-hidden="true"></i><p class="para">Allergy Shots (Immunotherapy): For individuals with persistent or severe symptoms.</p>
                    </div>
                    <div class="space-top"></div>
                    <div class="single-item-service">
                        <h3>Prevention</h3>
                        <p>Several strategies can help prevent or minimize allergic rhinitis symptoms:</p>
                        <i class="fa fa-check" aria-hidden="true"></i><p class="para">Identify and limit exposure to specific allergens.</p>
                        <i class="fa fa-check" aria-hidden="true"></i><p class="para">Reduce indoor allergens by keeping living spaces clean and well-ventilated.</p>
                        <i class="fa fa-check" aria-hidden="true"></i><p class="para">Use Air Purifiers.</p>
                        <i class="fa fa-check" aria-hidden="true"></i><p class="para">Stay indoors during peak pollen seasons, if possible.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>   
<!-- End Service Inner Section -->
@stop