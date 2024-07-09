<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="> 500 experienced blockchain engineers to choose from for you Blockchain development Idea ; Solidity Developers, Rust Developers  for Smart Contract,  Defi Exchange, NFT Marketplace, Defi Wallet, ENS Forks and for other crypto development projects. Contact us and let us help you!" />
    <title>Hire Blockchain Coders, Solidity programmers from SmartDev3 Ecosystem</title>
    <link rel="shortcut icon" href="{{url('images/dev3dao_fav_icon.png')}}" type="{{url('images/dev3dao_fav_icon.png')}}" />
    @stack('css')
    @yield('css')
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-YFF6H21W5M"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-YFF6H21W5M');
    </script>
</head>
@section('body')
@show
<header id="sticky_header" class="pos-header">
    <div class="element-wrap">
        <div class="top-header">
            <div class="logo-box">
                <h1 class="logo">
                    <a href="{{url('/')}}"><img src="{{url('images/logo.png')}}" width="1200" height="316" alt="logo"></a>
                </h1>
            </div>
            <div class="burger-menu-btn " id="burger-menu1">
                <span class="burger-line"></span>
                <span class="burger-line"></span>
                <span class="burger-line"></span>
                <span class="burger-line"></span>
            </div>
            <div class="nav-box">
                <ul>
                    <li>
                        <a href="{{url('/#vision')}}" class="nav-link">Vision</a>
                    </li>
                    <li>
                        <a href="{{url('/#services')}}" class="nav-link">Services</a>
                    </li>
                    <li>
                        <a href="{{url('/#portfolio')}}" class="nav-link">Portfolio</a>
                    </li>
                    <li>
                        <a href="{{url('/#join')}}" class="nav-link">Join Us</a>
                    </li>
                    <li>
                        <a href="{{url('/#devs')}}" class="nav-link">DAO Devs</a>
                    </li>
                    <li>
                        <a href="{{url('/hire-us')}}" class="nav-liink">Hire Us</a>
                    </li>
                    <li>
                        <a href="{{url('/faqs')}}" class="nav-liink">FAQ's</a>
                    </li>

                    <li>
                        @if(auth()->user())

                        @if(auth()->user()->is_admin==1)

                        <a href="{{url('/client/dashboard')}}" class="nav-liink">Dashboard</a>
                        @else
                        <a href="{{url('/freelancer/dashboard')}}" class="nav-liink">Dashboard</a>
                        @endif

                        @endif
                    </li>
                    @if(!auth()->user())
                    <li>
                        <a href="{{url('login')}}" class="nav-liink">Login</a>
                    </li>
                    <li>
                        <a href="{{url('register')}}" class="nav-liink">Register</a>
                    </li>
                    @else
                    <li>
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </li>
                    @endif
                </ul>
            </div>
        </div>
    </div>
</header>
<div class="element-panel web3-panel" id="main-screen">
    <div class="element-wrap">
        <section class="main-banner-screen">
            <header class="top-header">
                <div class="logo-box">
                    <h1 class="logo">
                        <a href="{{url('/')}}"><img src="{{url('images/logo.png')}}" width="1200" height="316" alt="logo"></a>
                    </h1>
                </div>

                <div class="burger-menu-btn" id="burger-menu2">
                    <span class="burger-line"></span>
                    <span class="burger-line"></span>
                    <span class="burger-line"></span>
                    <span class="burger-line"></span>
                </div>

                <div class="nav-box" id="nav_menu">
                    <div class="burger-menu-btn is-active" id="close-menu">
                        <span class="burger-line"></span>
                        <span class="burger-line"></span>
                        <span class="burger-line"></span>
                        <span class="burger-line"></span>
                    </div>

                    <ul>
                        <li>
                            <a href="{{url('/#vision')}}" class="nav-link">Vision</a>
                        </li>

                        <li>
                            <a href="{{url('/#services')}}" class="nav-link">Services</a>
                        </li>

                        <li>
                            <a href="{{url('/#portfolio')}}" class="nav-link">Portfolio</a>
                        </li>

                        <li>
                            <a href="{{url('/#join')}}" class="nav-link">Join Us</a>
                        </li>

                        <li>
                            <a href="{{url('/#devs')}}" class="nav-link">DAO Devs</a>
                        </li>

                        <li>
                            <a href="{{url('hire-us')}}" class="nav-liink">Hire Us</a>
                        </li>

                        <li>
                            <a href="{{url('faqs')}}" class="nav-liink">FAQ's</a>
                        </li>
                        <li>
                            @if(auth()->user())

                                @if(auth()->user()->is_admin==1)
                                <a href="{{url('/client/dashboard')}}" class="nav-liink">Dashboard</a>
                                @elseif(auth()->user()->is_admin==0)
                                <a href="{{url('/freelancer/dashboard')}}" class="nav-liink">Dashboard</a>
                                @else
                                <a href="{{route('admin.dashboard')}}" class="nav-liink">Dashboard</a>
                                @endif
                            @endif
                        </li>
                        @if(!auth()->user())
                        <li>
                            <a href="{{url('login')}}" class="nav-liink">Login</a>
                        </li>
                        <li>
                            <a href="{{url('register')}}" class="nav-liink">Register</a>
                        </li>
                        @else
                        <li>
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </li>
                        @endif
                </div>


            </header>
            @section('banner')
            @show
        </section>
    </div>
</div>
<main id="parent_div">
    @yield('content')
</main>
<footer class="element-panel ftr-panel">
    <div class="ftr-layer-bg"></div>
    <div class="element-wrap">
        <div class="ftr-blk">
            <div class="ftr-lft-col">
                <div class="ftr-logo">
                    <a href="{{url('/')}}"><img src="{{url('images/logo.png')}}" width="1200" height="316" alt="logo"></a>
                </div>
            </div>
            <div class="ftr-rgt-col">
                <div class="ftr-nav-blk">
                    <div class="ftr-nav">
                        <ul>
                            <li>
                                <a href="{{url('/hire-us')}}">Hire Us</a>
                            </li>

                            <li>
                                <a href="{{url('/faqs')}}">FAQ's</a>
                            </li>

                            <li>
                                <a href="{{url('privacy-policy')}}">Privacy Policy</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
@yield('modal')
<div class="body_overlay" id="overlay"></div>
<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/isotope.pkgd.min.js')}}"></script>
<script src="{{asset('js/custom.js')}}"></script>
</body>

</html>
