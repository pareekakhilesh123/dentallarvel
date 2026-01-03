<div>
    <!-- content begin -->
        <div class="no-bottom no-top" id="content">

            <div id="top"></div>

            <section id="subheader" class="bg-color-op-1 text-center">
                <div class="container relative z-2">
                    <div class="row align-items-center">
                        <div class="col-lg-12">
                            <h1 class="wow fadeInUp">Contact Us</h1>
                            <div class="border-bottom my-3"></div>
                            <ul class="crumb wow fadeInDown">
                                <li><a href="index.html">Home</a></li>
                                <li class="active">Contact</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>


            <section>
                <div class="container">
                    <div class="row g-4">
                        <div class="col-lg-6">
                            <div class="subtitle">Get In Touch</div>
                            <h2 class="wow fadeInUp">We are always ready to help you and answer your questions</h2>

                            <p>Whether you have a question, a suggestion, or just want to say hello, this is the place to do it. Please fill out the form below with your details and message, and we'll get back to you as soon as possible.</p>

                            <div class="row g-4 gx-5">
                                <div class="col-lg-6">
                                    <div class="fw-bold text-dark"><i class="icofont-clock-time me-2 id-color-2"></i>We're Open</div>
                                    Monday - Friday 08.00 - 18.00
                                </div>

                                <div class="col-lg-6">
                                    <div class="fw-bold text-dark"><i class="icofont-location-pin me-2 id-color-2"></i>Clinic Location</div>
                                    100 S Main St, New York, NY
                                </div>

                                <div class="col-lg-6">
                                    <div class="fw-bold text-dark"><i class="icofont-phone me-2 id-color-2"></i>Call Us Directly</div>
                                    +1 123 456 789
                                </div>

                                <div class="col-lg-6">
                                    <div class="fw-bold text-dark"><i class="icofont-envelope me-2 id-color-2"></i>Send a Message</div>
                                    contact@Rock care.com       
                                </div>
                            </div>



                        </div>

                        <div class="col-lg-6">
                            <div class="p-40 bg-color-op-1 rounded-1">
                                <h3>Get In Touch</h3>

                                  {{-- Alerts --}}
                        @if(session()->has('success'))
                            <div class="alert alert-success">{{ session('success') }}</div>
                        @endif

                        @if(session()->has('error'))
                            <div class="alert alert-danger">{{ session('error') }}</div>
                        @endif
                                 <form wire:submit.prevent="submitContact">

                            <div class="mb-3">
                                <input type="text" wire:model="name" class="form-control" placeholder="Your Name">
                                @error('name') <small class="text-danger">{{ $message }}</small> @enderror
                            </div>

                            <div class="mb-3">
                                <input type="email" wire:model="email" class="form-control" placeholder="Your Email">
                                @error('email') <small class="text-danger">{{ $message }}</small> @enderror
                            </div>

                            <div class="mb-3">
                                <input type="text" wire:model="phone" class="form-control" placeholder="Your Phone">
                                @error('phone') <small class="text-danger">{{ $message }}</small> @enderror
                            </div>

                            <div class="mb-3">
                                <textarea wire:model="message" class="form-control" placeholder="Your Message"></textarea>
                                @error('message') <small class="text-danger">{{ $message }}</small> @enderror
                            </div>

                            <button type="submit" class="btn-main" wire:loading.attr="disabled">
                                <span wire:loading.remove>Send Message</span>
                                <span wire:loading>Please wait...</span>
                            </button>

                        </form>
                            </div>
                        </div>

                    </div>
                </div>
            </section>

        </div>
        <!-- content end -->
</div>
