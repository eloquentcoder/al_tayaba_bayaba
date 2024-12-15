<div>

    <!-- PAGE-BANNER -->
    <style>
        .page-banner {
            background-image: url(assets/uploads/logo/banner.jpg);
        }
    </style>

    <!-- page banner -->
    <section class="page-banner">
        <div class="overlay">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h2>Contact Us</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /PAGE-BANNER -->
    <!-- CONTACT -->
    <section class="contact-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <div class="header-text-full mb-5">
                        <h2>GET IN TOUCH</h2>
                        <p>Let's Ask Your Questions</p>
                    </div>
                    {{-- <div class="box mb-5">
                        <div class="img">
                            <img src="{{ asset('themes/deepblack/img/icon/location2.png') }}" alt="location image" />
                        </div>
                        <div class="text">
                            <h4 class="golden-text">Our Location</h4>
                            <p class="golden-text">846 Jalan Bukit Bintang, Kuala Lumpur 55100, Malaysia</p>
                        </div>
                    </div> --}}
                    <div class="box mb-5">
                        <div class="img">
                            <img src="{{ asset('themes/deepblack/img/icon/email2.png') }}" alt="email image" />
                        </div>
                        <div class="text">
                            <h4 class="golden-text">email address</h4>
                            <p class="golden-text">altayaba980@gmail.com</p>
                        </div>
                    </div>
                    <div class="box">
                        <div class="img">
                            <img src="{{ asset('themes/deepblack/img/icon/phone2.png') }}" alt="phone image" />
                        </div>
                        <div class="text">
                            <h4 class="golden-text">company number</h4>
                            <p class="golden-text">+971-56-722-5601</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 ps-lg-5">
                    <div class="contact-box">
                        @if (session()->has('success'))
                            <div style="background: green; font-color: white; padding: 4px;">
                                {{ session('success') }}
                            </div>
                        @endif
                        <form wire:submit.prevent="submitForm">
                            <div>
                                <h4 class="golden-text">Full name</h4>
                                <div class="input-group mb-4">
                                    <div class="img">
                                        <img src="{{ asset('themes/deepblack/img/icon/edit.png') }}" alt="edit img" />
                                    </div>
                                    <input type="text" wire:model="full_name" class="form-control"
                                        placeholder="Full Name" />
                                    @error('full_name')
                                        <span style="color: red; font-size: 10px">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div>
                                <h4 class="golden-text">your email</h4>
                                <div class="input-group mb-4">
                                    <div class="img">
                                        <img src="{{ asset('themes/deepblack/img/icon/email2.png') }}" alt="edit img" />
                                    </div>
                                    <input type="email" wire:model="email" class="form-control"
                                        placeholder="Email Address" />
                                    @error('email')
                                        <span style="color: red; font-size: 10px">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div>
                                <h4 class="golden-text">your phone number</h4>
                                <div class="input-group mb-4">
                                    <div class="img">
                                        <img src="{{ asset('themes/deepblack/img/icon/phone2.png') }}" alt="edit img" />
                                    </div>
                                    <input type="text" wire:model="phone_number" class="form-control"
                                        placeholder="Phone Number" />
                                    @error('phone_number')
                                        <span style="color: red; font-size: 10px">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div>
                                <h4 class="golden-text">your message</h4>
                                <div class="input-group mb-4">
                                    <div class="img">
                                        <img src="{{ asset('themes/deepblack/img/icon/edit.png') }}" alt="" />
                                    </div>
                                    <textarea class="form-control" wire:model="message" cols="30" rows="10" placeholder="Message"></textarea>
                                </div>
                                @error('message')
                                    <span style="color: red; font-size: 10px">{{ $message }}</span>
                                @enderror
                            </div>
                            <button class="gold-btn">Send Message</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /CONTACT -->

</div>
