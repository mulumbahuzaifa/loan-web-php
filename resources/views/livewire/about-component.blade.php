<div>
     <!-- Banner Start -->
     <section id="banner-section" class="">
        <div class="overlay">
            <div class="container">
                <div class="row text-center">
                    <div class="col-md-12 mb-10">
                        <h1 class="text-light">About Us</h1>
                    </div>
                    <div class="col-md-12">
                        <ul class="d-flex justify-content-center">
                            <li><a href="/">Home</a></li>
                            <li><a class=""> - </a></li>
                            <li><a class="active" href="#!">About Us</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner End -->

  <!-- About Start -->
  <section id="about-section" class="mt-70">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-6">
                <div class="about-img mt-50">
                    <div class="wow fadeInLeft" data-wow-delay=".6s">
                        <img src="{{ asset('assets/images/about/about.png')}}" alt="about image">
                    </div>
                    <div class="experience wow fadeInRight" data-wow-delay=".6s">
                        <h5>25+</h5>
                        <h6>Years of Experience</h6>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="card mt-50">
                    <div class="card-body">
                        <div class="section-title mb-30 wow fadeInRight" data-wow-delay=".6s">
                            <h6 class="card-subtitle">ABOUT COMPANY</h6>
                            <h2 class="card-title">Small Business Loans For a Daily Expenses</h2>
                            <p class="card-text">We are giving you the loan for Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore t dolore magna aliqua. Ut enim ad minim veniam quis..</p>
                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using.</p>
                        </div>
                        <div class="row g-0">
                            <div class="col-md-3 wow fadeInLeft" data-wow-delay=".6s">
                                <div class="about-list-icon d-flex justify-content-center align-items-center">
                                    <i class="fa fa-users"></i>
                                </div>
                            </div>
                            <div class="col-md-9 wow fadeInRight" data-wow-delay=".6s">
                                <div class="card-body about-list-text bg-dark d-flex justify-content-center align-items-center">
                                    <h5>we are trusted by more than 8,700 clients</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- About End -->

  <!-- Service Start -->
  <section id="service-section" class="mt-85">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12 col-md-12">
                <div class="service service-right">
                    <div class="row">
                        @foreach ($branches as $branch)
                        <div class="col-xl-6 col-lg-8 col-md-8">
                            <div class="card service-item mt-25 wow fadeInUp" data-wow-delay=".2s" style=" margin: 20px 0px;">
                                <div class="card-body service-body">
                                    <div class="">
                                        {{-- <i class="flaticon-suitcase"></i> --}}
                                        <img src="{{ asset('assets/images/flaticons/002-consultation.png') }}" alt="" width="60">
                                    </div>
                                    <h5><a href="#">{{ $branch->address }}</a>(<small>{{ $branch->district }}</small>)</h5>

                                    <u>Contact Details</u>
                                    <p><i class="fa fa-envelope"></i><span>{{ $branch->email }}</span></p>
                                    <p><i class="fa fa-phone"></i>{{ $branch->phone }}</p>
                                    @if ($branch->phone2)
                                    <p><i class="fa fa-phone-square"></i>{{ $branch->phone2 }}</p>
                                    @endif
                                    @if ($branch->whatsapp)
                                    <p><i class="fa fa-whatsapp"></i>{{ $branch->whatsapp }}</p>
                                    @endif
                                    <p><i class="fa fa-envelope-o"></i>{{ $branch->box_mail }}</p>
                                    {{-- <p>{!! str_limit(strip_tags($project->description),100,'...')  !!}</p> --}}
                                    <div class="service-shape">
                                        <img src="{{ asset('assets/images/service/shape.png')}}" alt="{{ $branch->name }}">
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach


                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Service End -->

    <!-- Counter Start -->
    <section id="counter-section" class="bg-prefix mt-120">
        <div class="overlay-2">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-3 col-md-3 col-12">
                        <div class="card counter-item text-center mt-15 mb-15 wow fadeInUp" data-wow-delay=".2s">
                            <div class="card-body">
                                <div class="counter-icon">
                                    <i class="lni lni-thumbs-up"></i>
                                </div>
                                <div class="counter-title">
                                    <h3>100%</h3>
                                </div>
                                <p>Success Rate</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-12">
                        <div class="card counter-item text-center mt-15 mb-15 wow fadeInUp" data-wow-delay=".4s">
                            <div class="card-body">
                                <div class="counter-icon">
                                    <i class="lni lni-users"></i>
                                </div>
                                <div class="counter-title">
                                    <h3>785</h3>
                                </div>
                                <p>Happy Clients</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-12">
                        <div class="card counter-item text-center mt-15 mb-15 wow fadeInUp" data-wow-delay=".6s">
                            <div class="card-body">
                                <div class="counter-icon">
                                    <i class="lni lni-investment"></i>
                                </div>
                                <div class="counter-title">
                                    <h3>10,524M</h3>
                                </div>
                                <p>Investments</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-12">
                        <div class="card counter-item text-center mt-15 mb-15 wow fadeInUp" data-wow-delay=".6s">
                            <div class="card-body">
                                <div class="counter-icon">
                                    <i class="lni lni-cup"></i>
                                </div>
                                <div class="counter-title">
                                    <h3>199</h3>
                                </div>
                                <p>Award Achivement</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Counter End -->

        <!-- Testimonial start -->
        <section id="testimonial-section" class="mt-115">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="section-title testimonial-title">
                            <h6>OUR STAFFS</h6>
                            <h2>Some of our Valuable members.</h2>
                        </div>
                    </div>
                </div>
                <div class="row testimonial-slider">
                    @foreach ($staffs as $staff)
                    <div class="col-lg-4">
                        <div class="mt-20">
                            <div class="card testimonial-item">
                                <div class="card-body testimonial-body">
                                    <div class="d-lg-flex align-items-lg-center justify-content-lg-between d-sm-flex align-items-sm-center justify-content-sm-between testimonial-img-item mb-20">
                                        <div class="testimonial-img">
                                            <img src="{{ asset('assets/images/user.png') }}" alt="">
                                        </div>
                                        <div class="testimonial-author">
                                            <h5>{{ $staff->name }}</h5>
                                            <span>{{ $staff->position }}</span>
                                            <p>{{ $staff->branch }}</p>
                                        </div>
                                        <div class="testimonial-rating">
                                            <ul class="d-flex">
                                                <li><i class="flaticon-star-1"></i></li>
                                                <li><i class="flaticon-star-1"></i></li>
                                                <li><i class="flaticon-star-1"></i></li>
                                                <li><i class="flaticon-star-1"></i></li>
                                                <li><i class="flaticon-star-1"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                    {{-- <div class="d-flex mt-50 testimonial-content">
                                        <div class="testimonial-quote d-none d-md-block d-lg-block d-xl-block">
                                            <i class="flaticon-left-quote"></i>
                                        </div>
                                        <div class="testimonial-text">
                                            <p>Duis consectetur feugiat auctor. Morbi nec enim luctus, feugiat arcu id, ultricies ante. Duis vel massa eleifend, porta est non, feugiat metus. feugiat ultricies.</p>
                                        </div>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach


                </div>
            </div>
        </section>
        <!-- Testimonial end -->
      <!-- Loan Process Start -->
      <section id="loan-process-section" class="mt-115">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="section-title process-title">
                        <h6>A quick & transparent process</h6>
                        <h2 class="mb-0">We have a simple online application</h2>
                        <p>Which will give you the adjuct information, how to get loan!</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="card process-item text-center mt-50 wow fadeInUp" data-wow-delay=".2s">
                        <div class="card-body process-body">
                            <div class="process-icon">
                                {{-- <i class="flaticon-network-1"></i> --}}
                                <img src="{{ asset('assets/images/flaticons/001-computer.png') }}" alt="">
                            </div>
                            <div class="content">
                                <h5 class="text-dark">Apply From Online</h5>
                                <p>We will customize a loan based on the amount of cash your company need term length</p>
                            </div>
                            <div class="shape d-none d-lg-block d-xl-block">
                                <img src="{{ asset('assets/images/curve-arrow-shape.png')}}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card process-item text-center mt-50 wow fadeInUp" data-wow-delay=".4s">
                        <div class="card-body process-body">
                            <div class="process-icon">
                                {{-- <i class="flaticon-consultation"></i> --}}
                                <img src="{{ asset('assets/images/flaticons/002-consultation.png') }}" alt="">
                            </div>
                            <div class="content">
                                <h5 class="text-dark">Need to Review</h5>
                                <p>We will customize a loan based on the amount of cash your company need term length</p>
                            </div>
                            <div class="shape d-none d-lg-block d-xl-block">
                                <img src="{{ asset('assets/images/curve-arrow-shape.png')}}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card process-item text-center mt-50 wow fadeInUp" data-wow-delay=".6s">
                        <div class="card-body process-body">
                            <div class="process-icon">
                                {{-- <i class="flaticon-operator"></i> --}}
                                <img src="{{ asset('assets/images/flaticons/003-operator.png') }}" alt="">
                            </div>
                            <div class="content">
                                <h5 class="text-dark">Client Communication</h5>
                                <p>We will customize a loan based on the amount of cash your company need term length</p>
                            </div>
                            <div class="shape d-none d-lg-block d-xl-block">
                                <img src="{{ asset('assets/images/curve-arrow-shape.png')}}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card process-item text-center mt-50 wow fadeInUp" data-wow-delay=".8s">
                        <div class="card-body process-body">
                            <div class="process-icon">
                                {{-- <i class="fa fa-check-square-o"></i> --}}
                                <img src="{{ asset('assets/images/flaticons/004-tick-mark.png') }}" alt="">
                            </div>
                            <div class="content">
                                <h5 class="text-dark">Approval</h5>
                                <p>We will customize a loan based on the amount of cash your company need term length</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="process-btn text-center mt-50">
                        <a class="btn btn-one wow fadeInLeft" data-wow-delay=".5s" href="#" wire:click.prevent="checkout" style="visibility: visible; animation-delay: 2s; animation-name: fadeInLeft;">Apply for loan</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Loan Process End -->


    <!-- Testimonial start -->
    <section id="testimonial-section" class="mt-115">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="section-title testimonial-title">
                        <h6>Press Coverage</h6>
                        <h2>What our clients say about us.</h2>
                        <p>Duis consectetur feugiat auctor. Morbi nec enim luctus, feugiat arcu id, ultricies ante. Duis vel massa eleifend, porta est non, feugiat metus. feugiat ultricies.</p>
                    </div>
                </div>
            </div>
            <div class="row testimonial-slider">
                <div class="col-lg-4">
                    <div class="mt-20">
                        <div class="card testimonial-item">
                            <div class="card-body testimonial-body">
                                <div class="d-lg-flex align-items-lg-center justify-content-lg-between d-sm-flex align-items-sm-center justify-content-sm-between testimonial-img-item mb-20">
                                    <div class="testimonial-img">
                                        <img src="{{ asset('assets/images/testimonial/1.jpg') }}" alt="">
                                    </div>
                                    <div class="testimonial-author">
                                        <h5>Rebel Carbscop</h5>
                                        <span>Sr. Consultant</span>
                                    </div>
                                    <div class="testimonial-rating">
                                        <ul class="d-flex">
                                            <li><i class="flaticon-star-1"></i></li>
                                            <li><i class="flaticon-star-1"></i></li>
                                            <li><i class="flaticon-star-1"></i></li>
                                            <li><i class="flaticon-star-1"></i></li>
                                            <li><i class="flaticon-star-1"></i></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="d-flex mt-50 testimonial-content">
                                    <div class="testimonial-quote d-none d-md-block d-lg-block d-xl-block">
                                        <i class="flaticon-left-quote"></i>
                                    </div>
                                    <div class="testimonial-text">
                                        <p>Duis consectetur feugiat auctor. Morbi nec enim luctus, feugiat arcu id, ultricies ante. Duis vel massa eleifend, porta est non, feugiat metus. feugiat ultricies.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="mt-20">
                        <div class="card testimonial-item">
                            <div class="card-body testimonial-body">
                                <div class="d-lg-flex align-items-lg-center justify-content-lg-between d-sm-flex align-items-sm-center justify-content-sm-between testimonial-img-item mb-20">
                                    <div class="testimonial-img">
                                        <img src="{{ asset('assets/images/testimonial/1.jpg') }}" alt="">
                                    </div>
                                    <div class="testimonial-author">
                                        <h5>Rebel Carbscop</h5>
                                        <span>Sr. Consultant</span>
                                    </div>
                                    <div class="testimonial-rating">
                                        <ul class="d-flex">
                                            <li><i class="flaticon-star-1"></i></li>
                                            <li><i class="flaticon-star-1"></i></li>
                                            <li><i class="flaticon-star-1"></i></li>
                                            <li><i class="flaticon-star-1"></i></li>
                                            <li><i class="flaticon-star-1"></i></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="d-flex mt-50 testimonial-content">
                                    <div class="testimonial-quote d-none d-md-block d-lg-block d-xl-block">
                                        <i class="flaticon-left-quote"></i>
                                    </div>
                                    <div class="testimonial-text">
                                        <p>Duis consectetur feugiat auctor. Morbi nec enim luctus, feugiat arcu id, ultricies ante. Duis vel massa eleifend, porta est non, feugiat metus. feugiat ultricies.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="mt-20">
                        <div class="card testimonial-item">
                            <div class="card-body testimonial-body">
                                <div class="d-lg-flex align-items-lg-center justify-content-lg-between d-sm-flex align-items-sm-center justify-content-sm-between testimonial-img-item mb-20">
                                    <div class="testimonial-img">
                                        <img src="{{ asset('assets/images/testimonial/1.jpg') }}" alt="">
                                    </div>
                                    <div class="testimonial-author">
                                        <h5>Rebel Carbscop</h5>
                                        <span>Sr. Consultant</span>
                                    </div>
                                    <div class="testimonial-rating">
                                        <ul class="d-flex">
                                            <li><i class="flaticon-star-1"></i></li>
                                            <li><i class="flaticon-star-1"></i></li>
                                            <li><i class="flaticon-star-1"></i></li>
                                            <li><i class="flaticon-star-1"></i></li>
                                            <li><i class="flaticon-star-1"></i></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="d-flex mt-50 testimonial-content">
                                    <div class="testimonial-quote d-none d-md-block d-lg-block d-xl-block">
                                        <i class="flaticon-left-quote"></i>
                                    </div>
                                    <div class="testimonial-text">
                                        <p>Duis consectetur feugiat auctor. Morbi nec enim luctus, feugiat arcu id, ultricies ante. Duis vel massa eleifend, porta est non, feugiat metus. feugiat ultricies.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Testimonial end -->
</div>
