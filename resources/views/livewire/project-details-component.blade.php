<div>
       <!-- Banner Start -->
       <section id="banner-section" class="">
        <div class="overlay">
            <div class="container">
                <div class="row text-center">
                    <div class="col-md-12 mb-10">
                        <h1 class="text-light">{{ $project->name }}</h1>
                    </div>
                    <div class="col-md-12">
                        <ul class="d-flex justify-content-center">
                            <li><a href="/">Home</a></li>
                            <li><a class=""> - </a></li>
                            <li><a class="active" href="#!">Project Details</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner End -->

    <!-- Error page start -->
    <section id="service-details" class="mt-55">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="card project-content mt-50">
                        <div class="title">
                            <h2>{{ $project->name }}</h2>
                        </div>
                        <div class="project-img">
                            <div class="row">
                                <div class="col-lg-12">

                                    <div class="content-img mt-30">
                                        <img src="{{ asset('assets/images/projects') }}/{{ $project->image }}" alt="{{ $project->name }}">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="description mt-30">
                                @if ($project->short_description)
                                <p>{{ $project->short_description }}</p>
                                @endif
                                <p class="mb-0">{{ $project->description }}</p>
                            </div>
                            <div class="project-content">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="content-list mt-30">
                                            <div class="card">
                                                <div class="card-header">
                                                    <h5 class="text-dark">Servive Amenities</h5>
                                                </div>
                                                <ul class="list-group list-group-flush">
                                                    @foreach ($aminities as $aminity)
                                                    <li class="list-group-item"><i class="flaticon-checkmark"></i> {{ $aminity->name }}</li>
                                                    @endforeach


                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="content-list mt-30">
                                            <div class="card">
                                                <div class="card-header">
                                                    <h5 class="text-dark">Simple Title here</h5>
                                                </div>
                                                <ul class="list-group list-group-flush">
                                                    <li class="list-group-item"><i class="flaticon-checkmark"></i> Ipsam accusamus facere</li>
                                                    <li class="list-group-item"><i class="flaticon-checkmark"></i> voluptatem voluptatibus veritatis</li>
                                                    <li class="list-group-item"><i class="flaticon-checkmark"></i> Laborum distinctio, culpa.</li>
                                                    <li class="list-group-item"><i class="flaticon-checkmark"></i> Ipsam accusamus facere</li>
                                                    <li class="list-group-item"><i class="flaticon-checkmark"></i> voluptatem voluptatibus veritatis</li>
                                                    <li class="list-group-item"><i class="flaticon-checkmark"></i> Laborum distinctio, culpa.</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="sidebar">
                        <div class="card sidebar-cmn project-categories mt-60">
                            <div class="card-header">
                                <h5>All Services Categories</h5>
                            </div>
                            <div class="card-body">
                                <ul class="list-group list-group-flush">
                                    @foreach ($categories as $category)
                                    <li class="list-group-item"><a href="{{ route('service.detail',['slug' =>$category->slug]) }}">{{ $category->name }}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <div class="card sidebar-cmn project-social mt-50">
                            <div class="card-header">
                                <h5>Check on our Social Media Platforms</h5>
                            </div>
                            <div class="card-body">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item" ><a href="{{ $setting->facebook }}" target="_blank">Facebook <i class="text-right fa fa-facebook-f"></i></a></li>
                                    <li class="list-group-item" ><a href="{{ $setting->twitter }}" target="_blank">Twitter <i class="text-right fa fa-twitter"></i></a></li>
                                    <li class="list-group-item" ><a href="{{ $setting->youtube }}" target="_blank">Youtube <i class="text-right fa fa-youtube"></i></a></li>
                                    <li class="list-group-item" ><a href="{{ $setting->instagram }}" target="_blank">Instagram <i class="text-right fa fa-instagram"></i></a></li>
                                    <li class="list-group-item" ><a href="{{ $setting->linkedIn }}" target="_blank">LinkedIn <i class="text-right fa fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card sidebar-cmn sidebar-support mt-50">
                            <div class="card-header text-center">
                                <div class="support-title">
                                    <h5 class="text-light">Need support for better understanding this session?</h5>
                                </div>
                                <div class="support-icon mt-30">
                                    <i class="flaticon-call-center-agent"></i>
                                </div>
                            </div>
                            <div class="card-body support-info text-center">
                                <div class="">
                                    <i class="fa fa-phone"></i><span>{{ $setting->phone }}</span>
                                </div>
                                <div class="">
                                    <i class="fa fa-envelope"></i><span>{{ $setting->email }}</span>
                                </div>
                            </div>
                        </div>
                        {{-- <div class="card sidebar-cmn project-download mt-50">
                            <div class="card-header">
                                <div class="download-title">
                                    <h5>Download</h5>
                                </div>
                            </div>
                            <div class="card-body download-info text-center">
                                <div class="">
                                    <a href="javascript:void(0)"><i class="fa fa-file-pdf-o"></i><span>Company Profile</span></a>
                                </div>
                                <div class="">
                                    <a href="javascript:void(0)"><i class="fa fa-file-word-o"></i><span>Direct Download</span></a>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Error page end -->

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
                                    <i class="flaticon-network-1"></i>
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
                                    <i class="flaticon-consultation"></i>
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
                                    <i class="flaticon-operator"></i>
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
                                    <i class="flaticon-checkmark"></i>
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
