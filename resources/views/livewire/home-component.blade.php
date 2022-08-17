<div>
    <!-- Hero End -->
    <section id="hero-section" class="hero-area style1">
        <div class="hero-overlay">
            <div class="container">
                <div class="row justify-content-center align-items-center">
                    <div class="col-lg-12 col-md-9 col-12">
                        <div class="hero-content">
                            <span class="sub_title text-uppercase wow fadeInLeft" data-wow-delay=".3s">Simple. Transparent. Secure</span>
                            <h1 class="text-uppercase wow fadeInLeft" data-wow-delay=".6s">SUPER CASH</h1>
                            <h3 class="wow fadeInLeft" data-wow-delay=".9s">You can achieve your financial goals</h3>
                            <div class="hero-btn mt-40">
                                <a class="btn btn-one wow fadeInLeft" data-wow-delay="1.2s" href="route('about')">Get More Info <i class="lni lni-angle-double-right"></i></a>
                                {{-- <a class="btn btn-two glightbox video-button wow fadeInLeft" data-wow-delay="1.5s" href="https://www.youtube.com/watch?v=UwPrJmOxPeI"><i class="lni lni-play"></i><span class="text">Watch our intro video</span></a> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero End -->

    <!-- About Start -->
    <section id="about-section" class="mt-70">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-6">
                    <div class="about-img mt-50">
                        <div class="wow fadeInLeft" data-wow-delay=".6s">
                            <img src="{{ asset('assets/images/about/about.jpg')}}" alt="about image">
                        </div>
                        <div class="experience wow fadeInRight" data-wow-delay=".6s">
                            <h5>4+</h5>
                            <h6>Years of Experience</h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="card mt-50">
                        <div class="card-body">
                            <div class="section-title mb-30 wow fadeInRight" data-wow-delay=".6s">
                                <h6 class="card-subtitle">ABOUT COMPANY</h6>
                                <h2 class="card-title">SUPER CASH</h2>
                                <p class="card-text">Super cash started in 2018 with one branch in Bukedea dealing in salary & Business loans. The interest rates are 10% and 15% respecbly.. </p>
                                <p>The company has now grown to 10 branches located in Bukedea, Moroto, Mbale, Soroti, KATAKWI, Dokolo, kaberemaido kumi palisa and kotido. Cash 247.</p>
                            </div>
                            <div class="row g-0">
                                <div class="col-md-3 wow fadeInLeft" data-wow-delay=".6s">
                                    <div class="about-list-icon d-flex justify-content-center align-items-center">
                                        <i class="fa fa-users"></i>
                                    </div>
                                </div>
                                <div class="col-md-9 wow fadeInRight" data-wow-delay=".6s">
                                    <div class="card-body about-list-text bg-dark d-flex justify-content-center align-items-center">
                                        <h5>we are trusted by more than 500 clients</h5>
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
                            @foreach ($projects as $project)
                            <div class="col-xl-3 col-lg-4 col-md-6">
                                <div class="card service-item mt-25 wow fadeInUp" data-wow-delay=".2s" style="height: 280px; margin: 20px 0px;">
                                    <div class="card-body service-body">
                                        <div class="">
                                            {{-- <i class="flaticon-suitcase"></i> --}}
                                            <img src="{{ asset('assets/images/flaticons/006-suitcase.png') }}" alt="" width="60">
                                        </div>
                                        <h5><a href="{{ route('project.detail',['slug' =>$project->slug]) }}">{{ $project->name }}</a></h5>
                                        <p>{!! str_limit(strip_tags($project->description),100,'...')  !!}</p>
                                        <div class="service-shape">
                                            <img src="{{ asset('assets/images/service/shape.png')}}" alt="{{ $project->name }}">
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
                                    <h3>200</h3>
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
                                    <h3>Enough($)</h3>
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
                                    <h3>Enough</h3>
                                </div>
                                <p>Achivements</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Counter End -->

    <!-- Project Start -->
    <section id="project-section" class="mt-110">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-6">
                    <div class="project-title section-title mb-20 wow fadeInLeft" data-wow-delay=".2s">
                        <h2>LOAN SERVICES </h2>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="project-desc">
                        <p class="wow fadeInLeft" data-wow-delay=".4s">Get the financial help you need with the service you deserve.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="project-list">
            <div class="container">
                <div class="row">
                    @foreach ($loans as $loan)
                    <div class="col-lg-4 col-md-6">
                        <div class="card project-item mt-50 wow fadeInUp" data-wow-delay=".3s">
                            <img src="{{ asset('assets/images/projects')}}/{{ $loan->image }}" class="card-img-top" alt="{{ $loan->name }}">
                            <div class="card-body project-body">
                                <p class="card-text">Funding</p>
                                <h5 class="card-title">{{ $loan->name }}</h5>
                                <a href="{{ route('project.detail',['slug' =>$loan->slug]) }}" class="btn btn-primary"><i class="fa fa-plus"></i></a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!-- Project End -->

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





    <!-- Blog Start -->
    <section id="blog-section" class="mt-145">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title blog-section-title text-center">
                        <h6>News & Updates</h6>
                        <h2>Latest from our blog</h2>

                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($blogs as $blog)
                <div class="col-lg-4 col-md-6">
                    <div class="card blog-item mt-50">
                        <div class="blog-img">
                            <img src="{{ asset('assets/images/blog')}}/{{ $blog->image }}" alt="">
                        </div>
                        <div class="card-body blog-body">
                            <div class="blog-content mt-20">
                                <div class="blog-subtitle">
                                    <a href="{{ route('blog.details', ['slug' => $blog->slug]) }}">{{ $blog->user->name }}</a>
                                </div>
                                <div class="blog-title mt-10">
                                    <a href="{{ route('blog.details', ['slug' => $blog->slug]) }}">
                                        <h4 class="card-title" style="text-transform: capitalize;">{{ $blog->name }}</h4>
                                    </a>
                                </div>
                                <div class="blog-btn mt-10">
                                    <a href="{{ route('blog.details', ['slug' => $blog->slug]) }}">Read More <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach


            </div>
        </div>
    </section>
    <!-- Blog End -->
</div>
