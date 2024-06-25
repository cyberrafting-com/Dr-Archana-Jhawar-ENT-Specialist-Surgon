
<!-- Top header 3 start -->
<div class="top-header-3 d-none d-lg-block" id="top-header-4">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-3 col-md-3">
                <div class="top-logo">
                    <a href="{{route('home')}}"><img src="{{ asset('/resources/assets/images/logo.png')}}" alt="logo"></a>
                </div>
            </div>
            <div class="col-lg-9 col-md-9">
                <div class="top-header-inner">
                    <div class="top-contact-item">
                        <i class="bi bi-geo-alt"></i>
                        <div class="content">
                            <p>Our Location</p>
                            <a href="https://maps.app.goo.gl/QXjdv12uMXCUrWhDA" target="blank">Navi Mumbai, Maharashtra.</a>
                        </div>
                    </div>
                    <div class="top-contact-item">
                        <i class="bi bi-envelope-open"></i>
                        <div class="content">
                            <p>Mail Us</p>
                            <a href="mailto:info@neoalta.com">info@neoalta.com</a>
                        </div>
                    </div>
                    <div class="top-contact-item tci2">
                        <i class="bi bi-telephone-inbound"></i>
                        <div class="content">
                            <p>Call US</p>
                            <a href="tel:+919322229159">+91-9322229159</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Top header 3 end -->

<!-- Main header start -->
<header class="main-header sticky-header header-fixed main-header-5" id="main-header-6">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand logos mr-auto" href="index.html">
                <img src="{{ asset('/resources/assets/images/logo.png')}}" alt="logo" class="logo-photo">
            </a>
            <button class="navbar-toggler" id="drawer" type="button">
                <span class="fa fa-bars"></span>
            </button>
            <div class="navbar-collapse collapse w-100" id="navbar">
                <ul class="navbar-nav w-100 justify-content-start">
                    <li class="nav-item dropdown active">
                        <a class="nav-link" href="{{route('home')}}" aria-haspopup="true" aria-expanded="false">Home</a>
                    </li>
                    <li class="nav-item dropdown active">
                        <a class="nav-link" href="{{route('about')}}" aria-haspopup="true" aria-expanded="false">About</a>
                    </li>
                    <li class="nav-item dropdown megamenu-li">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Conditions</a>
                        <div class="dropdown-menu megamenu" aria-labelledby="dropdown01">
                            <div class="megamenu-area">
                                <div class="row">
                                    <div class="col-sm-6 col-lg-4">
                                        <div class="megamenu-section">
                                            <h6 class="megamenu-title">Ear</h6>
                                            <a class="dropdown-item" href="{{route('ear-wax-removal')}}">Ear wax (Cerumen)</a>
                                            <a class="dropdown-item" href="{{route('foreign-body-ear-removal')}}">Foreign Body in Ear</a>
                                            <a class="dropdown-item" href="{{route('ear-pain-treatment')}}">Ear Pain (Earache)</a>
                                            <a class="dropdown-item" href="{{route('ear-itching-treatment')}}">Ear Itching / Otomycosis / Otitis Externa</a>
                                            <a class="dropdown-item" href="{{route('eardrum-rupture-treatment')}}">Ear-Drum Rupture</a>
                                            <a class="dropdown-item" href="{{route('ear-infection-treatment')}}">Ear Infection</a>
                                            <a class="dropdown-item" href="{{route('middle-ear-medical-treatment')}}">Middle Ear Fluid</a>
                                            <a class="dropdown-item" href="{{route('vertigo-dizziness-treatment')}}">Vertigo and Dizziness</a>
                                            <a class="dropdown-item" href="{{route('tinnitus-management')}}">Tinnitus Management - Sound & Music Therapy</a>
                                            <a class="dropdown-item" href="{{route('hearing-loss-management')}}">Hearing Loss Management &amp; Hearing Aids</a>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-lg-4">
                                        <div class="megamenu-section">
                                            <h6 class="megamenu-title">Nose</h6>
                                            <a class="dropdown-item" href="{{route('frequent-cold-nose-block')}}">Frequent Cold and Nose Block</a>
                                            <a class="dropdown-item" href="{{route('allergic-rhinitis')}}">Allergic Rhinitis (Sneezing and Runny Nose)</a>
                                            <a class="dropdown-item" href="{{route('sinus-headaches')}}">Sinus Headaches</a>
                                            <a class="dropdown-item" href="{{route('migraine-treatment')}}">Migraine</a>
                                            <a class="dropdown-item" href="{{route('sinusitis')}}">Sinusitis</a>
                                            <a class="dropdown-item" href="{{route('foreign-body-nose-removal')}}">Foreign Body Nose Removal</a>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-lg-4">
                                        <div class="megamenu-section">
                                            <h6 class="megamenu-title">Throat</h6>
                                            <a class="dropdown-item" href="{{route('throat-infection')}}">Throat Infection / Sore Throat / Throat Pain</a>
                                            <a class="dropdown-item" href="{{route('chronic-cough')}}">Chronic Cough</a>
                                            <a class="dropdown-item" href="{{route('tonsillitis')}}">Tonsillitis</a>
                                            <a class="dropdown-item" href="{{route('adenoid-enlargement')}}">Adenoid Enlargement in Children</a>
                                            <a class="dropdown-item" href="{{route('hoarseness-voice')}}">Hoarseness of Voice</a>
                                            <a class="dropdown-item" href="{{route('hyperacidity')}}">Hyperacidity</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item dropdown megamenu-li">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Surgery</a>
                        <div class="dropdown-menu megamenu" aria-labelledby="dropdown01">
                            <div class="megamenu-area">
                                <div class="row">
                                    <div class="col-sm-6 col-lg-4">
                                        <div class="megamenu-section">
                                            <h6 class="megamenu-title">Ear</h6>
                                            <a class="dropdown-item" href="{{route('myringotomy-grommet-insertion')}}">Myringotomy and Grommet Insertion</a>
                                            <a class="dropdown-item" href="{{route('tympanoplasty')}}">Tympanoplasty - Repair of Ruptured Ear-Drum</a>
                                            <a class="dropdown-item" href="{{route('ossiculoplasty')}}">Ossiculoplasty</a>
                                            <a class="dropdown-item" href="{{route('stapedotomy-stapedectomy')}}">Stapedotomy and Stapedectomy</a>
                                            <a class="dropdown-item" href="{{route('mastoid-exploration-surgery')}}">Mastoid Exploration Surgery - Cholesteatoma Surgery</a>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-lg-4">
                                        <div class="megamenu-section">
                                            <h6 class="megamenu-title">Nose</h6>
                                            <a class="dropdown-item" href="{{route('septoplasty')}}">Septoplasty</a>
                                            <a class="dropdown-item" href="{{route('functional-endoscopic-sinus-surgery')}}">FESS - Functional Endoscopic Sinus Surgery</a>
                                            <a class="dropdown-item" href="{{route('endo-dcr')}}">Endo DCR</a>
                                            <a class="dropdown-item" href="{{route('nasal-polyp-surgery')}}">Nasal Polyp Surgery</a>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-lg-4">
                                        <div class="megamenu-section">
                                            <h6 class="megamenu-title">Throat</h6>
                                            <a class="dropdown-item" href="{{route('tonsil-adenoids-surgery')}}">Tonsil and Adenoids Surgery</a>
                                            <a class="dropdown-item" href="{{route('adenoids-coblation-surgery')}}">Adenoids Coblation Surgery</a>
                                            <a class="dropdown-item" href="{{route('adenoids-microdebrider-surgery')}}">Adenoids Microdebrider Surgery</a>
                                            <a class="dropdown-item" href="{{route('laser-vocal-nodule-surgery')}}">LASER Vocal Nodule Surgery</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item dropdown active">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Specialty Clinic
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="{{route('vertigo-clinic')}}">Vertigo Clinic</a></li>
                            <li><a class="dropdown-item" href="{{route('tinnitus-clinic')}}">Tinnitus Clinic</a></li>
                            <li><a class="dropdown-item" href="{{route('hearing-speech-clinic')}}">Hearing &amp; Speech Clinic</a></li>
                            <li><a class="dropdown-item" href="{{route('tm-joint-pain')}}">TM Joint Pain &amp; Migraine Management</a></li>
                            <li><a class="dropdown-item" href="{{route('allergy-sinusitis')}}">Allergy and Sinusitis</a></li>
                            <li><a class="dropdown-item" href="{{route('pediatric-ent')}}">Pediatric ENT</a></li>
                            <li><a class="dropdown-item" href="{{route('snoring-osa-treatment')}}">Snoring and OSA Treatment <br>(Obstructive Sleep Apnoea )</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown active">
                        <a class="nav-link" href="{{route('testimonial')}}" aria-haspopup="true" aria-expanded="false">Testimonials</a>
                    </li>
                    <li class="nav-item dropdown active">
                        <a class="nav-link" href="{{route('contact')}}" aria-haspopup="true" aria-expanded="false">Contact</a>
                    </li>
                </ul>

                <ul class="nav navbar-nav ml-auto w-100 justify-content-end">
                    <li class="nav-item">
                        <a href="{{route('book-appointment')}}" class="nav-link h-icon">Book Appointment</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</header>
<!-- Main header end -->

<!-- Sidenav start -->
<nav id="sidebar" class="nav-sidebar">
    <!-- Close btn-->
    <div id="dismiss">
        <i class="fa fa-close"></i>
    </div>
    <div class="sidebar-inner">
        <div class="sidebar-logo">
            <img src="{{ asset('/resources/assets/images/logo.png')}}" alt="sidebarlogo">
        </div>
        <div class="sidebar-navigation">
            <h3 class="heading">Pages</h3>
            <ul class="menu-list">
                <li><a href="{{route('home')}}" class="pt0">Home</a>
                </li>
                <li><a href="{{route('about')}}" class="pt0">About</a>
                </li>
                <li>
                    <a href="#">Conditions <em class="fa fa-chevron-down"></em></a>
                    <ul>
                        <li>
                            <a href="#">Ear <em class="fa fa-chevron-down"></em></a>
                            <ul>
                                <a href="{{route('ear-wax-removal')}}">Ear Wax (Cerumen) Removal</a>
                                <a href="{{route('foreign-body-ear-removal')}}">Foreign Body in Ear Removal</a>
                                <a href="{{route('ear-pain-treatment')}}">Ear Pain (Earache) Treatment</a>
                                <a href="{{route('ear-itching-treatment')}}">Ear Itching / Otomycosis / Otitis Externa Treatment</a>
                                <a href="{{route('eardrum-rupture-treatment')}}">Eardrum Rupture Treatment</a>
                                <a href="{{route('ear-infection-treatment')}}">Ear Infection Treatment</a>
                                <a href="{{route('middle-ear-medical-treatment')}}">Middle Ear Fluid Medical Treatment</a>
                                <a href="{{route('vertigo-dizziness-treatment')}}">Vertigo and Dizziness Management</a>
                                <a href="{{route('tinnitus-management')}}">Tinnitus Management - Sound &amp; Music Therapy</a>
                                <a href="{{route('hearing-loss-management')}}">Hearing Loss Management &amp; Hearing Aids</a>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Nose <em class="fa fa-chevron-down"></em></a>
                            <ul>
                                <a href="{{route('frequent-cold-nose-block')}}">Frequent Cold and Nose Block</a>
                                <a href="{{route('allergic-rhinitis')}}">Allergic Rhinitis (Sneezing and Runny Nose)</a>
                                <a href="{{route('sinus-headaches')}}">Sinus Headaches</a>
                                <a href="{{route('migraine-treatment')}}">Migraine Treatment</a>
                                <a href="{{route('sinusitis')}}">Sinusitis</a>
                                <a href="{{route('foreign-body-nose-removal')}}">Foreign Body Nose Removal</a>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Throat <em class="fa fa-chevron-down"></em></a>
                            <ul>
                                <a href="{{route('throat-infection')}}">Throat Infection / Sore Throat / Throat Pain</a>
                                <a href="{{route('chronic-cough')}}">Chronic Cough</a>
                                <a href="{{route('tonsillitis')}}">Tonsillitis</a>
                                <a href="{{route('adenoid-enlargement')}}">Adenoid Enlargement in Children</a>
                                <a href="{{route('hoarseness-voice')}}">Hoarseness of Voice</a>
                                <a shref="{{route('hyperacidity')}}">Hyperacidity</a>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">Surgery <em class="fa fa-chevron-down"></em></a>
                    <ul>
                        <li>
                            <a href="#">Ear <em class="fa fa-chevron-down"></em></a>
                            <ul>
                                <a href="{{route('myringotomy-grommet-insertion')}}">Myringotomy and Grommet Insertion</a>
                                <a href="{{route('tympanoplasty')}}">Tympanoplasty - Repair of Ruptured Ear-Drum</a>
                                <a href="{{route('ossiculoplasty')}}">Ossiculoplasty</a>
                                <a href="{{route('stapedotomy-stapedectomy')}}">Stapedotomy and Stapedectomy</a>
                                <a href="{{route('mastoid-exploration-surgery')}}">Mastoid Exploration Surgery - Cholesteatoma Surgery</a>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Nose <em class="fa fa-chevron-down"></em></a>
                            <ul>
                                <a href="{{route('septoplasty')}}">Septoplasty</a>
                                <a href="{{route('functional-endoscopic-sinus-surgery')}}">FESS - Functional Endoscopic Sinus Surgery</a>
                                <a href="{{route('endo-dcr')}}">Endo DCR</a>
                                <a href="{{route('nasal-polyp-surgery')}}">Nasal Polyp Surgery</a>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Throat <em class="fa fa-chevron-down"></em></a>
                            <ul>
                                <a href="{{route('tonsil-adenoids-surgery')}}">Tonsil and Adenoids Surgery</a>
                                <a href="{{route('adenoids-coblation-surgery')}}">Adenoids Coblation Surgery</a>
                                <a href="{{route('adenoids-microdebrider-surgery')}}">Adenoids Microdebrider Surgery</a>
                                <a href="{{route('laser-vocal-nodule-surgery')}}">LASER Vocal Nodule Surgery</a>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li><a href="#">Specialty Clinic <em class="fa fa-chevron-down"></em></a>
                    <ul>
                        <li><a href="{{route('vertigo-clinic')}}">Vertigo Clinic</a></li>
                        <li><a href="{{route('tinnitus-clinic')}}">Tinnitus Clinic</a></li>
                        <li><a href="{{route('hearing-speech-clinic')}}">Hearing &amp; Speech Clinic</a></li>
                        <li><a href="{{route('tm-joint-pain')}}">TM Joint Pain &amp; Migraine Management</a></li>
                        <li><a href="{{route('allergy-sinusitis')}}">Allergy and Sinusitis</a></li>
                        <li><a href="{{route('pediatric-ent')}}">Pediatric ENT</a></li>
                        <li><a href="{{route('snoring-osa-treatment')}}">Snoring and OSA Treatment <br>(Obstructive Sleep Apnoea )</a></li>
                    </ul>            
                </li>
                <li><a href="{{route('testimonial')}}" class="pt0">Testimonials</a>
                </li>
                <li><a href="{{route('contact')}}" class="pt0">Contact</a>
            </ul>
        </div>
    </div>
</nav>
<!-- Sidenav end -->         