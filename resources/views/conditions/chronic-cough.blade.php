@extends('layouts.default')            
@section('content') 

<!-- Start BreadCrumbs Design -->
<section class="page-title" style="background-image: url({{ asset('/resources/assets/images/breadcrumb_bg.jpg')}});">
    <div class="auto-container">
        <h2>Chronic Cough</h2>
        <ul class="page-breadcrumb">
            <li><a href="{{route('home')}}">home</a></li>
            <li>Chronic Cough</li>
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
                    <h1>Chronic Cough Treatment in Navi Mumbai</h1>
                    <div class="space-top"></div>
                    <img src="{{ asset('/resources/assets/images/services/chronic-cough.jpg')}}" alt="chronic-cough" class="img-fluid">
                    <div class="space-top"></div>
                    <h2>What is Chronic Cough?</h2>
                    <div class="single-item-service">
                        <p>Chronic cough is characterized by a persistent cough that continues for more than eight weeks in adults and four weeks in children. Unlike acute coughs triggered by infections or allergies, chronic cough often requires a thorough investigation to identify and address its underlying cause.</p>
                    </div>
                    <div class="space-top"></div>
                    <div class="single-item-service">
                        <h3>Causes:</h3>
                        <i class="fa fa-check" aria-hidden="true"></i><p class="para">Excessive mucus production in the nasal passages can lead to a chronic cough as the mucus drips down the back of the throat.</p>
                        <i class="fa fa-check" aria-hidden="true"></i><p class="para">Asthma</p>
                        <i class="fa fa-check" aria-hidden="true"></i><p class="para">Chronic Bronchitis</p>
                        <i class="fa fa-check" aria-hidden="true"></i><p class="para">Medication Side Effects</p>
                    </div>
                    <div class="space-top"></div>
                    <div class="single-item-service">
                        <h3>Risk Factors:</h3>
                        <i class="fa fa-check" aria-hidden="true"></i><p class="para">Smoking.</p>
                        <i class="fa fa-check" aria-hidden="true"></i><p class="para">Over exposure to dust, chemicals, or other pollutants in certain work environments can increase the risk of chronic cough.</p>
                        <i class="fa fa-check" aria-hidden="true"></i><p class="para">Chronic cough is more prevalent in older adults.</p>
                    </div>
                    <div class="space-top"></div>
                    <div class="single-item-service">
                        <h3>Symptoms</h3>
                        <p>Aside from the persistent cough, individuals with chronic cough may experience:</p>
                        <i class="fa fa-check" aria-hidden="true"></i><p class="para">Throat irritation.</p>
                        <i class="fa fa-check" aria-hidden="true"></i><p class="para">Hoarseness.</p>
                        <i class="fa fa-check" aria-hidden="true"></i><p class="para">Shortness of breath.</p>
                        <i class="fa fa-check" aria-hidden="true"></i><p class="para">Chest discomfort.</p>
                    </div>
                    <div class="space-top"></div>                    
                    <h2>When to See an Doctor</h2>
                    <div class="single-item-service">
                        <p>It is important to consult an ENT Specialist if:</p>
                        <i class="fa fa-check" aria-hidden="true"></i><p class="para">The cough lasts for more than eight weeks.</p>
                        <i class="fa fa-check" aria-hidden="true"></i><p class="para">The cough is accompanied by blood.</p>
                        <i class="fa fa-check" aria-hidden="true"></i><p class="para">There is difficulty breathing or chest pain.</p>
                        <i class="fa fa-check" aria-hidden="true"></i><p class="para">Other concerning symptoms are present.</p>
                    </div>
                    <div class="space-top"></div>
                    <div class="single-item-service">
                        <h3>Treatment</h3>
                        <p>Treatment options for chronic cough include:</p>
                        <i class="fa fa-check" aria-hidden="true"></i><p class="para">Medications like antihistamines, decongestants, or proton pump inhibitors (for GERD) may be prescribed.</p>
                        <i class="fa fa-check" aria-hidden="true"></i><p class="para">Quitting smoking and avoiding environmental irritants can significantly improve symptoms.</p>
                        <i class="fa fa-check" aria-hidden="true"></i><p class="para">For individuals with chronic cough due to conditions like habitual cough, speech therapy techniques can be beneficial.</p>
                    </div>
                    <div class="space-top"></div>
                    <div class="single-item-service">
                        <h3>Prevention</h3>
                        <p>While not all cases of chronic cough can be prevented, some measures can help reduce the risk:</p>
                        <i class="fa fa-check" aria-hidden="true"></i><p class="para">Quit Smoking.</p>
                        <i class="fa fa-check" aria-hidden="true"></i><p class="para">Avoid Environmental Irritants.</p>
                        <i class="fa fa-check" aria-hidden="true"></i><p class="para">Manage Allergies.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>   
<!-- End Service Inner Section -->
@stop