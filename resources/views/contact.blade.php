
@extends('layouts.default')            
@section('content') 

<!-- Start Breadcrumbs Design -->
<section class="page-title" style="background-image: url({{ asset('/resources/assets/images/breadcrumb_bg.jpg')}});"">
    <div class="auto-container">
        <h2>Contact Us</h2>
        <ul class="page-breadcrumb">
            <li><a href="{{route('home')}}">home</a></li>
            <li>Contact Us</li>  
        </ul>
    </div>
</section>
<!-- End Breadcrumbs Design -->

<div class="contact-3 content-area-5">
    <div class="container">
        <!-- Main title -->
        <div class="main-title">
            <h1>Get in Touch With Us</h1> 
        </div>
        <div class="contact-innner">
            <div class="row g-0">
                <div class="col-xl-4 col-lg-5 col-md-12">
                    <div class="contact-info">
                        <h3>Contact Info</h3>
                        <div class="ci-box d-flex">
                            <div class="icon">
                                <i class="fa fa-map-marker"></i>
                            </div>
                            <div class="detail align-self-center">
                                <h4>Address</h4>
                                <p>Mahavir Center, NEOALTA specialty Clinic, 11, first floor, above Golden Punjab hotel, Sector 17, Vashi, Navi Mumbai, Maharashtra 400709</p>
                            </div>
                        </div>
                        <div class="ci-box d-flex">
                            <div class="icon">
                                <i class="fa fa-phone"></i>
                            </div>
                            <div class="detail align-self-center">
                                <h4>Phone Number</h4>
                                <p>
                                    <a href="tel:+919322229159">+91-9322229159</a>
                                </p>
                            </div>
                        </div>
                        <div class="ci-box d-flex">
                            <div class="icon">
                                <i class="fa fa-envelope"></i>
                            </div>
                            <div class="detail align-self-center">
                                <h4>Email Address</h4>
                                <p>
                                    <a href="mailto:info@neoalta.com">info@neoalta.com</a>
                                </p>
                            </div>
                        </div>
                        <h3>Follow Us</h3>
                        <ul class="social-list clearfix">
                            <li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#" class="google"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#" class="rss"><i class="fa fa-rss"></i></a></li>
                            <li><a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-8 col-lg-7 col-md-12">
                    <div class="contact-form">
                        <h3>Send us a Message</h3>
                        @if(session('success'))
                        <p style="color: red;">{{ session('success') }}</p>
                        @endif
                        <form method="post" action="{{ route('saveContact') }}">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" name="first_name" placeholder="First Name" value="{{ old('first_name') }}" required="required">
                                        @error('name')
                                        <p style="color: red;">{{ $message }}</p>
                                        @enderror
                                        <label for="floating-full-name">First Name</label>                                       
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" name="last_name" placeholder="Last Name" value="{{ old('last_name') }}" required="required">
                                        @error('name')
                                        <p style="color: red;">{{ $message }}</p>
                                        @enderror
                                        <label for="floating-full-name">Last Name</label>                                       
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-floating mb-3">
                                        <input type="email" class="form-control" name="email" placeholder="Email Address" value="{{ old('email') }}" required="required">
                                        @error('email')
                                        <p style="color: red;">{{ $message }}</p>
                                        @enderror
                                        <label for="floating-email-address">Email address</label>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" name="mobile" placeholder="Phone Number" value="{{ old('mobile') }}" required="required">
                                        @error('mobile')
                                        <p style="color: red;">{{ $message }}</p>
                                        @enderror
                                        <label for="floating-phone-Number">Phone Number</label>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="form-floating mb-3">
                                        <textarea class="form-control" placeholder="Leave a comment here" name="message" style="height: 65px;" required="required">{{ old('message') }}</textarea>
                                        @error('message')
                                        <p style="color: red;">{{ $message }}</p>
                                        @enderror
                                        <label for="floatingTextarea2">Comments</label>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="send-btn text-center">
                                        <button type="submit" class="btn-4 btn-round-3">Send Message</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>     

<!-- map section -->
<section>
    <div class="container">
        <div class="row team-4 p-3">
            <div class="col-xl-4 col-lg-4 col-md-4 col-pad mb-lg-0 mb-md-0 mb-5">
                <div class="team-2 df-box df-box1">
                    <div class="team-photo">
                        <a href="#">
                            <img src="{{ asset('/resources/assets/images/neolta-logo.jpg')}}" alt="neolta-logo" class="img-fluid">
                        </a>
                    </div>
                    <div class="team-details">
                        <h5>Neoalta ENT Clinic</h5>
                        <p><i class="bi bi-geo-alt" style="padding-right: 13px;"></i>Vashi, Navi Mumbai</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-8 col-lg-8 col-md-8 align-self-center">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d30166.162630507482!2d72.999247!3d19.073833!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c1ba6631ff7f%3A0x7a545492a1397eaa!2sDr%20Archana%20Jhawar%20-%20ENT%20Specialist%20in%20Vashi%2C%20Speech%20Problem%2C%20Vertigo%20Specialist%2C%20Ear%20Surgery%2C%20Sinus%20Treatment%20Doctor%20in%20Vashi!5e0!3m2!1sen!2sin!4v1711198318681!5m2!1sen!2sin" width="100%" height="330" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
        <div class="row team-4 p-3">
            <div class="col-xl-4 col-lg-4 col-md-4 col-pad mb-lg-0 mb-md-0 mb-5">
                <div class="team-2 df-box df-box1">
                    <div class="team-photo">
                        <a href="#">
                            <img src="{{ asset('/resources/assets/images/hospital-attachment-1.jpg')}}" alt="neolta-logo" class="img-fluid">
                        </a>
                    </div>
                    <div class="team-details">
                        <h5>Kokilaben Dhirubhai Ambani Hospital</h5>
                        <p><i class="bi bi-geo-alt" style="padding-right: 13px;"></i>Kopar khairane, Navi Mumbai</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-8 col-lg-8 col-md-8 align-self-center">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d120643.46725730569!2d73.012937!3d19.102902!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c0de93e7897b%3A0x8b1917237744e89b!2sKokilaben%20Dhirubhai%20Ambani%20Hospital%2C%20Navi%20Mumbai%20(formerly%20Reliance%20Hospital)!5e0!3m2!1sen!2sin!4v1711198426754!5m2!1sen!2sin" width="100%" height="330" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
</section>

@stop        