<div>
    <!-- Banner Start -->
    <section id="banner-section" class="">
        <div class="overlay">
            <div class="container">
                <div class="row text-center">
                    <div class="col-md-12 mb-10">
                        <h1 class="text-light">Online Form</h1>
                    </div>
                    <div class="col-md-12">
                        <ul class="d-flex justify-content-center">
                            <li><a href="/">Home</a></li>
                            <li><a class=""> - </a></li>
                            <li><a class="active" href="#!">Online Form</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner End -->

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

        </div>
    </section>
    <!-- Loan Process End -->

    <!-- Online Form Start -->
    <section id="online-form-section" class="mt-60">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="online-form-left mt-50">
                        <div class="title">
                            <h2>Start-up loan Inquiry</h2>
                        </div>
                        <div class="description mt-10">
                            <p>Please complete the short form below with your details and one of our advisors will be touch shortly</p>
                        </div>
                        <div class="online-form mt-30">
                            @if (Session::has('message'))
                            <div class="alert alert-success" role="alert">{{ Session::get('message') }}</div>
                            @endif
                            <form wire:submit.prevent="placeOrder">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput0" class="form-label">First Name <span>*</span></label>
                                            <input type="text" class="form-control" id="exampleFormControlInput0" wire:model="firstname">
                                        </div>
                                        @error('firstname')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput0" class="form-label">Last Name <span>*</span></label>
                                            <input type="text" class="form-control" id="exampleFormControlInput0" wire:model="lastname">
                                        </div>
                                        @error('lastname')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput2" class="form-label">Phone Number <span>*</span></label>
                                            <input type="text" class="form-control" id="exampleFormControlInput2" wire:model="mobile">
                                        </div>
                                        @error('mobile')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput3" class="form-label">Email address <span>*</span></label>
                                            <input type="email" class="form-control" id="exampleFormControlInput3" wire:model="email">
                                        </div>
                                        @error('email')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput4" class="form-label">City <span>*</span></label>
                                            <input type="text" class="form-control" id="exampleFormControlInput4" wire:model="city">
                                        </div>
                                        @error('city')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput4" class="form-label">Address <span>*</span></label>
                                            <input type="text" class="form-control" id="exampleFormControlInput4" wire:model="location">
                                        </div>
                                        @error('location')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput4" class="form-label">Country <span>*</span></label>
                                            <input type="text" class="form-control" id="exampleFormControlInput4" wire:model="country">
                                        </div>
                                        @error('country')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput5" class="form-label">Amount <span>*</span></label>
                                            <input type="number" class="form-control" id="exampleFormControlInput5" wire:model="price">
                                        </div>
                                        @error('price')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput6" class="form-label">Loan Category <span>*</span></label>
                                            <select class="form-select" aria-label="Default select example" id="exampleFormControlInput6" wire:model="category">
                                                <option selected value="">Choose Category</option>
                                                @foreach ($loans as $loan)
                                                <option value="{{ $loan->name }}">{{ $loan->name }}</option>
                                                @endforeach

                                            </select>
                                        </div>
                                        @error('category')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput7" class="form-label">Rate <span>*</span></label>
                                            <select class="form-select" aria-label="Default select example" id="exampleFormControlInput7" wire:model="rate">
                                                <option selected value="">Select Rate</option>
                                                <option value="10">10%</option>
                                                <option value="10">15%</option>
                                            </select>
                                        </div>
                                        @error('rate')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="mb-3">
                                            <label for="exampleFormControlTextarea8" class="form-label">How many Installments <span>*</span></label>
                                            <input type="number" class="form-control" id="exampleFormControlInput5" wire:model="installments">
                                        </div>
                                        @error('installments')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="mb-3">
                                            <label for="exampleFormControlTextarea9" class="form-label">Reason For the Money</label>
                                            <textarea class="form-control" id="exampleFormControlTextarea9" rows="3" wire:model="message"></textarea>
                                        </div>
                                        @error('message')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="mt-10">
                                            <button type="submit" class="btn btn-one btn-primary">Apply Now</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    {{-- <div class="online-form-right mt-60">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="text-light">Preview of Calculation</h4>
                            </div>
                            <div class="card-body">
                                <ul class="d-flex justify-content-between">
                                    <li>Monthly Payment:</li>
                                    <li><span>$455.78</span></li>
                                </ul>
                                <ul class="d-flex justify-content-between">
                                    <li>Number of Installment:</li>
                                    <li><span>20 Installment</span></li>
                                </ul>
                                <ul class="d-flex justify-content-between">
                                    <li>Total Payment:</li>
                                    <li><span>$1,20, 000.00</span></li>
                                </ul>
                                <ul class="d-flex justify-content-between">
                                    <li>Interest should be:</li>
                                    <li><span>$750.57</span></li>
                                </ul>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </section>
    <!-- Error Form End -->
</div>
