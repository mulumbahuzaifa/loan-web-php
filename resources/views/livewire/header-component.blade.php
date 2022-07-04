<div>
    <header class="header navbar-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="nav-inner">
                        <!-- Start Navbar -->
                        <nav class="navbar navbar-expand-lg">
                            <a class="navbar-brand style3" href="/">
                                <img src="{{ asset('assets/images/logo.png') }}" alt="Logo">
                            </a>
                            <button class="navbar-toggler mobile-menu-btn" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                                @php
                                $navlinks = array ( 'products' => 'Products', 'agri-inputs' => 'Agri-Inputs', 'blogs' => 'Blogs', 'contact-us' => 'Contact Us');
                                $current_page = substr($_SERVER['REQUEST_URI'], 1);  // trim off the leading slash
                                $current_page = str_replace('.php', '', $current_page);  // trim off the extension
                            @endphp
                                <ul id="nav" class="navbar-nav ms-auto">
                                    <li class="nav-item">
                                        <a href="/" class="{{ $current_page == '' ? 'active': '' }}" aria-label="Toggle navigation">Home</a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class=" nav-link dropdown-toggle collapsed {{ $current_page == 'loans' ? 'active': '' }}" href="{{ route('projects') }}"  aria-label="Toggle navigation">Loans</a>
                                        <ul class="sub-menu collapse dropdown-menu" id="submenu-1-2">
                                            @foreach ($loans as $loan)
                                                <li class="nav-item"><a href="{{ route('project.detail',['slug' =>$loan->slug]) }}">{{ $loan->name }}</a>
                                                </li>
                                            @endforeach

                                        </ul>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle collapsed {{ $current_page == 'services' ? 'active': '' }}" href="{{ route('service') }}"  aria-label="Toggle navigation">Services</a>
                                        <ul class=" sub-menu collapse dropdown-menu" id="submenu-1-1">
                                            @foreach ($categories as $category)
                                                <li class="nav-item"><a href="{{ route('service.detail',['slug' =>$category->slug]) }}">{{ $category->name }} Services</a></li>
                                            @endforeach
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a  href="{{ route('blogs') }}" class="{{ $current_page == 'blogs' ? 'active': '' }}" aria-label="Toggle navigation">Blogs</a>

                                    </li>
                                    <li class="nav-item">
                                        <a  href="{{ route('about') }}" class="{{ $current_page == 'about-us' ? 'active': '' }}" aria-label="Toggle navigation">About Us</a>

                                    </li>

                                        <li class="nav-item">
                                            <a href="{{ route('contact') }}" class="{{ $current_page == 'contact-us' ? 'active': '' }}" aria-label="Toggle navigation">Contact</a>
                                        </li>
                                        @if (Route::has('login'))
                                        @auth
                                        @if (Auth::user()->utype === 'ADM')
                                        <li class="nav-item dropdown">
                                            <a class=" nav-link dropdown-toggle collapsed" href="{{ route('service') }}"  aria-label="Toggle navigation">My Account ({{ Auth::user()->name }})</a>
                                            <ul class="sub-menu collapse dropdown-menu" id="submenu-1-1">
                                                <li class="menu-item dropdown-item" >
                                                    <a title="projects" href="{{ route('admin.projects') }}">Services</a>
                                                </li>
                                                <li class="menu-item dropdown-item" >
                                                    <a title="Categories" href="{{ route('admin.categories') }}">Categories</a>
                                                </li>
                                                <li class="menu-item dropdown-item" >
                                                    <a title="Orders" href="{{ route('admin.blogs') }}">Blogs</a>
                                                </li>
                                                <li class="menu-item dropdown-item" >
                                                    <a title="Branches" href="{{ route('admin.branches') }}">Branches</a>
                                                </li>
                                                <li class="menu-item dropdown-item" >
                                                    <a title="Staffs" href="{{ route('admin.staffs') }}">Staffs</a>
                                                </li>
                                                <li class="menu-item dropdown-item" >
                                                    <a title="Conatct Messages" href="{{ route('admin.contact') }}">Conatct Messages</a>
                                                </li>

                                                <li class="menu-item dropdown-item" >
                                                    <a title="Settings" href="{{ route('admin.settings') }}">Settings</a>
                                                </li>
                                                <li class="menu-item dropdown-item" >
                                                    <a title="Orders" href="{{ route('admin.orders') }}">Orders</a>
                                                </li>
                                                <li class="menu-item dropdown-item" >
                                                    <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" >Logout</a>
                                                </li>
                                                <form method="POST" id="logout-form" action="{{ route('logout') }}">
                                                    @csrf

                                                </form>
                                            </ul>
                                        </li>
                                        @else
                                        <li class="nav-item dropdown">
                                            <a class=" nav-link dropdown-toggle collapsed" href="{{ route('service') }}"  aria-label="Toggle navigation">My Account ({{ Auth::user()->name }})</a>
                                            <ul class="sub-menu collapse dropdown-menu" id="submenu-1-1">
                                                <li class="menu-item dropdown-item" >
                                                    <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" >Logout</a>
                                                </li>
                                                <form method="POST" id="logout-form" action="{{ route('logout') }}">
                                                    @csrf

                                                </form>
                                            </ul>
                                        </li>
                                        @endif
                                        @else
                                        <li class="nav-item dropdown">
                                            <a class=" nav-link dropdown-toggle collapsed" href="{{ route('login') }}"  aria-label="Toggle navigation">Login</a>
                                            <ul class="sub-menu collapse dropdown-menu" id="submenu-1-1">
                                                <li class="nav-item"><a href="{{ route('login') }}">Login</a>
                                                </li>
                                                <li class="nav-item"><a href="{{ route('register') }}">Register</a></li>
                                            </ul>
                                        </li>
                                        @endauth
                                        @endif
                                </ul>
                            </div>
                            <!-- navbar collapse -->
                            <div class="button add-list-button">
                                <a href="#" wire:click.prevent="checkout" class="btn">Apply For Loan</a>
                            </div>
                        </nav>
                        <!-- End Navbar -->
                    </div>
                </div>
            </div>
            <!-- row -->
        </div>
        <!-- container -->
    </header>
</div>
