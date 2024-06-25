@extends('layouts.default')            
@section('content') 

<!-- Start BreadCrumbs Design -->
<section class="page-title" style="background-image: url({{ asset('/resources/assets/images/breadcrumb_bg.jpg')}});">
    <div class="auto-container">
        <h2>Vertigo Clinic in Vashi, Navi Mumbai</h2>
        <ul class="page-breadcrumb">
            <li><a href="{{route('home')}}">home</a></li>
            <li>Vertigo Clinic in Vashi, Navi Mumbai</li>  
        </ul>
    </div>
</section>   
<!-- End BreadCrumbs Design -->    

<!-- <section class="heading-design">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-12">
                <h2>Vertigo Clinic in Vashi, Navi Mumbai</h2>
            </div>
        </div>
    </div>
</section> -->

<div class="space-top"></div>

<!-- Vertigo blocks -->
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="single-latest-properties">
                    <div class="property-img">
                    <a href="#">
                        <img src="{{ asset('/resources/assets/images/services/vertigo-service.jpg')}}" alt="vertigo-service">
                        <div class="property_overlay"></div>
                    </a>
                    <div class="pro-info">
                        <h3 class="text-center">vertigo</h3>
                        <p class="text-center text-white">Vertigo is a sensation of spinning or whirling, often accompanied by nausea, vomiting, and difficulty with balance. It is usually caused by inner ear problems or issues with the vestibular system, which controls balance.</p>
                    </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mt-lg-0 mt-md-0 mt-5">
                <div class="single-latest-properties">
                    <div class="property-img">
                    <a href="#">
                        <img src="{{ asset('/resources/assets/images/services/dizziness-treatment.jpg')}}" alt="dizziness-treatment">
                        <div class="property_overlay"></div>
                    </a>
                    <div class="pro-info">
                        <h3 class="text-center">Dizziness</h3>
                        <p class="text-center text-white">Dizziness refers to a feeling of lightheadedness, faintness, or unsteadiness. It can be caused by various factors, including dehydration, low blood sugar, inner ear disorders, or changes in blood pressure.</p>
                    </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mt-lg-0 mt-md-0 mt-5">
                <div class="single-latest-properties">
                    <div class="property-img">
                    <a href="#">
                        <img src="{{ asset('/resources/assets/images/services/imbalance.jpg')}}" alt="imbalance">
                        <div class="property_overlay"></div>
                    </a>
                    <div class="pro-info">
                        <h3 class="text-center">Imbalance</h3>
                        <p class="text-center text-white">Imbalance involves difficulty in maintaining stability and coordination while standing, walking, or performing other activities. It can be caused by problems with the inner ear, sensory nerve damage, muscle weakness, or neurological conditions.</p>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>   

<div class="space-top"></div>

<!-- Request Consultation -->
<section class="cat-appointment">
    <div class="container-fluid">
        <div class="row text-center">
            <div class="col-lg-12 col-md-12 col-12"> 
                <h2 class="pb-3">Vertigo is common among the elderly</h2>
                <h3>Specialized attention and care are needed to manage it effectively</h3>
                <a href="tel:+919322229159">Book Appointment</a>
            </div>
        </div>
    </div>
</section>

<div class="space-top"></div>

<!-- Common Conditions Treated -->
<section>                
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-12">
                <div class="main-title main-title1">
                    <h2>Common Conditions Treated</h2>
                    <p>Our Vertigo Clinic in Vashi Navi Mumbai is equipped to handle a broad spectrum of inner ear balance problems. The following are some of the common conditions we specialize in:</p>
                </div>
            </div>
        </div>
        <div class="row d-flex justify-content-center">   
            <div class="col-lg-8 col-md-8 col-12">
                <div class="cat-condition">
                    <h3>Benign Paroxysmal Positional Vertigo (BPPV):</h3>
                    <p><i class="fa fa-check" aria-hidden="true"></i>Diagnosis through comprehensive assessments.</p>
                    <p><i class="fa fa-check" aria-hidden="true"></i>Tailored treatment plans, often involving repositioning maneuvers.</p>
                </div>
            </div>
            <div class="col-lg-8 col-md-8 col-12 mt-5">
                <div class="cat-condition">
                    <h3>Vestibular Neuritis Labyrinthitis :</h3>
                    <p><i class="fa fa-check" aria-hidden="true"></i>In-depth evaluations to determine the extent of inner ear inflammation.</p>
                    <p><i class="fa fa-check" aria-hidden="true"></i>Treatment strategies aimed at alleviating symptoms and promoting recovery.</p>
                </div>
            </div>
            <div class="col-lg-8 col-md-8 col-12 mt-5">
                <div class="cat-condition">
                    <h3>Migraine Associated Dizziness:</h3>
                    <p><i class="fa fa-check" aria-hidden="true"></i>Identification of migraine triggers contributing to vestibular symptoms.</p>
                    <p><i class="fa fa-check" aria-hidden="true"></i>Collaborative approach with neurologists for comprehensive migraine management.</p>
                </div>
            </div>
            <div class="col-lg-8 col-md-8 col-12 mt-5">
                <div class="cat-condition">
                    <h3>Falls and Fear of Falling in the Elderly:</h3>
                    <p><i class="fa fa-check" aria-hidden="true"></i>Specialized assessments addressing age-related balance concerns.</p>
                    <p><i class="fa fa-check" aria-hidden="true"></i>Implementation of targeted interventions to reduce the risk of falls.</p>
                </div>
            </div>
            <div class="col-lg-8 col-md-8 col-12 mt-5">
                <div class="cat-condition">
                    <h3>Balance Problems and Dizziness Following Stroke:</h3>
                    <p><i class="fa fa-check" aria-hidden="true"></i>Comprehensive evaluations to understand the impact of stroke on vestibular function.</p>
                    <p><i class="fa fa-check" aria-hidden="true"></i>Rehabilitation programs tailored to address balance challenges post-stroke.</p>
                </div>
            </div>
            <div class="col-lg-8 col-md-8 col-12 mt-5">
                <div class="cat-condition">
                    <h3>Multiple Sclerosis (MS):</h3>
                    <p><i class="fa fa-check" aria-hidden="true"></i>Ongoing monitoring and management of vestibular symptoms associated with MS.</p>
                    <p><i class="fa fa-check" aria-hidden="true"></i>Integration of physiotherapy to enhance overall functional abilities.</p>
                </div>
            </div>
            <div class="col-lg-8 col-md-8 col-12 mt-5">
                <div class="cat-condition">
                    <h3>Parkinson's Disease:</h3>
                    <p><i class="fa fa-check" aria-hidden="true"></i>Evaluation of vestibular symptoms in the context of Parkinson's disease.</p>
                    <p><i class="fa fa-check" aria-hidden="true"></i>Coordination of care with neurologists for holistic Parkinson's management.</p>
                </div>
            </div>
            <div class="col-lg-8 col-md-8 col-12 mt-5">
                <div class="cat-condition">
                    <h3>Whiplash Injury:</h3>
                    <p><i class="fa fa-check" aria-hidden="true"></i>Specialized assessments to identify vestibular implications of whiplash injuries.</p>
                    <p><i class="fa fa-check" aria-hidden="true"></i>Targeted rehabilitation exercises to address balance issues arising from such injuries.</p>
                </div>
            </div>
            <div class="col-lg-8 col-md-8 col-12 mt-5">
                <div class="cat-condition">
                    <h3>Cervical Arthritis:</h3>
                    <p><i class="fa fa-check" aria-hidden="true"></i>Examination of the impact of cervical arthritis on vestibular function.</p>
                    <p><i class="fa fa-check" aria-hidden="true"></i>Development of customized strategies to manage associated balance problems.</p>
                </div>
            </div>
            <div class="col-lg-8 col-md-8 col-12 mt-5">
                <div class="cat-condition">
                    <h3>Resection after Acoustic Neuroma:</h3>
                    <p><i class="fa fa-check" aria-hidden="true"></i>Postoperative care tailored to address vestibular challenges post-acoustic neuroma resection.</p>
                    <p><i class="fa fa-check" aria-hidden="true"></i>Collaboration with ENT specialists for comprehensive recovery support.</p>
                </div>
            </div>
            <div class="col-lg-8 col-md-8 col-12 mt-5">
                <div class="cat-condition">
                    <h3>Meniere’s Disease:</h3>
                    <p><i class="fa fa-check" aria-hidden="true"></i>Diagnosis through a combination of audiological and vestibular assessments.</p>
                    <p><i class="fa fa-check" aria-hidden="true"></i>Treatment plans focusing on symptom management and improving quality of life.</p>
                </div>
            </div>
        </div>               
    </div>    
</section>                    

<div class="space-top"></div>

<!-- Why Neoalta -->
<section class="sec-clinic">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-lg-8 col-md-8 col-12">
                <div class="cat-clinic">
                    <h2>Why Neoalta, Navi Mumbai Vertigo clinic</h2>
                    <div class="cat-clinic-icon">
                        <i class="fa fa-check" aria-hidden="true"></i><p>Equipped with advance audiology / balance equipment and expertise such as Video nystagmography (VNG), Dynamic Posturography, Video HIT etc.</p>
                        <i class="fa fa-check" aria-hidden="true"></i><p>Dr. Archana Jhawar ENT and Vestibular Specialist has advanced training and expertise in the diagnosis and treatment of vertigo and balance disorders.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>  

<div class="space-top"></div>

<!-- Request Consultation Design Form-->
<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-12 d-flex align-self-center">
                <div class="cat-consult">
                    <h3>Request Consultation</h3>
                    <h5>Call us Now</h5>
                    <a href="tel:+919322229159"><i class="fa fa-phone" aria-hidden="true"></i>+91-9322229159</a>
                </div>  
            </div>
            <div class="col-lg-6 col-md-6 col-12">
                @include('includes.book-appointment-form-design')
            </div>
        </div>
    </div>
</section>

<div class="space-top"></div>

<!-- Common Conditions Treated -->
<section>                
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-12">
                <div class="main-title main-title1">
                    <h2>Balance tests/Vertigo Evaluation Tests Key Points</h2>
                </div>
            </div>
        </div> 
        <div class="row d-flex justify-content-center">
            <div class="col-lg-9 col-md-9 col-12">
                <div class="feature-container feature-bx3">
                    <p>If you are having spinning sensation, experience dizziness or unsteadiness or trouble maintaining your balance you may be a candidate for balance testing.</p>
                </div>
            </div>
            <div class="col-lg-9 col-md-9 col-12 mt-5">
                <div class="feature-container feature-bx3">
                    <p>Your neuro-otologist may order a balance assessment test to diagnose a variety of balance disorders such as benign paroxysmal positional vertigo, Meniere’s disease, vestibular neuritis, migraines, or head injury.</p>
                </div>
            </div>
            <div class="col-lg-9 col-md-9 col-12 mt-5">
                <div class="feature-container feature-bx3">
                    <p>A balance assessment test or Vestibular assessment is a series of tests to help diagnose balance disorders.</p>
                </div>
            </div>
            <div class="col-lg-9 col-md-9 col-12 mt-5">
                <div class="feature-container feature-bx3">
                    <p>Your tailored treatment plan will depend on which balance disorder you have. Treatment can range from medicines to vestibular rehab. In the most severe cases, you may need surgery.</p>
                </div>
            </div>
        </div>           
    </div>    
</section>  

<div class="space-top"></div>

<!-- Balance Tests Includes -->
<section class="sec-balance-test">                
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-12">
                <div class="main-title main-title1">
                    <h2>Balance Tests Includes</h2>
                    <p>Your exact experience and balance tests will vary based on your symptoms.</p>
                </div>
            </div>
        </div>
        <div class="row d-flex justify-content-center">   
            <div class="col-lg-9 col-md-9 col-12">
                <div class="cat-balance-test">
                    <h3>VNG-Video Nystagmography</h3>
                    <p>Most widely used test is VNG which measures eye movement to evaluate inner ear balance organs and to diagnose.</p>  
                </div>
            </div>
            <div class="col-lg-9 col-md-9 col-12 mt-5">
                <div class="cat-balance-test">
                    <h3>How VNG is performed</h3>
                    <p>Specialised glasses are used to record eye movement. You will be seated in a dark room in front of a TV screen. A dot will appear and you have to follow the dots with your eyes.</p>
                    <p>Your balance care provide will move your head and different positional tests are performed to observe and record its effect on eye movement for evaluation.</p>
                    <p>Water of different temperature is poured in the ear to see the reaction and recorded.</p>
                </div>
            </div>
        </div>               
    </div>    
</section>

<!--  -->
<section class="sec-balance-test sec-balance-test1">                
    <div class="container">
        <div class="row d-flex justify-content-center">   
            <div class="col-lg-9 col-md-9 col-12">
                <div class="cat-balance-test">
                    <h3>Computerized Dynamic Posturography</h3>
                    <p>Computerized Dynamic Posturography (CDP) evaluates balance and stability by measuring body movements in response to sensory input. During the test, you'll stand on a platform equipped with sensors while performing various tasks to assess your balance control mechanisms. Results help diagnose vestibular disorders and guide treatment strategies.</p>  
                </div>
            </div>
            <div class="col-lg-9 col-md-9 col-12 mt-5">
                <div class="cat-balance-test">
                    <h3>Video Head Impulse Test</h3>     
                    <p>The Video Head Impulse Test (vHIT) assesses the function of the vestibulo-ocular reflex (VOR) by tracking eye movements in response to rapid head movements. During the test, you'll wear lightweight goggles with built-in cameras while the examiner delivers quick head impulses. This helps diagnose vestibular disorders like vestibular neuritis and aids in understanding how well your eyes can stabilize during head movements.</p> 
                </div>
            </div>
            <div class="col-lg-9 col-md-9 col-12 mt-5">
                <div class="cat-balance-test">
                    <h3>Electrocochleography / CVEMP / OVEMP</h3>     
                    <p>Electrocochleography (ECoG), Cervical Vestibular-Evoked Myogenic Potentials (cVEMP), and Ocular Vestibular-Evoked Myogenic Potentials (oVEMP) are tests used to assess the electrical activity of the inner ear. Electrodes are placed on the skin or inside the ear canal to measure responses to sound or neck/eye muscle stimulation. These tests aid in diagnosing conditions like Meniere's disease by evaluating cochlear and vestibular function.</p> 
                </div>
            </div>
        </div>               
    </div>    
</section>

<div class="space-top"></div>

<!-- Clinical Tests for Vertigo Include -->
<section class="">                
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-12">
                <div class="main-title main-title1">
                    <h2>Clinical Tests for Vertigo Include</h2>
                </div>
            </div>
        </div>
        <div class="row d-flex justify-content-center">   
            <div class="col-lg-9 col-md-9 col-12">
            <div class="faq-info">
                    <div class="accordion accordion-flush" id="accordionFlushExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingOne">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                Head Impulse Test
                                </button>
                            </h2>
                            <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample" style="">
                                <div class="accordion-body">
                                    <p>The Head Impulse Test evaluates the function of the vestibulo-ocular reflex (VOR) by rapidly turning the patient's head while they focus on a target. The examiner observes for any corrective eye movements, helping diagnose vestibular disorders such as vestibular neuritis or benign paroxysmal positional vertigo (BPPV).</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                Saccades/Smooth Pursuits/Optokinetic Tests-Nystagmus
                                </button>
                            </h2>
                            <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <p>These tests assess eye movements and coordination. Saccades measure rapid eye movements between fixed points, while Smooth Pursuits evaluate tracking of moving objects. Optokinetic tests stimulate nystagmus by presenting moving visual stimuli. These tests aid in diagnosing neurological disorders affecting eye movement control.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                Romberg's Test
                                </button>
                            </h2>
                            <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <p>The Romberg's test evaluates proprioception and balance control. Patients stand with feet together and eyes closed while the examiner observes for swaying or loss of balance. This test helps diagnose sensory ataxia or vestibular dysfunction by comparing balance with eyes open versus closed.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-heading4">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse4" aria-expanded="false" aria-controls="flush-collapse4">
                                Dix-Hallpike Maneuver
                                </button>
                            </h2>
                            <div id="flush-collapse4" class="accordion-collapse collapse" aria-labelledby="flush-heading4" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <p>The Dix-Hallpike Maneuver assesses benign paroxysmal positional vertigo (BPPV) by eliciting vertigo and nystagmus with specific head and body movements. The patient is quickly moved from a seated to a supine position, with the head turned to the side. The presence and direction of nystagmus indicate which ear is affected.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-heading5">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse5" aria-expanded="false" aria-controls="flush-collapse5">
                                McClure Pagnini Test
                                </button>
                            </h2>
                            <div id="flush-collapse5" class="accordion-collapse collapse" aria-labelledby="flush-heading5" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <p>The McClure Pagnini Test evaluates vestibular function by assessing eye movements while the patient is rotated in a chair. The examiner observes for any nystagmus or dizziness during the rotation. This test aids in diagnosing vestibular disorders such as Meniere's disease or vestibular migraine.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>               
    </div>    
</section>

<div class="space-top"></div>

<!-- What Causes Vertigo / Dizziness -->
<section class="sec-balance-test sec-balance-test1">                
    <div class="container">
        <div class="row d-flex justify-content-center"> 
            <div class="col-lg-9 col-md-9 col-12">
                <div class="cat-balance-test">
                    <h3>What Causes Vertigo / Dizziness?</h3>  
                    <h4>One of the most common causes of dizziness and vertigo is an underlying inner ear problem.</h4>   
                    <p>With an inner ear disorder, the nerves send the brain conflicting signals that aren’t aligned with what the eyes and sensory nerves receive. The brain responds by attempting to sort out the inconsistencies, and the resulting effect is vertigo.</p> 
                    <p>Imbalance, dizziness, or spinning can be due to varied causes related to Ear, Eyes, Brain, Muscles and Joints such as Positional vertigo, Meniere’s disease, Vestibular Migraine, Stroke, Ischemia, head trauma or acoustic tumour.</p>
                </div>
            </div>
            <div class="col-lg-9 col-md-9 col-12 mt-5">
                <div class="cat-balance-test">
                    <h3>Vertigo and Balance Disorders</h3>     
                    <p>Vertigo and balance disorders can significantly impact your daily life, affecting your ability to walk and participate in activities you love. Moreover, they pose a risk of falls and accidents.</p> 
                    <p>Fortunately, balance testing and vestibular rehabilitation can help identify the underlying causes of your balance problems and assist your healthcare providers in establishing an effective treatment plan tailored to your needs.</p>
                </div>
            </div>
        </div>               
    </div>    
</section>

<div class="space-top"></div>

<!--  -->
<div class="container">
    <div class="row d-flex justify-content-center">
            <div class="col-lg-9 col-md-9 col-12">
                <div class="main-title main-title1" style="margin: unset;">
                    <h2>Neoalta Vertigo Clinic in Vashi, Navi Mumbai is fully equipped to handle such conditions.</h2>
                </div>
            </div>
        </div>
    <div class="row d-flex justify-content-center">
        <div class="col-lg-9 col-md-9 col-12 cat-book-apt text-center p-5">
            <a href="tel:+919322229159" class="button btn-3">Book an Appointment Now</a>
        </div>
    </div>
</div>

<div class="space-top"></div>

@stop            