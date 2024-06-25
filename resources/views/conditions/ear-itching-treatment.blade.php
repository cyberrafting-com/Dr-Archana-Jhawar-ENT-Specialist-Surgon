@extends('layouts.default')            
@section('content') 

<!-- Start BreadCrumbs Design -->
<section class="page-title" style="background-image: url({{ asset('/resources/assets/images/breadcrumb_bg.jpg')}});">
    <div class="auto-container">
        <h2>Ear Itching / Otomycosis / Otitis Externa Treatment</h2>
        <ul class="page-breadcrumb">
            <li><a href="{{route('home')}}">home</a></li>
            <li>Ear Itching / Otomycosis / Otitis Externa Treatment</li>
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
                    @include('includes.ear-conditions-sidebar')  
                </div>
            </div>
            <div class="col-lg-8 col-md-8 col-12">
                <div class="cat-services">
                    <h1>Ear Itching /Otomycosis / Otitis Externa Treatment In Navi Mumbai</h1>
                    <div class="space-top"></div>
                    <img src="{{ asset('/resources/assets/images/services/ear-itching-otomycosis-otitis-externa-treatment.jpg')}}" alt="ear-itching-otomycosis-otitis-externa-treatment" class="img-fluid">
                    <div class="space-top"></div>
                    <h2>Ear itching</h2>
                    <div class="single-item-service">
                        <p>Ear itching can be a disturbing and sometimes alarming symptom many individuals experience. In some cases, it may be associated with conditions like otomycosis (fungal infection of the ear) or otitis externa (the inflammation of the external ear canal).</p>
                    </div>
                    <div class="space-top"></div>
                    <h2>Causes</h2>  
                    <div class="single-item-service">
                        <p>Ear itching can result from various factors, including excessive moisture, allergies, skin conditions, or foreign objects. However, otomycosis and otitis externa are two common conditions contributing to ear itching.</p>
                    </div>
                    <div class="space-top"></div>
                    <div class="single-item-service">
                        <h3>Otomycosis:</h3>         
                        <i class="fa fa-check" aria-hidden="true"></i><p class="para">Otomycosis is a fungal infection of the ear where fungi invade the external ear canal. Fungi like Candida or Aspergillus are often responsible for this condition. Itching, redness, ear pain, and a sensation of fullness in the ear are the main symptoms of this condition.</p>
                    </div> 
                    <div class="space-top"></div>
                    <div class="single-item-service">
                        <h3>Otitis Externa:</h3>         
                        <i class="fa fa-check" aria-hidden="true"></i><p class="para">Otitis externa is the inflammation of the external ear canal, commonly known as the swimmer's ear. Bacterial or fungal infections, often triggered by water exposure, abrasions, or moisture retention, are the causative factors of this condition.</p>
                        <i class="fa fa-check" aria-hidden="true"></i><p class="para">Ear itching, pain, swelling, and sometimes discharge from the ear are the symptoms of this condition.</p>
                    </div> 
                    <div class="space-top"></div>
                    <div class="single-item-service">
                        <h3>Symptoms:</h3> 
                        <p>The main symptom of ear itching is, of course, an uncomfortable sensation of itching within or around the ear. However, depending on the underlying cause, additional symptoms may accompany ear itching. Here are some common symptoms associated with ear itching:</p>        
                        <i class="fa fa-check" aria-hidden="true"></i><p class="para">Redness of the ear</p>
                        <i class="fa fa-check" aria-hidden="true"></i><p class="para">Swelling of the ear canal or the surrounding area</p>
                        <i class="fa fa-check" aria-hidden="true"></i><p class="para">Changes in Hearing</p>
                    </div> 
                    <div class="space-top"></div>
                    <h2>When to see an doctor</h2>
                    <div class="single-item-service"> 
                        <p>If you experience persistent or worsening ear itching, it's essential to consult a ENT Specialist. Seek immediate medical care if there's severe pain, hearing loss, or discharge.</p>
                    </div>
                    <div class="space-top"></div>
                    <div class="single-item-service">
                        <h3>Prevention:</h3>       
                        <i class="fa fa-check" aria-hidden="true"></i><p class="para">Gently clean ears with a washcloth. Do not insert unnecessary objects into the ear canal.</p>
                        <i class="fa fa-check" aria-hidden="true"></i><p class="para">After swimming or showering, tilt your head to help water drain from the ear. Use a hairdryer on a low setting to ensure dry ears.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Service Inner Section -->
@stop