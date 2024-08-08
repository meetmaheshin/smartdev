<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="> 500 experienced blockchain engineers to choose from for you Blockchain development Idea ; Solidity Developers, Rust Developers  for Smart Contract,  Defi Exchange, NFT Marketplace, Defi Wallet, ENS Forks and for other crypto development projects. Contact us and let us help you!" />
    <title>Hire Blockchain Coders, Solidity programmers from SmartDev3 Ecosystem</title>
    <link rel="shortcut icon" href="{{url('images/dev3dao_fav_icon.png')}}" type="{{url('images/dev3dao_fav_icon.png')}}" />
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/home-comman.css')}}">
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

<header class="navbar-menu">
    <nav class="navbar navbar-expand-lg navbar-light bg-white">
        <a class="navbar-brand" href="{{url('/')}}"><img src="{{url('images/logo.png')}}" alt="SmartDev3" width="180"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mr-auto">
                {{-- <li class="nav-item">
                    <a class="nav-link" href="{{url('/#vision-us-section')}}">Vision</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Portfolio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/#dao-devs-section')}}">DAO DEVS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/#join-us-section')}}">Join Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('hire-us')}}">Hire Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('faqs')}}">FAQ'S</a>
                </li> --}}
            </ul>
            <div class="form-inline">

                @if(auth()->user())
                    @if(auth()->user()->is_admin == 1)
                        <a href="{{ url('/client/dashboard') }}" class="btn my-2 my-sm-0 mr-2 custom_btn_border">Dashboard</a>
                    @elseif(auth()->user()->is_admin==0)
                        <a href="{{ url('/freelancer/dashboard') }}" class="btn my-2 my-sm-0 mr-2 custom_btn_border">Dashboard</a>
                    @else
                        <a href="{{route('admin.dashboard')}}" class="btn my-2 my-sm-0 mr-2 custom_btn_border">Dashboard</a>
                @endif
                    <a class="nav-link btn my-2 my-sm-0 custom_btn_BG" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <img src="{{url('images/signup.svg')}}" class="mr-2">
                    {{ __('Logout') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                    </form>
                @else
                    <a href="{{ url('register') }}" class="btn my-2 my-sm-0 mr-2 custom_btn_border">Sign Up</a>
                    <a href="{{ url('login') }}" class="btn my-2 my-sm-0 custom_btn_BG">
                    <img src="{{url('images/signup.svg')}}" class="mr-2">Log In</a>
                @endif
                
            </div>
        </div>
    </nav>
</header>

<main id="parent_div">
    @yield('content')
</main>
<footer class="footer py-5">
    <div class="container custom-width">
        <div class="row">
            <div class="col-md-4">
                <div class="logo"> 
                    <img src="{{url('images/logo.png')}}" width="230" alt="Footer-Logo">
                    {{-- <a href="{{url('/')}}"><img src="{{url('images/new-logo.svg')}}" alt="SmartDev3"></a> --}}
                </div>
                <div>
                    <span 
                        class="font-26 text-white font-weight-700" 
                        style="
                            position: relative;
                            display: inline-block;
                            background: url({{url('images/web3.svg')}}) no-repeat bottom;
                            background-size: contain;
                            padding-bottom: 15px;
                        "
                    > 
                        Web3 
                    </span>
                </div>
                {{-- <div>
                    <p>Social links</p>
                    <div class="social-links mt-3">
                        <a href="#" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                        <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                    </div>
                </div> --}}
                
            </div>
            <div class="col-md-4">
                {{-- <h5 class="font-18 font-weight-600 text-white mb-4">For customers</h5> --}}
                <ul class="footer-links">
                    {{-- <li><a href="{{url('faqs')}}" class="font-16 text-decoration-none">FAQs</a></li>
                    <li><a href="#" class="font-16 text-decoration-none">Results</a></li>
                    <li><a href="#" class="font-16 text-decoration-none">Remote Profile</a></li> --}}
                </ul>
            </div>
            <div class="col-md-4">
                {{-- <h5 class="font-18 font-weight-600 text-white mb-4">For customers</h5> --}}
                <ul class="footer-links">
                    {{-- <li><a href="#" class="font-16 text-decoration-none">UC Review</a></li>
                    <li><a href="#" class="font-16 text-decoration-none">Categories Near You</a></li>
                    <li><a href="#" class="font-16 text-decoration-none">Blog</a></li>
                    <li><a href="#" class="font-16 text-decoration-none">Contact Us</a></li> --}}
                    <li><a href="https://t.me/smartdev3ai" target="_blank" class="font-16 text-decoration-none">Join Community</a></li>
                    <li><a href="{{ url('consultation') }}" class="font-16 text-decoration-none">Contact Us</a></li>
                </ul>
            </div>
        </div>            
    </div>        
</footer>
<footer class="coppy-right text-center p-3 bg-white">
    <div class="container">
        <div class="row bg-white">
        <div class="col-12">
            <div class="copyright font-16 text-black">
                &copy; Copyright <span id="current-year"></span> SmartDev3. All rights reserved.
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
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
