<div>
        <!-- Banner Start -->
        <section id="banner-section" class="">
            <div class="overlay">
                <div class="container">
                    <div class="row text-center">
                        <div class="col-md-12 mb-10">
                            <h1 class="text-light">Contact</h1>
                        </div>
                        <div class="col-md-12">
                            <ul class="d-flex justify-content-center">
                                <li><a href="/">Home</a></li>
                                <li><a class=""> - </a></li>
                                <li><a class="active" href="#!">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Banner End -->

        <!-- Contact Info Start -->
        <section id="contact-info-section" class="mt-100">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="card contact-info-item mt-30">
                            <div class="card-body">
                                <div class="contact-info-icon text-primary mb-4">
                                    <i class="fa fa-send"></i>
                                </div>
                                <div class="contact-content">
                                    <h5 class="mb-3">Contact Address</h5>
                                    <p class="m-0">{{ $setting->address }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="card contact-info-item mt-30">
                            <div class="card-body">
                                <div class="contact-info-icon text-primary mb-4">
                                    <i class="fa fa-hourglass"></i>
                                </div>
                                <div class="contact-content">
                                    <h5 class="mb-3">Timing</h5>
                                    <p class="m-0"><span class="fw-bold">Mon - Sat:</span> 09:00 AM - 06:00 PM</p>
                                    <p class="m-0"><span class="fw-bold">Sunday:</span> Closed</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="card contact-info-item mt-30">
                            <div class="card-body">
                                <div class="contact-info-icon text-primary mb-4">
                                    <i class="fa fa-phone"></i>
                                </div>
                                <div class="contact-content">
                                    <h5 class="mb-3">Let's Talk</h5>
                                    <p class="m-0"><span class="fw-bold">Phone:</span> {{ $setting->phone }}</p>
                                    @if ($setting->phone2)
                                    <p class="m-0"><span class="fw-bold">Phone:</span> {{ $setting->phone2 }}</p>
                                    @endif
                                    <p class="m-0"><span class="fw-bold">Email:</span>{{ $setting->email }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Contact Info End -->

        <!-- Contact Start -->
        <section id="contact-form-section" class="mt-120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 offset-lg-3">
                        <div class="section-title text-center mb-50">
                            <h6>Book Appoinment Now!</h6>
                            <h2>Have Queries Before the Appointment?</h2>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-7 my-3">
                        <div class="card contact-form">
                            <div class="card-body">
                                @if (Session::has('message'))
                                <div class="alert alert-success" role="alert">{{ Session::get('message') }}</div>
                                @endif
                                <div id="form-messages" class="mb-30"></div>
                                <form id="ajax-contact" wire:submit.prevent="sendMessage">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="form-group mb-30">
                                                <input id="name" type="text"  wire:model="name" name="name" placeholder="Robin Hossain" class="form-control">
                                            </div>
                                            @error('name')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="form-group mb-30">
                                                <input id="email" type="email" wire:model="email" name="email"  placeholder="name@example.com" required="required" class="form-control">
                                            </div>
                                            @error('email')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="form-group mb-30">
                                                <input name="phone" type="text" id="phone" required="required" wire:model="phone" class="form-control" placeholder="Enter your phone number">
                                            </div>
                                            @error('phone')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="form-group mb-30">
                                                <input name="subject" type="text" id="subject" required="required" wire:model="subject" class="form-control" placeholder="Subject">
                                            </div>
                                            @error('subject')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group mb-30">
                                                <textarea class="form-control" id="message" name="message" rows="4" wire:model="comment" placeholder="Hi there, I would like to something ..." required="required"></textarea>
                                            </div>
                                            @error('comment')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                        </div>
                                        <div class="col-12">
                                            <button class="btn btn-one" type="submit" name="send">Send Message</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 my-3">
                        <div class="g-map">
                            <div class="card card-body">
                                <div class="ratio ratio-1x1">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13004066.00814038!2d-104.65581234446189!3d37.275676226127175!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54eab584e432360b%3A0x1c3bb99243deb742!2sUnited%20States!5e0!3m2!1sen!2sin!4v1620215274393!5m2!1sen!2sin"></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Contact End -->
</div>
