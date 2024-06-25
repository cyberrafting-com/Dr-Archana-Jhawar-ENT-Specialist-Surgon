<section class="">
    <div class="container ">
        <div class="row d-flex justify-content-center">   
            <div class="col-xl-10 col-lg-10 col-lg-10 col-md-12 col-12">
                <div class="contact-form book-form">
                    <h3 class="text-center pb-4">book appointment</h3>
                    @if(session('success'))
                    <p style="color: red;">{{ session('success') }}</p>
                    @endif
                    <form method="post" action="{{ route('saveAappointment') }}">
                        @csrf
                        <div class="row d-flex justify-content-center">
                            <div class="col-lg-9 col-md-9 col-sm-12 col-12">
                                <label for="floating-full-name" class="label-text">Name</label>     
                                <div class="form-floating mb-3 mt-3">                                    
                                    <input type="text" class="form-control" name="name" placeholder="Your Name" value="{{ old('name') }}" required="required">
                                    @error('name')
                                    <p style="color: red;">{{ $message }}</p>
                                    @enderror
                                    <label for="floating-full-name">Enter Your Name</label>                               
                                </div>
                            </div>
                            <div class="col-lg-9 col-md-9 col-sm-12 col-12">
                                <label for="floating-phone-Number" class="label-text">Phone Number</label>
                                <div class="form-floating mb-3 mt-3">
                                    <input type="text" class="form-control" name="phone-no" placeholder="Phone Number" value="{{ old('phone-no') }}" required="required">
                                    @error('phone-no')
                                    <p style="color: red;">{{ $message }}</p>
                                    @enderror
                                    <label for="floating-phone-Number">Enter Phone Number</label>
                                </div>
                            </div>
                            <div class="col-lg-9 col-md-9 col-sm-12 col-12 mb-3">
                                <label for="floating-phone-Number" class="label-text">Select Date</label>
                                <div class="form-floating mb-3 mt-3">
                                    <input type="date" class="form-control form-control-lg date appointment-one__field" name="date" id="datetimepicker1" placeholder="Select Date" value="{{ old('date') }}" required="required">
                                    @error('date')
                                    <p style="color: red;">{{ $message }}</p>
                                    @enderror
                                </div>
					        </div>
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="send-btn text-center">
                                    <button type="submit" class="btn-4 btn-round-3">Request a call-back</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>