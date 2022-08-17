<div>
    <!-- Banner Start -->
    <section id="banner-section" class="">
        <div class="overlay">
            <div class="container">
                <div class="row text-center">
                    <div class="col-md-12 mb-10">
                        <h1 class="text-light">Services</h1>
                    </div>
                    <div class="col-md-12">
                        <ul class="d-flex justify-content-center">
                            <li><a href="/">Home</a></li>
                            <li><a class=""> - </a></li>
                            <li><a class="active" href="#!">Services</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner End -->

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
                                            <img src="{{ asset('assets/images/flaticons/006-suitcase.png') }}" alt="" width="60">
                                            {{-- <i class="flaticon-suitcase"></i> --}}
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
                        {{ $projects->links('pagination::bootstrap-4') }}
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
</div>
