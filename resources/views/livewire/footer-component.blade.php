<div>
    <footer id="footer-section" class="mt-115">
        <!-- Start Footer Top -->
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-12 col-sm-6">
                        <div class="footer-cmn f-activity wow fadeInUp" data-wow-delay=".2s">
                            <h6>GET IN TOUCH</h6>
                            <h5>Subscribe Our Newsletter</h5>
                            <p>Making the world a better place through constructing elegant hierarchies. Innovations enabled by the Steeler institutes results in products that assist workers.</p>
                            <div class="subscribe mt-30">
                                <form>
                                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Enter Email">
                                    <button type="button" class="btn btn-primary"><i class="fa fa-send"></i></button>
                                </form>
                            </div>
                            <ul class="social d-flex mt-30">
                                <li><a href="{{ $setting->facebook }}" target="_blank"><i class="fa fa-facebook-f"></i></a></li>
                                <li><a href="{{ $setting->twitter }}" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="{{ $setting->youtube }}" target="_blank"><i class="fa fa-youtube"></i></a></li>
                                <li><a href="{{ $setting->instagram }}" target="_blank"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="{{ $setting->linkedIn }}" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12 col-sm-6">
                        <div class="footer-cmn f-address wow fadeInUp" data-wow-delay=".4s">
                            <h6>{{ $setting->address }}</h6>
                            <h5>Head Office</h5>
                            <p>Innovations enabled by the Steeler institutes results in products that assist workers.</p>
                            <ul class="mt-20">
                                @if ($setting->phone)
                                <li><a href="tel:{{ $setting->phone }}"><i class="flaticon-mobile"></i> {{ $setting->phone }}</a></li>
                                @endif
                                @if ($setting->phone2)
                                <li><a href="tel:{{ $setting->phone2 }}"><i class="flaticon-mail"></i> {{ $setting->phone2 }}</a></li>
                                @endif
                                @if ($setting->email)
                                <li><a href="mail:{{ $setting->email }}"><i class="fa fa-envelope" aria-hidden="true"></i>{{ $setting->email }} </a></li>
                                @endif
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 col-12 col-sm-6">
                        <div class="footer-cmn f-solutions f-links wow fadeInUp" data-wow-delay=".6s">
                            <h5>Services</h5>
                            <ul>
                                @foreach ($categories as $category)
                                <li><a href="{{ route('service.detail',['slug' =>$category->slug]) }}">{{ $category->name }} services</a></li>
                                @endforeach

                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 col-12 col-sm-6">
                        <div class="footer-cmn f-legal f-links wow fadeInUp" data-wow-delay=".8s">
                            <h5>Legal</h5>
                            <ul>
                                <li><a href="javascript:void(0)">Terms & Conditions</a></li>
                                <li><a href="javascript:void(0)">Privacy Policy</a></li>
                                <li><a href="javascript:void(0)">Customer Relations</a></li>
                                <li><a href="javascript:void(0)">Innovation</a></li>
                                <li><a href="javascript:void(0)">Quick Contact</a></li>
                                <li><a href="javascript:void(0)">Apply Online</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/ Footer Top End  -->

    </footer>
</div>
