<div>
        <!-- Banner Start -->
        <section id="banner-section" class="">
            <div class="overlay">
                <div class="container">
                    <div class="row text-center">
                        <div class="col-md-12 mb-10">
                            <h1 class="text-light">Blog Details</h1>
                        </div>
                        <div class="col-md-12">
                            <ul class="d-flex justify-content-center">
                                <li><a href="/">Home</a></li>
                                <li><a class=""> - </a></li>
                                <li><a class="active" href="#!">Blog Details</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Banner End -->

        <!-- Blog Single start -->
        <section id="blog-details" class="mt-55">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="card blog-content mt-50">
                            <div class="title">
                                <h2 style="text-transform: uppercase;">{{ $blog->name }}</h2>
                            </div>
                            <div class="card blog-info mt-20">
                                <ul class="post-meta d-flex">
                                    <li><i class="fa fa-calendar-check-o"></i>{{ $blog->created_at }}</li>
                                    <li><i class="fa fa-user"></i>{{ $blog->user->name }}</li>
                                    <li><i class="fa fa-star"></i>{{ $reviews->count() }}  Comments</li>
                                </ul>
                            </div>
                            <div class="blog-content">
                                <div class="content-img mt-30">
                                    <img src="{{ asset('assets/images/blog') }}/{{ $blog->image }}" alt="">
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="description mt-30">
                                    <p>{{ $blog->description }}</p>
                                </div>

                                <div class="mt-30">
                                    <div class="comments">
                                        <div class="product-rating">
                                            @php
                                                $avgRating = 0
                                            @endphp
                                            @if ($reviews)
                                            @foreach ($reviews as $review)
                                                @php
                                                    $avgRating = $avgRating + $review->rating;
                                                @endphp
                                            @endforeach

                                            <h3>{{ $reviews->count() }} Comment(s)</h3>
                                            {{-- <a href="#" class="count-review">({{ $reviews->count() }} review)</a> --}}
                                            @endif
                                        </div>

                                        @foreach ($reviews as $review)
                                        <div class="single-comment">
                                            <div class="author-post">

                                                <div class="author-thumb">
                                                    <img
                                                        src="{{ asset('assets/images/user.png') }}"
                                                        alt=""
                                                    />
                                                </div>
                                                <div class="author-info">
                                                    <h5>{{ $review->name}}</h5>
                                                    <span
                                                        >{{date('d F, Y', strtotime(   $review->created_at )) }}</span
                                                    >
                                                </div>
                                            </div>
                                            <p>
                                                {{ $review->comment }}
                                            </p>
                                        </div>
                                            <hr/>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="blog-comment mt-50">
                                    <h4>Leave a comment</h4>
                                    <form class="mt-30" wire:submit.prevent="addReview">
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Name</label>
                                            <input type="text" class="form-control" wire:model="name" id="exampleFormControlInput1" placeholder="Enter your name">
                                            @error('name')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="mb-3">
                                            <label for="exampleFormControlInput2" class="form-label">Email</label>
                                            <input type="email" class="form-control" wire:model="email" id="exampleFormControlInput2" placeholder="name@example.com">
                                            @error('email')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleFormControlTextarea3" class="form-label">Message</label>
                                            <textarea class="form-control" wire:model="comment" id="exampleFormControlTextarea3" rows="5"></textarea>
                                            @error('comment')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="mt-25">
                                            <button  type="submit" class="btn btn-one">Post a comment</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="sidebar">
                            <div class="card sidebar-cmn blog-search mt-60">
                                <div class="card-header">
                                    <h5>Service Categories</h5>
                                </div>
                                <div class="card-body">
                                    <form>
                                        <input type="search" name="search" placeholder="Search">
                                        <button type="submit" class="btn"><i class="flaticon-search"></i></button>
                                    </form>
                                </div>
                            </div>
                            <div class="card sidebar-cmn blog-categories mt-50">
                                <div class="card-header">
                                    <h5>Recent Post</h5>
                                </div>
                                <div class="card-body">
                                    @foreach ($l_blogs as $l_blog)
                                    <div class="recent-post d-flex mt-20">
                                        <div class="recent-post-img">
                                            <img src="{{ asset('assets/images/blog') }}/{{ $l_blog->image }}" alt="">
                                        </div>
                                        <div class="recent-post-info">
                                            <a href="{{ route('blog.details', ['slug' => $l_blog->slug]) }}">
                                                <h6 style="text-transform: capitalize;">{{ $l_blog->name }}</h6>
                                            </a>
                                            <small>{{date('d F, Y', strtotime(   $l_blog->created_at )) }}</small>
                                            <small>|</small>
                                            <small>By {{ $l_blog->user->name }}</small>
                                        </div>
                                    </div>
                                    @endforeach


                                </div>
                            </div>
                            <div class="card sidebar-cmn blog-categories mt-50">
                                <div class="card-header">
                                    <h5>All Service Categories</h5>
                                </div>
                                <div class="card-body">
                                    <ul class="list-group list-group-flush">
                                        @foreach ($categories as $category)
                                        <li class="list-group-item"><a href="{{ route('service.detail',['slug' =>$category->slug]) }}">{{ $category->name }}</a></li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                            <div class="card sidebar-cmn blog-social mt-50">
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

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Blog Single end -->
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
