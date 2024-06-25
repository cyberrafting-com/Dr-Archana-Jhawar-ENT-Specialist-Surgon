@extends('layouts.default')            
@section('content') 

<!-- Start BreadCrumbs Design -->
<section class="page-title" style="background-image: url({{ asset('/resources/assets/images/breadcrumb_bg.jpg')}});">
    <div class="auto-container">
        <h2>Migraine Treatment</h2>
        <ul class="page-breadcrumb">
            <li><a href="{{route('home')}}">home</a></li>
            <li>Migraine Treatment</li>
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
                    <h1>Migraine Treatment in Navi Mumbai</h1>
                    <div class="space-top"></div>
                    <img src="{{ asset('/resources/assets/images/services/migraine-treatment.jpg')}}" alt="migraine-treatment">
                    <div class="space-top"></div>
                    <h2>What is a Migraine?</h2>
                    <div class="single-item-service">
                        <p>A migraine is a headache disorder characterized by recurrent, pulsating headaches that often affect one side of the head. Those who suffer from migraines often experience intense throbbing pain, along with other symptoms like nausea, sensitivity to light and sound, and visual disturbances.</p>
                    </div>
                    <div class="space-top"></div>
                    <div class="single-item-service">
                        <h3>Causes</h3>
                        <p>Some common triggers of migraine include:</p>
                        <i class="fa fa-check" aria-hidden="true"></i><p class="para">Fluctuations in estrogen, especially in women during menstruation, pregnancy, or menopause.</p>
                        <i class="fa fa-check" aria-hidden="true"></i><p class="para">Certain stimuli like bright lights, loud noises, strong smells, or changes in weather.</p>
                        <i class="fa fa-check" aria-hidden="true"></i><p class="para">Stress, anxiety, lack of sleep, and certain physical activities.</p>
                        <i class="fa fa-check" aria-hidden="true"></i><p class="para">Some foods and drinks, such as chocolate, caffeine, alcohol, and aged cheeses.</p>
                    </div>
                    <div class="space-top"></div>
                    <div class="single-item-service">
                        <h3>Symptoms</h3>
                        <p>Migraine symptoms can vary, but common features include:</p>
                        <i class="fa fa-check" aria-hidden="true"></i><p class="para">Intense throbbing pain on one side of the head.</p>
                        <i class="fa fa-check" aria-hidden="true"></i><p class="para">Nausea and vomiting.</p>
                        <i class="fa fa-check" aria-hidden="true"></i><p class="para">Sensitivity to light and sound.</p>
                        <i class="fa fa-check" aria-hidden="true"></i><p class="para">Visual disturbances, such as auras (flashes of light or blind spots).</p>
                        <i class="fa fa-check" aria-hidden="true"></i><p class="para">Dizziness and difficulty concentrating.</p>
                    </div>
                    <div class="space-top"></div>
                    <h2>When to See an Doctor</h2>
                    <div class="single-item-service">                        
                        <p>If you experience severe headaches or a change in your headache pattern, it's essential to consult an ENT Specialist. Seek medical attention if:</p>
                        <i class="fa fa-check" aria-hidden="true"></i><p class="para">Headaches are recurrent and affect your daily life.</p>
                        <i class="fa fa-check" aria-hidden="true"></i><p class="para">Headaches are accompanied by neurological symptoms like visual disturbances.</p>
                        <i class="fa fa-check" aria-hidden="true"></i><p class="para">Our experience a sudden, severe headache, often described as the worst headache of your life.</p>
                    </div>
                    <div class="space-top"></div>
                    <div class="single-item-service">
                        <h3>Treatment</h3>
                        <p>Migraine treatment aims to reduce symptoms and prevent future attacks. Options include:</p>
                        <i class="fa fa-check" aria-hidden="true"></i><p class="para">Over-the-counter pain relievers and other prescription pain relievers.</p>
                        <i class="fa fa-check" aria-hidden="true"></i><p class="para">For individuals with frequent or severe migraines, doctors may prescribe medications to prevent future attacks.</p>
                        <i class="fa fa-check" aria-hidden="true"></i><p class="para">Identifying and avoiding triggers, maintaining a regular sleep schedule, staying hydrated, and managing stress through relaxation techniques can help reduce the frequency of migraines.</p>
                    </div>
                    <div class="space-top"></div>
                    <div class="single-item-service">
                        <h3>Prevention</h3>
                        <p>While complete prevention may not be possible, certain lifestyle changes can help minimize the frequency and severity of migraines:</p>
                        <i class="fa fa-check" aria-hidden="true"></i><p class="para">Keep a migraine diary to identify and avoid potential triggers.</p>
                        <i class="fa fa-check" aria-hidden="true"></i><p class="para">Maintain a regular routine.</p>
                        <i class="fa fa-check" aria-hidden="true"></i><p class="para">Manage stress.</p>
                        <i class="fa fa-check" aria-hidden="true"></i><p class="para">Stay hydrated.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>   
<!-- End Service Inner Section -->
@stop