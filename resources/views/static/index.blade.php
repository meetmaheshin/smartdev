@extends('layouts.static')
@section('body')

<body>
    @endsection
    @section('css')
    <link rel="stylesheet" href="{{asset('css/home-screen.css')}}">

    @endsection
    @section('content')
    <section class="Banner-section-main py-5">
        <div class="container custom-section custom-width">
            <div class="row align-items-center banner-section">
                <div class="col-md-7">
                    <h1 class="mb-0">Web3 Development on Steroids. Supercharged by AI.</h1>
                    <p class="py-3">Managed Marketplace of Top-Tier Talent. Powered by Smart Contracts and Advanced AI Tools.</p>
                    {{-- <a href="{{ url('/register?type=1') }}" class="btn custom_btn_border mr-3">Find Talent</a>
                    <a href="{{url('hire-us')}}" class="btn custom_btn_BG">Hire Us</a> --}}
                    <a href="{{ url('consultation') }}" class="btn custom_btn_BG">Start Your Project</a>
                </div>
                <div class="col-md-5 d-xs-none">
                    <img src="{{url('images/Banner_section.svg')}}" alt="Banner" class="img-fluid">
                </div>
            </div>
        </div>
    </section>

    <section class="telegram-section-main px-sm-3">
        <div class="container custom-width" style="background: url('{{url('images/background-img.svg')}}');">
            <div class="row justify-content-center align-items-center py-5">
                <div class="col-lg-8">
                    <div class="telegram-section bg-white p-5 text-center">
                        <h3 class="font-weight-bold font-30 font-weight-700">
                            <span class="text-orange">FREE</span> Creative Content inside Telegram
                        </h3>
                        <p class="text-center font-20 text-black">Hi! 👋 I am SmartDev3 Creative AI. Add me inside Telegram. I can generate unlimited creative marketing content for you and your teams.</p>
                        <a href="https://t.me/smartdev3ai" target="_blank" class="btn custom_btn_BG mt-3 "> <img src="{{url('images/telegrame.svg')}}" class="mr-2"> JOIN TELEGRAM TO GET ACCESS</a>
                  </div>
                </div>
            </div>
        </div>
    </section>

    <section id="vision-us-section" class="Faster-smarter-main py-5">
        <div class="container custom-width">
            <div class="row align-items-center my-5">
                
                <div class="col-lg-5 pl-0">
                    <div class="text-center py-5 p-sm-5 rounded" style="background: #F1FAFE">
                        <img src="{{url('images/smarter.png')}}" alt="" class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-7 col-md-7">
                    <div class="get-work">
                        <h1 class="mb-5">Get Work Done. Faster. Smarter.</h1>

                        <div class="d-flex align-items-start mb-4">
                            <div class="mr-3 icon-18">
                                <img src="{{url('images/post-your-project.svg')}}" alt="" >
                            </div>
                            <div class="get-work-list">
                                <h3>Post your Project</h3>
                                <p class="font-16 mb-0">Outline your web3 project needs. Your dedicated project manager handles the rest.</p>
                            </div>
                        </div>

                        <div class="d-flex align-items-start mb-4">
                            <div class="mr-3 icon-18">
                                <img src="{{url('images/pin.svg')}}" alt="">
                            </div>
                            <div class="get-work-list">
                                <h3>Hire top talent</h3>
                                <p class="font-16 mb-0">Select from vetted Web3 professionals. We manage deliveries till project completion.</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-start mb-4">
                            <div class="mr-3 icon-18">
                                <img src="{{url('images/milestone.svg')}}" alt="">
                            </div>
                            <div class="get-work-list">
                                <h3>Milestone based payments</h3>
                                <p class="font-16 mb-0">Secured by smart contracts. Managed through Stablecoins.</p>
                            </div>
                        </div>
                        <div class="d-flex flex-wrap gap-2">
                            {{-- <a href="{{ url('consultation') }}" class="btn custom_btn_border">BOOK FREE CONSULTATION</a> --}}
                            {{-- <a href="{{ url('register') }}" class="btn custom_btn_BG">START YOUR PROJECT TODAY</a> --}}
                            <a href="{{ url('consultation') }}" class="btn custom_btn_BG">Start Your Project</a>
                        </div>
                    </div>
                </div>  
                 
            </div>
        </div>
    </section>

    <section class="talent-section-main p-smaller">
        <div class="container custom-width">
            <div class="overlay py-5 px-4" style="background: url('{{url('images/great-work.svg')}}');">
                <p class="font-28 font-weight-500 text-white z-index">Talent</p>
                <div class="z-index w-45">
                    <h2 class="font-70 font-weight-800 text-white mb-4 inter">Find great work</h2>
                    <p class="font-18 text-white mb-0 inter font-weight-600">Empower Your Web3 Career and grow your business by leaps and bounds.</p>
                </div>
                <div class="row z-index pt-5 great-work-inner">
                    <div class="col-md-4">
                        <div class="text-center text-smaller-left">
                            <h4 class="font-22 text-white">Discover opportunities, from DeFi to Dapps to NFTs, tailored to your skills.</h4>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="text-center text-smaller-left">
                            <h4 class="font-22 text-white">Decide when, where and how you work</h4>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="text-center text-smaller-left">
                            <h4 class="font-22 text-white">Receive secured payments in global money through smart contracts.</h4>
                        </div>
                    </div>
                </div>
                <div class="z-index mt-5">
                    @if(auth()->check() && auth()->user()->is_admin == 0)
                        <a href="{{ url('/freelancer/dashboard') }}" class="btn custom_btn_BG mr-2">Find Projects</a>
                    @else
                        <a href="{{ url('/register?type=0') }}" class="btn custom_btn_BG mr-2">Find Projects</a>
                    @endif
                </div>
            </div>
        </div>
    </section>

    <section class="why-smartdev-main py-5 px-sm-3">
        <div class="container custom-width py-5" style="background: #F8FFF8;">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="pl-3 pl-smaller m-xs-5">
                        <h2 class="font-50 font-weight-800 text-black mb-4">Why Smartdev3 is the best in <span class="img-after"> Web3 </span></h2>
                        <p class="font-16 text-black mb-4 inter">Web 3.0 is the future and with this belief we have created an ecosystem to reduce idea to development time for Web3.0 ideas. If you have an idea for a Web 3.0 / Blockchain</p>

                        <div class="mb-4">
                            <div class="d-flex align-items-center">
                                <img src="{{url('images/post-your-project.svg')}}" alt="" class="mr-2">
                                <h3 class="font-28 mb-0 neue-medium">Managed by Smart Contracts</h3>
                            </div>
                            <p class="pt-2 mb-0 neue-regular">Each project is transformed into a smart contract, ensuring clear terms and automated enforcement.</p>
                        </div>

                        <div class="mb-4">
                            <div class="d-flex align-items-center">
                                <img src="{{url('images/post-your-project.svg')}}" alt="" class="mr-2">
                                <h3 class="font-28 mb-0 neue-medium">Milestone-Based Payments</h3>
                            </div>
                            <p class="pt-2 mb-0 neue-regular">Interview potential fits for your job, negotiate rates, and only pay for work you approve.</p>
                        </div>

                        <div class="mb-4">
                            <div class="d-flex align-items-center">
                                <img src="{{url('images/post-your-project.svg')}}" alt="" class="mr-2">
                                <h3 class="font-28 mb-0 neue-medium">Verified Professionals</h3>
                            </div>
                            <p class="pt-2 mb-0 neue-regular">Focus on your work knowing we help protect your data and privacy. We’re here with 24/7 support if you need it.</p>
                        </div>

                        <div class="mb-4">
                            <div class="d-flex align-items-center">
                                <img src="{{url('images/post-your-project.svg')}}" alt="" class="mr-2">
                                <h3 class="font-28 mb-0 neue-medium">Global Reach</h3>
                            </div>
                            <p class="pt-2 mb-0 neue-regular">Access a global network of Web3 talent and opportunities, breaking geographical barriers.</p>
                        </div>
                        <div class="d-flex flex-wrap gap-2">
                            {{-- <a href="{{ url('consultation') }}" class="btn custom_btn_border">Book Free Consultation</a> --}}
                            {{-- <a href="{{ url('register') }}" class="btn custom_btn_BG">Start Your Project Today</a> --}}
                            <a href="{{ url('consultation') }}" class="btn custom_btn_BG">Start Your Project</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="">
                        <img src="{{url('images/banner-web.svg')}}" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="testimonials pb-5 custom-width" id="dao-devs-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="mb-5">
                        <p class="vibrant-orange text-uppercase font-20 mb-1 neue-regular">Testimonials</p>
                        <h2 class="font-40 font-weight-700 text-black neue-bold">Trusted by Innovators</h2>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="review-details text-center">
                        {{-- <div class="mb-3">
                            <img src="{{url('images/unsplash.png')}}" alt="review">
                        </div> --}}
                        <h3 class="font-26 text-black mb-1 font-weight-700 neue-bold">Gaurav Gupta</h3>
                        <p class="font-18 font-weight-500 text-black mb-3 neue-medium">Head of Engineering, HABIT Network</p>
                        <p class="text-black font-16 mb-0 montserrat">Smartdev3 transformed our project workflow. The smart contract system ensured transparency and trust every step of the way.</p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="review-details text-center">
                        {{-- <div class="mb-3">
                            <img src="{{url('images/unsplash.png')}}" alt="review">
                        </div> --}}
                        <h3 class="font-26 text-black mb-1 font-weight-700 neue-bold">Rome Viharo</h3>
                        <p class="font-18 font-weight-500 text-black mb-3 neue-medium">Rome Viharo, Founder, AikiWiki</p>
                        <p class="text-black font-16 mb-0 montserrat">Running entire development stack here now. The milestone-based payment system run by smart contracts is a game-changer.</p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="review-details text-center">
                        {{-- <div class="mb-3">
                            <img src="{{url('images/unsplash.png')}}" alt="review">
                        </div> --}}
                        <h3 class="font-26 text-black mb-1 font-weight-700 neue-bold">Trevor Mitchell</h3>
                        <p class="font-18 font-weight-500 text-black mb-3 neue-medium">Head of Engineering, HABIT Network</p>
                        <p class="text-black font-16 mb-0 montserrat">Smartdev3 transformed our project workflow. The smart contract system ensured transparency and trust every step of the way.</p>
                    </div>
                </div>
            </div>
            <div class="text-center mt-5">
                <div class="d-flex justify-content-center flex-wrap gap-2">
                    {{-- <a href="{{ url('consultation') }}" class="btn custom_btn_border">Book Free Consultation</a> --}}
                    {{-- <a href="{{ url('register') }}" class="btn custom_btn_BG">Start Your Project Today</a> --}}
                    <a href="{{ url('consultation') }}" class="btn custom_btn_BG">Start Your Project</a>
                </div>
            </div>
        </div>
    </section>

    <section class="stories-section-main">
        <div class="container custom-width">
            <div class="py-5 px-4 stories-bg" style="background: url('{{url('images/success.jpeg')}}');">
                <p class="text-white font-28 mb-5 inter">Stories</p>
                <h1 class="font-70 font-weight-bold text-white inter mb-5">Success Stories</h1>

                <div class="row">
                    <div class="col-md-6">
                        <div class="overlay-black p-3 rounded mb-smaller">
                            <h4 class="font-28 font-weight-500 text-white mb-3 neue-medium">Revolutionizing DeFi Platforms</h4>
                            <p class="font-20 font-weight-500w text-white neue-medium">Discover how Smartdev3 helped a budding DeFi platform secure top developers and streamline their project milestones.</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="overlay-black p-3 rounded">
                            <h4 class="font-28 font-weight-500 text-white mb-3 neue-medium">Building the Future of NFTs</h4>
                            <p class="font-20 font-weight-500w text-white neue-medium">DLearn about our collaboration with an Trading Superdapp that leveraged our network to launch their groundbreaking platform.</p>
                        </div>
                    </div>
                    <div class="col-md-12 mt-5">
                        <a href="{{ url('consultation') }}" class="btn custom_btn_BG">Get More Details</a>
                    </div>
                </div>
            </div>
            
        </div>
    </section>

    <section id="join-us-section" class="join-us-main pb-5">
        <div class="container mt-5 custom-width">
            <div class="row justify-content-center">
                <div class="col-md-9">
                    <div class="join-us-section py-5 px-4 text-center bg-white">                    
                        <h2 class="join-us-title font-40 font-weight-700 mb-3 neue-bold">Join Us</h2>
                        <h3 class="join-us-subtitle font-32 font-weight-700 mb-3 neue-bold">Become a Part of the Web3 Revolution</h3>
                        <p class="join-us-description font-20 text-black mb-5 neue-regular">
                        Whether you're a business looking to innovate or a professional seeking exciting opportunities,
                        SmartenDev is your gateway to the future of Web3 development.
                        </p>
                        <div class="join-us-buttons">
                            {{-- <a href="{{ url('consultation') }}" class="btn custom_btn_border">Book Free Consultation</a> --}}
                            @if(auth()->check() && auth()->user()->is_admin == 1)
                                <a href="{{ url('/client/project_started') }}" class="btn custom_btn_BG">Post Your Project</a>
                            @else
                                <a href="{{ url('login') }}" class="btn custom_btn_BG">Post Your Project</a>
                            @endif

                            @if(auth()->check() && auth()->user()->is_admin == 0)
                                <a href="{{ url('/freelancer/dashboard') }}" class="btn custom_btn_border">Find Projects</a>
                            @else
                                <a href="{{ url('/register?type=0') }}" class="btn custom_btn_border">Find Projects</a>
                            @endif
                        </div>                    
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endsection
