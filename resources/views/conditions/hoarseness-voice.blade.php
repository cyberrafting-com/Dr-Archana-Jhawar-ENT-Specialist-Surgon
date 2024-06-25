@extends('layouts.default')            
@section('content') 

<!-- Start BreadCrumbs Design -->
<section class="page-title" style="background-image: url({{ asset('/resources/assets/images/breadcrumb_bg.jpg')}});">
    <div class="auto-container">
        <h2>Hoarseness of Voice</h2>
        <ul class="page-breadcrumb">
            <li><a href="{{route('home')}}">home</a></li>
            <li>Hoarseness of Voice</li>
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
                    <h1>Hoarseness of Voice Treatment in Navi Mumbai</h1>
                    <div class="space-top"></div>
                    <img src="{{ asset('/resources/assets/images/services/hoarseness-of-voice.jpg')}}" alt="hoarseness-of-voice" class="img-fluid">
                    <div class="space-top"></div>
                    <h2>What is hoarseness?</h2>
                    <div class="single-item-service">
                        <p>Hoarseness refers to an abnormal change in the voice that results in a rough, harsh, or strained vocal quality. It is often accompanied by difficulty in producing clear and smooth sounds during speech. While it is usually a temporary inconvenience, persistent hoarseness may indicate an underlying health issue.</p>
                    </div>
                    <div class="space-top"></div>
                    <div class="single-item-service">
                        <h3>Causes:</h3>
                        <i class="fa fa-check" aria-hidden="true"></i><p class="para">Excessive use of the vocal cords, such as yelling or screaming.</p>
                        <i class="fa fa-check" aria-hidden="true"></i><p class="para">Vocal Cord Nodules and Polyps(non-cancerous growths on the vocal cords).</p>
                        <i class="fa fa-check" aria-hidden="true"></i><p class="para">Gastroesophageal Reflux Disease (GERD).</p>
                        <i class="fa fa-check" aria-hidden="true"></i><p class="para">Respiratory Infections.</p>
                        <i class="fa fa-check" aria-hidden="true"></i><p class="para">Smoking and Environmental Irritants.</p>
                    </div>
                    <div class="space-top"></div>
                    <div class="single-item-service">
                        <h3>Risk Factors</h3>
                        <p>Several factors increase the risk of developing hoarseness:</p>
                        <i class="fa fa-check" aria-hidden="true"></i><p class="para">Individuals working in professions that involve excessive voice use, such as teachers or singers, may be more prone to hoarseness.</p>
                        <i class="fa fa-check" aria-hidden="true"></i><p class="para">Aging can result in changes to the vocal cords, making older adults more susceptible to hoarseness.</p>
                        <i class="fa fa-check" aria-hidden="true"></i><p class="para">Underlying health issues.</p>
                    </div>
                    <div class="space-top"></div>
                    <div class="single-item-service">
                        <h3>Symptoms</h3>
                        <p>Aside from the characteristic roughness in the voice, individuals experiencing hoarseness may also notice:</p>
                        <i class="fa fa-check" aria-hidden="true"></i><p class="para">Voice fatigue or weakness.</p>
                        <i class="fa fa-check" aria-hidden="true"></i><p class="para">Difficulty swallowing.</p>
                        <i class="fa fa-check" aria-hidden="true"></i><p class="para">Throat pain or discomfort.</p>
                        <i class="fa fa-check" aria-hidden="true"></i><p class="para">Coughing or clearing the throat frequently.</p>
                    </div>
                    <div class="space-top"></div>                    
                    <h2>When to see an ENT Specialist</h2>
                    <div class="single-item-service">
                        <p>While hoarseness often resolves on its own, it's essential to consult an ENT Specialist if:</p>
                        <i class="fa fa-check" aria-hidden="true"></i><p class="para">Hoarseness persists for more than two weeks.</p>
                        <i class="fa fa-check" aria-hidden="true"></i><p class="para">There is difficulty breathing or swallowing.</p>
                        <i class="fa fa-check" aria-hidden="true"></i><p class="para">Unexpected weight loss accompanies hoarseness.</p>
                        <i class="fa fa-check" aria-hidden="true"></i><p class="para">Blood appears in saliva or phlegm.</p>
                    </div>
                    <div class="space-top"></div>
                    <h2>Treatment</h2>
                    <div class="single-item-service">
                        <h3>The treatment for hoarseness depends on the underlying cause.</h3>
                        <p>Common approaches include:</p>
                        <i class="fa fa-check" aria-hidden="true"></i><p class="para">Vocal Rest.</p>
                        <i class="fa fa-check" aria-hidden="true"></i><p class="para">Hydration.</p>
                        <i class="fa fa-check" aria-hidden="true"></i><p class="para">Anti-reflux medications or antibiotics may be prescribed.</p>
                        <i class="fa fa-check" aria-hidden="true"></i><p class="para">Speech Therapy.</p>
                    </div>
                    <div class="space-top"></div>
                    <div class="single-item-service">
                        <h3>Prevention</h3>
                        <p>To prevent hoarseness and maintain vocal health:</p>
                        <i class="fa fa-check" aria-hidden="true"></i><p class="para">Stay Hydrated.</p>
                        <i class="fa fa-check" aria-hidden="true"></i><p class="para">Avoid Irritants.</p>
                        <i class="fa fa-check" aria-hidden="true"></i><p class="para">In situations where speaking loudly is necessary, consider using a microphone to reduce strain.</p>
                        <i class="fa fa-check" aria-hidden="true"></i><p class="para">Practice Good Vocal Hygiene.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>   
<!-- End Service Inner Section -->
@stop