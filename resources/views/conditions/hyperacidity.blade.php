@extends('layouts.default')            
@section('content') 

<!-- Start BreadCrumbs Design -->
<section class="page-title" style="background-image: url({{ asset('/resources/assets/images/breadcrumb_bg.jpg')}});">
    <div class="auto-container">
        <h2>Hyperacidity</h2>
        <ul class="page-breadcrumb">
            <li><a href="{{route('home')}}">home</a></li>
            <li>Hyperacidity</li>
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
                    <h1>Hyperacidity Treatment in Navi Mumbai</h1>
                    <div class="space-top"></div>
                    <img src="{{ asset('/resources/assets/images/services/hyperacidity.jpg')}}" alt="hyperacidity" class="img-fluid">
                    <div class="space-top"></div>
                    <h2>What is Hyperacidity?</h2>
                    <div class="single-item-service">
                        <p>Hyperacidity, also known as acid reflux or acid indigestion, is a common digestive disorder that occurs when the stomach produces an excess amount of acid. This condition can lead to discomfort and various symptoms, affecting the quality of life for those who experience it.</p>
                    </div>
                    <div class="space-top"></div>
                    <h2>Causes</h2>
                    <div class="single-item-service">
                        <h3>Dietary Factors:</h3>
                        <i class="fa fa-check" aria-hidden="true"></i><p class="para">Consuming spicy or fatty foods.</p>
                        <i class="fa fa-check" aria-hidden="true"></i><p class="para">Overeating or eating large meals.</p>
                        <i class="fa fa-check" aria-hidden="true"></i><p class="para">>Drinking caffeinated or carbonated beverages.</p>
                        <i class="fa fa-check" aria-hidden="true"></i><p class="para">Eating citrus fruits or tomatoes.</p>
                    </div>
                    <div class="space-top"></div>
                    <div class="single-item-service">
                        <h3>Lifestyle Habits:</h3>
                        <i class="fa fa-check" aria-hidden="true"></i><p class="para">Smoking.</p>
                        <i class="fa fa-check" aria-hidden="true"></i><p class="para">Excessive alcohol consumption.</p>
                        <i class="fa fa-check" aria-hidden="true"></i><p class="para">Lack of physical activity.</p>
                    </div>
                    <div class="space-top"></div>
                    <div class="single-item-service">
                        <h3>Medical Conditions:</h3>
                        <i class="fa fa-check" aria-hidden="true"></i><p class="para">Hiatal hernia.</p>
                        <i class="fa fa-check" aria-hidden="true"></i><p class="para">Gastroesophageal reflux disease (GERD).</p>
                        <i class="fa fa-check" aria-hidden="true"></i><p class="para">Peptic ulcers.</p>
                    </div>
                    <div class="space-top"></div>
                    <div class="single-item-service">
                        <h3>Risk Factors</h3>
                        <p>Several factors can increase the risk of developing hyperacidity:</p>
                        <i class="fa fa-check" aria-hidden="true"></i><p class="para">Obesity.</p>
                        <i class="fa fa-check" aria-hidden="true"></i><p class="para">Pregnancy.</p>
                        <i class="fa fa-check" aria-hidden="true"></i><p class="para">Age (elderly individuals may be more prone).</p>
                        <i class="fa fa-check" aria-hidden="true"></i><p class="para">Certain medications, such as nonsteroidal anti-inflammatory drugs (NSAIDs).</p>
                    </div>
                    <div class="space-top"></div>
                    <div class="single-item-service">
                        <h3>Symptoms</h3>
                        <p>Common symptoms of hyperacidity include:</p>
                        <i class="fa fa-check" aria-hidden="true"></i><p class="para">Heartburn (burning sensation in the chest).</p>
                        <i class="fa fa-check" aria-hidden="true"></i><p class="para">Regurgitation (acidic taste in the mouth).</p>
                        <i class="fa fa-check" aria-hidden="true"></i><p class="para">Indigestion.</p>
                        <i class="fa fa-check" aria-hidden="true"></i><p class="para">Nausea.</p>
                        <i class="fa fa-check" aria-hidden="true"></i><p class="para">Bloating.</p>
                        <i class="fa fa-check" aria-hidden="true"></i><p class="para">Burping.</p>
                    </div>
                    <div class="space-top"></div>
                    <h2>When to see an ENT Specialist</h2>
                    <div class="single-item-service">                       
                        <p>If hyperacidity symptoms persist or worsen, seeking medical attention is suggested. Additionally, individuals should see a doctor if they experience:</p>
                        <i class="fa fa-check" aria-hidden="true"></i><p class="para">Difficulty swallowing.</p>
                        <i class="fa fa-check" aria-hidden="true"></i><p class="para">Unexplained weight loss.</p>
                        <i class="fa fa-check" aria-hidden="true"></i><p class="para">Persistent vomiting.</p>
                        <i class="fa fa-check" aria-hidden="true"></i><p class="para">Blood in vomit or stool.</p>
                    </div>
                    <div class="space-top"></div>
                    <div class="single-item-service">
                        <h3>Treatments:</h3>
                        <i class="fa fa-check" aria-hidden="true"></i><p class="para">Dietary changes (avoiding trigger foods), eating smaller, more frequent meals, avoiding lying down after meals, and elevating the head during sleep.</p>
                        <i class="fa fa-check" aria-hidden="true"></i><p class="para">Medications like Antacids, H2 blockers.</p>
                        <i class="fa fa-check" aria-hidden="true"></i><p class="para">In extreme cases, surgical intervention may be recommended to correct underlying issues like hiatal hernias.</p>
                    </div>
                    <div class="space-top"></div>
                    <div class="single-item-service">
                        <h3>Prevention:</h3>
                        <i class="fa fa-check" aria-hidden="true"></i><p class="para">Healthy Eating Habits.</p>
                        <i class="fa fa-check" aria-hidden="true"></i><p class="para">Maintain a healthy weight.</p>
                        <i class="fa fa-check" aria-hidden="true"></i><p class="para">Quit smoking.</p>
                        <i class="fa fa-check" aria-hidden="true"></i><p class="para">Limit alcohol and caffeine intake.</p>
                        <i class="fa fa-check" aria-hidden="true"></i><p class="para">Practice stress-reducing techniques like meditation and yoga.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>   
<!-- End Service Inner Section -->
@stop       