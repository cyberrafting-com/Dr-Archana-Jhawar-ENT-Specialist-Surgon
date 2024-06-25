@extends('layouts.default')            
@section('content') 

<!-- Start BreadCrumbs Design -->
<section class="page-title" style="background-image: url({{ asset('/resources/assets/images/breadcrumb_bg.jpg')}});">
    <div class="auto-container">
        <h2>Hearing Loss Management & Hearing Aids</h2>
        <ul class="page-breadcrumb">
            <li><a href="{{route('home')}}">home</a></li>
            <li>Hearing Loss Management & Hearing Aids</li>
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
                    <h1>Hearing Loss Management & Hearing Aids in Navi Mumbai</h1>
                    <div class="space-top"></div>
                    <img src="{{ asset('/resources/assets/images/services/hearing-loss-management-and-hearing-aids.jpg')}}" alt="hearing-loss-management-and-hearing-aids">
                    <div class="space-top"></div>
                    <h2>What is Hearing Loss?</h2>
                    <div class="single-item-service">
                        <p>Hearing loss, also known as hearing impairment or deafness, refers to a partial or total inability to hear sounds. It can affect one or both ears and may occur gradually over time or suddenly. Hearing loss is a common condition that can impact people of all ages, and its severity can vary widely.</p>
                    </div>
                    <div class="space-top"></div>
                    <div class="single-item-service">
                        <h3>Causes of Hearing Loss:</h3>
                        <i class="fa fa-check" aria-hidden="true"></i><p class="para">Gradual hearing loss associated with aging.</p>
                        <i class="fa fa-check" aria-hidden="true"></i><p class="para">Noise-induced Hearing Loss.</p>
                        <i class="fa fa-check" aria-hidden="true"></i><p class="para">Some individuals may have a genetic predisposition to hearing loss.</p>
                        <i class="fa fa-check" aria-hidden="true"></i><p class="para">Infections and Diseases.</p>
                        <i class="fa fa-check" aria-hidden="true"></i><p class="para">Head injuries or physical trauma to the ear can cause hearing loss.</p>
                    </div>
                    <div class="space-top"></div>
                    <div class="single-item-service">
                        <h3>Risk Factors</h3>
                        <p>Certain factors may increase the likelihood of developing hearing loss:</p>
                        <i class="fa fa-check" aria-hidden="true"></i><p class="para">Exposure to Loud Noise.</p>
                        <i class="fa fa-check" aria-hidden="true"></i><p class="para">A family history of hearing loss.</p>
                        <i class="fa fa-check" aria-hidden="true"></i><p class="para">Conditions like diabetes, cardiovascular disease, and ototoxic medications.</p>
                        <i class="fa fa-check" aria-hidden="true"></i><p class="para">The risk of hearing loss increases with age.</p>
                    </div>
                    <div class="space-top"></div>
                    <div class="single-item-service">
                        <h3>Symptoms of Hearing Loss</h3>
                        <p>Common symptoms of hearing loss are:</p>
                        <i class="fa fa-check" aria-hidden="true"></i><p class="para">Difficulty Understanding Spoken Words.</p>
                        <i class="fa fa-check" aria-hidden="true"></i><p class="para">Needing others to repeat themselves regularly.</p>
                        <i class="fa fa-check" aria-hidden="true"></i><p class="para">Gradually raising the volume of electronic devices.</p>
                        <i class="fa fa-check" aria-hidden="true"></i><p class="para">Avoidance of Social Settings.</p>
                    </div>
                    <div class="space-top"></div>
                    <h2>When to see an ENT Specialist</h2>
                    <div class="single-item-service">                        
                        <p>If you or a loved one experience any signs of hearing loss, seeking professional help is essential. Consult an ENT Specialist or an audiologist if:</p>
                        <i class="fa fa-check" aria-hidden="true"></i><p class="para">Sudden Hearing Loss Occurs.</p>
                        <i class="fa fa-check" aria-hidden="true"></i><p class="para">Gradual Hearing Loss.</p>
                        <i class="fa fa-check" aria-hidden="true"></i><p class="para">Ear Pain or Discharge.</p>
                    </div>
                    <div class="space-top"></div>
                    <div class="single-item-service">
                        <h3>Treatment</h3>
                        <p>Treatment options include:</p>
                        <i class="fa fa-check" aria-hidden="true"></i><p class="para">Antibiotics for ear infections or managing underlying medical conditions.</p>
                        <i class="fa fa-check" aria-hidden="true"></i><p class="para">Surgical interventions for structural issues in the ear.</p>
                        <i class="fa fa-check" aria-hidden="true"></i><p class="para">For individuals with permanent hearing loss, hearing aids are a common and effective solution.</p>
                    </div>
                    <div class="space-top"></div>
                    <div class="single-item-service">
                        <h3>Prevention</h3>
                        <p>While some causes of hearing loss are unavoidable, several preventive measures can reduce the risk:</p>
                        <i class="fa fa-check" aria-hidden="true"></i><p class="para">Protect Your Ears.</p>
                        <i class="fa fa-check" aria-hidden="true"></i><p class="para">Regular Hearing Check-ups.</p>
                        <i class="fa fa-check" aria-hidden="true"></i><p class="para">Control conditions like diabetes and cardiovascular disease that can contribute to hearing loss.</p>
                        <i class="fa fa-check" aria-hidden="true"></i><p class="para">Avoid Ototoxic Substances.</p>
                    </div>
                    <div class="space-top"></div>
                    <h2>Hearing Aids</h2>
                    <div class="single-item-service">
                        <i class="fa fa-check" aria-hidden="true"></i><p class="para">Hearing aids are instrumental in managing hearing loss and enhancing the quality of life for those affected.</p>
                        <i class="fa fa-check" aria-hidden="true"></i><p class="para">Modern hearing aids are discreet, technologically advanced, and customizable to individual needs.</p>
                        <i class="fa fa-check" aria-hidden="true"></i><p class="para">They work by amplifying sounds, making it easier for individuals with hearing loss to engage in conversations and enjoy various activities.</p>
                        <i class="fa fa-check" aria-hidden="true"></i><p class="para">Choosing the right hearing aid depends on factors such as the degree of hearing loss, lifestyle, and personal preferences.</p>
                        <!-- <p>Hearing aids are instrumental in managing hearing loss and enhancing the quality of life for those affected. Modern hearing aids are discreet, technologically advanced, and customizable to individual needs. They work by amplifying sounds, making it easier for individuals with hearing loss to engage in conversations and enjoy various activities. Choosing the right hearing aid depends on factors such as the degree of hearing loss, lifestyle, and personal preferences.</p> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>   
<!-- End Service Inner Section -->
@stop