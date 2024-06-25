
@extends('layouts.default')            
@section('content') 

<!-- Start Breadcrumbs Design -->
<section class="page-title" style="background-image: url({{ asset('/resources/assets/images/breadcrumb_bg.jpg')}});"">
    <div class="auto-container">
        <h2>About</h2>
        <ul class="page-breadcrumb">
            <li><a href="{{route('home')}}">home</a></li>
            <li>About</li>  
        </ul>
    </div>
</section>
<!-- End Breadcrumbs Design -->

<div class="space-top"></div>

<!-- Start About Us Design -->
<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-12 order-lg-1 order-md-1 order-2">
                <div class="cat-about">
                    <h2>Dr. Archana Jhawar</h2> 
                    <i class="fa fa-angle-double-right"></i><h3>MBBS M.S. E.N.T</h3>
                    <i class="fa fa-angle-double-right"></i><h3>Senior ENT Specialist & Surgeon</h3>
                    <i class="fa fa-angle-double-right"></i><h3>Consultant Doctor at Neoalta Clinic, Vashi</h3>
                    <i class="fa fa-angle-double-right"></i><h3>Consultant Doctor at Kokilaben Dhirubhai Ambani Hospital, Navi Mumbai (formerly Reliance Hospital)</h3>
                    <!-- <h3><i class="fa fa-long-arrow-right" style="padding-right:10px;"></i>Neoalta ENT Clinic, Vashi, Navi Mumbai</h3>
                    <h3><i class="fa fa-long-arrow-right" style="padding-right:10px;"></i>Kokilaben Dhirubhai Ambani Hospital, Navi Mumbai (formerly Reliance Hospital)</h3> -->
                    <p class="pt-4">Dr Archana Jhawar, senior ENT specialist with 23 years’ experience offers accurate diagnosis as well as medical and surgical treatment of Ear, Nose and Throat related various problems like Ear Pain, Ear Infections, Nasal Allergies, Sinus Problems, Hearing Problems, Throat Infections, Vertigo, Tinnitus and Surgeries of Ear, Adenoids, Nose and Sinus. She consults at Neoalta Clinic Vashi/Seawoods & Kokilaben Dhirubhai Ambani Hospital, Koparkhairane, Navi Mumbai (formerly Reliance Hospital). She is secretary Association of Otorhinolaryngologist, Navi Mumbai & Raigad.</p>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-12 order-lg-2 order-md-2 order-1">
                <div class="image_boxes style_one">
                    <div class="image one img-border">
                        <img src="{{ asset('/resources/assets/images/neoalta-clinic-img.jpg')}}" class="img-fluid" alt="">
                    </div>
                    <div class="year_of_experience">
                        <div class="year">
                            23<sup>+</sup>
                        </div>
                        <div class="content">
                            <h2> Years Of Experience</h2>                            
                        </div>
                    </div>
                </div> 
            </div>       
        </div>
    </div>
</section>   
<!-- End About Us Design -->

<!-- Start Doctors Area -->
<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-12">
                <div class="pricing-table wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
                    <div class="inner-box">
                        <div class="title"></div>
                        <div class="price-box">
                            <div class="price">Area of Expertise</div>
                        </div>

                        <div class="table-content">
                            <ul>
                                <i class="fa fa-bullseye" aria-hidden="true"></i><li>Endoscopic Nose & Sinus Surgeries (FESS) –Sinusitis, Nasal Polyp and Endo DCR.</li>
                                <i class="fa fa-bullseye" aria-hidden="true"></i><li>Snoring & Sleep Apnea Management.</li>
                                <i class="fa fa-bullseye" aria-hidden="true"></i><li>Tinnitus & Vertigo Clinic.</li>
                                <i class="fa fa-bullseye" aria-hidden="true"></i><li>Pediatric ENT.</li>
                                <i class="fa fa-bullseye" aria-hidden="true"></i><li>Microscopic Ear Surgeries for Deafness (Tympanoplasty & Stapes Surgeries), Mastoid Surgeries.</li>
                                <i class="fa fa-bullseye" aria-hidden="true"></i><li>Routine & LASER Tonsil & Adenoid surgeries.</li>
                                <i class="fa fa-bullseye" aria-hidden="true"></i><li>Hearing and Balance Disorder Management.</li>
                                <i class="fa fa-bullseye" aria-hidden="true"></i><li>Microscopic Ear Surgeries for Deafness and Ear Discharge Myringotomy, Stapedectomy, Tympanoplasty, Ossiculoplasty and Mastoid Surgeries.</li>
                                <i class="fa fa-bullseye" aria-hidden="true"></i><li>Nose and Sinus Surgeries Septoplasty, Functional Endoscopic Sinus Surgery (FESS, Endoscopic DSR and Nasal Polyp Surgery).</li>
                                <i class="fa fa-bullseye" aria-hidden="true"></i><li>Throat: Microscopic Laryngeal Surgery and Tonsil and Adenoid Surgery.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-12">
                <div class="pricing-table wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
                    <div class="inner-box">
                        <div class="title"></div>
                        <div class="price-box">
                            <div class="price">Qualification</div>
                        </div>

                        <div class="table-content">
                            <ul>
                                <i class="fa fa-bullseye" aria-hidden="true"></i><li>M.S. Otorhinolaryngology: 1998 – 2001, M.G.M. Medical college & M. Y. Hospital, Indore, M. P., India.</li>
                                <i class="fa fa-bullseye" aria-hidden="true"></i><li>M.S. Otorhinolaryngology: 1998 – 2001, M.G.M. Medical college & M. Y. Hospital, Indore, M. P., India.</li>  
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-12">
                <div class="pricing-table wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
                    <div class="inner-box">
                        <div class="price-box">
                            <div class="price">Workshops / CME Attended</div>
                        </div>

                        <div class="table-content">
                            <ul>
                                <i class="fa fa-bullseye" aria-hidden="true"></i><li>Workshop on ‘Vestibular Assessment’ on 1st Jan 2017 at Sir HN Reliance Foundation Hospital and research center.</li>
                                <i class="fa fa-bullseye" aria-hidden="true"></i><li>Workshop on ‘Vestibular Assessment’ on 1st Jan 2017 at Sir HN Reliance Foundation Hospital and research center.</li>
                                <i class="fa fa-bullseye" aria-hidden="true"></i><li>Endoscopic skull Base & Craniofacial Surgery Workshop at Bombay Hospital Mumbai.</li>
                                <i class="fa fa-bullseye" aria-hidden="true"></i><li>‘ENT Master class, Joint U.K.-India’ in Dec 2014 by AOI Mumbai (west) branch.</li>
                                <i class="fa fa-bullseye" aria-hidden="true"></i><li>‘Cochlear Implant update’ workshop at PD Hinduja Hospital, Mumbai.</li>
                                <i class="fa fa-bullseye" aria-hidden="true"></i><li>Hands on training on Functional Endoscopic Sinus Surgery at KEM Hospital lab, Mumbai.</li>
                                <i class="fa fa-bullseye" aria-hidden="true"></i><li>Hands on training at Functional Endoscopic Sinus Surgery workshop at KEM Hospital & B.J. Medical college, Pune, PD Hinduja Hospital, Mumbai and LTMGH Sion.</li>
                                <i class="fa fa-bullseye" aria-hidden="true"></i><li>ENT Conclav in Oct 2012 and 2017.</li>
                                <i class="fa fa-bullseye" aria-hidden="true"></i><li>Microsurgery of the Ear & Temporal Bone Dissection Workshop" at LTMC Mumbai.</li>
                                <i class="fa fa-bullseye" aria-hidden="true"></i><li>Hands on ‘Temporal Bone Dissection’ Workshops at Nanavati Hospital, Mumbai.</li>
                                <i class="fa fa-bullseye" aria-hidden="true"></i><li>International Instructional course and Workshop on "FACIAL REJUVENATION AND USE OF LASERS IN AESTHETIC PLASTIC SURGERY" Mumbai, Jan 2003.</li>
                                <i class="fa fa-bullseye" aria-hidden="true"></i><li>"HANDS ON WORKSHOP OF MINIMAL ACCESS ASTHETIC SURGERY" Mumbai.</li>
                            </ul>
                        </div>      
                    </div>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-12">
                <div class="pricing-table wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
                    <div class="inner-box">
                        <div class="title"></div>
                        <div class="price-box">
                            <div class="price">Conferences / Workshop</div>
                        </div>

                        <div class="table-content">
                            <ul>
                                <i class="fa fa-bullseye" aria-hidden="true"></i><li>Workshops Organized as official Member of AOI, Navi Mumbai - Raigad.</li>
                                <i class="fa fa-bullseye" aria-hidden="true"></i><li>Current Trends In O.S.A Management & Live Surgery Workshop on 23rd July 2017 at Four points by Sheraton, Vashi, Navi Mumbai.</li>
                                <i class="fa fa-bullseye" aria-hidden="true"></i><li>CME On “Get Smart About Antibiotics” For Appropriate Usage Of Antibiotic at Supreme Heritage Navi Mumbai on April 2017.</li>
                                <i class="fa fa-bullseye" aria-hidden="true"></i><li>CME On ‘Pediatric Airway’ lecture by Dr. Divya Prabhat, Dr. Shilpa Aroskar on 13th Nov 2016.</li>
                                <i class="fa fa-bullseye" aria-hidden="true"></i><li>“Endoscopic Ear Surgery Workshop” in May 2016 at Navi Mumbai Municipal General Hospital, Vashi, Navi Mumbai.</li>
                                <i class="fa fa-bullseye" aria-hidden="true"></i><li>CME ON ‘Update On Head And Neck Malignancy’ at vashi, navi Mumbai on 6th March 2016.</li>
                                <i class="fa fa-bullseye" aria-hidden="true"></i><li>CME On Obstructive Sleep Apnea on 26th July 2015.</li>
                                <i class="fa fa-bullseye" aria-hidden="true"></i><li>Women's Day Special CME On Phonosurgery, Lecture by Dr. Noopur Nerurkar on 8th March 2015.</li>
                            </ul>
                        </div>      
                    </div>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-12">
                <div class="pricing-table wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
                    <div class="inner-box">
                        <div class="title"></div>
                        <div class="price-box">
                            <div class="price">Membership</div>
                        </div>

                        <div class="table-content">
                            <ul>
                                <i class="fa fa-bullseye" aria-hidden="true"></i><li>Association of Otolaryngologists of India (AOI).</li>
                                <i class="fa fa-bullseye" aria-hidden="true"></i><li>Cultural secretary Association of Otolaryngologist of Navi Mumbai (2013-2016).</li>
                                <i class="fa fa-bullseye" aria-hidden="true"></i><li>Working Committee member Association of Otolaryngologist of India (2016-2019).</li>
                                <i class="fa fa-bullseye" aria-hidden="true"></i><li>Scientific research society Dept. of ENT, M.Y. Hospital Indore India. (May 1998 – April 2001), Demonstrator in Dept of ENT M. Y. Hospital Indore India.</li>
                                <i class="fa fa-bullseye" aria-hidden="true"></i><li>Hon Secretary AOI Navi Mumbai & Raigad Aug 2022 –Aug 2025.</li>
                                <i class="fa fa-bullseye" aria-hidden="true"></i><li>Neuro-Otology & Equilibriometric Society (NES) of India.</li>
                                <i class="fa fa-bullseye" aria-hidden="true"></i><li>Registration: Maharashtra Medical Council India: 2002/08/2944.</li>
                            </ul>
                        </div>      
                    </div>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-12">
                <div class="pricing-table wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
                    <div class="inner-box">
                        <div class="title"></div>
                        <div class="price-box">
                            <div class="price">Free Camps</div>
                        </div>

                        <div class="table-content">
                            <ul>
                                <i class="fa fa-bullseye" aria-hidden="true"></i><li>Hearing test* ENT Consultation to Navi Mumbai Police Traffic Control Branch.</li>
                                <i class="fa fa-bullseye" aria-hidden="true"></i><li>Regular Free Ear and Hearing Check Camps every year for needy section of society.</li>
                                <i class="fa fa-bullseye" aria-hidden="true"></i><li>Free Ear Check Camps for Gujarati Samaj, Vashi, Navi Mumbai.</li>
                            </ul>
                        </div>      
                    </div>
                </div>
            </div>
        </div> 
        <div class="row d-flex justify-content-center">
            <div class="col-lg-12 col-md-12 col-12">
                <div class="pricing-table wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
                    <div class="inner-box">
                        <div class="title"></div>
                        <div class="price-box">
                            <div class="price">Research & Publications</div>
                        </div>

                        <div class="table-content">
                            <ul>
                                <i class="fa fa-bullseye" aria-hidden="true"></i><li>'Rhinosporidiosis- a case report', NEEMA Journal, Aug, 2008.</li>
                                <i class="fa fa-bullseye" aria-hidden="true"></i><li>'Sino-Nasal Haemangiopericytoma' a rare case report published in Bombay Hospital Journal, Oct, 2008.</li>
                            </ul>
                        </div>      
                    </div>
                </div>
            </div>
        </div> 
    </div>
</section>
<!-- End Doctors Area -->

<!-- Consulting Places -->
<div class="sec-consulting content-area">
    <div class="container">
        <div class="main-title">
            <h1>Consulting Places</h1>
        </div>
        <div class="row d-flex justify-content-center">
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                <div class="team-2 df-box">
                    <div class="team-photo">
                        <a href="#">
                            <img src="http://localhost/Dr-Archana-Jhawar-ENT-Specialist/resources/assets/images/neolta-logo.jpg" alt="neolta-logo" class="img-fluid">
                        </a>
                    </div>
                    <div class="team-details">
                        <h5>Neoalta ENT Clinic</h5>
                        <p><i class="bi bi-geo-alt" style="padding-right: 13px;"></i>Vashi, Navi Mumbai</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                <div class="team-2 df-box">
                    <div class="team-photo">
                        <a href="#">
                            <img src="http://localhost/Dr-Archana-Jhawar-ENT-Specialist/resources/assets/images/hospital-attachment-1.jpg" alt="hospital-attachment-1" class="img-fluid">
                        </a>
                    </div>
                    <div class="team-details">
                        <h5>Kokilaben Dhirubhai Ambani Hospital</h5>
                        <p><i class="bi bi-geo-alt" style="padding-right: 13px;"></i>Koparkhairane, Navi Mumbai</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>  

@stop        