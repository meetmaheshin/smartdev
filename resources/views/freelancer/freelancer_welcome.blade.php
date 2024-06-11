@extends('layouts.freelance_register')
@section('content')
<section class="freelance_welcome_page mt-5">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-8">
                <div class="welcome_page_heading">
                    <h2 class="mb-4 mb-md-5 color_black font_weight_500 font_40">Hey <span>{{Auth()->user()->firstname}}.</span> Ready for your next big opportunity?</h2>
                </div>
                <div class="pt-3 mb-5 mr-md-4 welcome_list">
                    <ul class="p-0">
                        <li class="d-flex align-items-center border-bottom py-4">
                            <span class="welcome_list_icon me-4">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" aria-hidden="true" viewBox="0 0 24 24" role="img">
                                    <path vector-effect="non-scaling-stroke" stroke="var(--icon-color, #001e00)" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 11a4 4 0 100-8 4 4 0 000 8zM5 21v-.31a7 7 0 017-7v0a7 7 0 017 7V21"></path>
                                </svg>
                            </span>
                            <span class="font_weight_600">
                                Answer a few questions and start building your profile
                            </span>
                        </li>
                        <li class="d-flex align-items-center border-bottom py-4">
                            <span class="welcome_list_icon me-4">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" aria-hidden="true" viewBox="0 0 24 24" role="img">
                                    <path vector-effect="non-scaling-stroke" stroke="var(--icon-color, #001e00)" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M21 9v9a3 3 0 01-3 3H6a3 3 0 01-3-3V9"></path>
                                    <path vector-effect="non-scaling-stroke" stroke="var(--icon-color, #001e00)" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M21 9l-7.66 6.48a2 2 0 01-2.68 0L3 9m2.5-2.03L3 9m18 0l-2.5-2.03"></path>
                                    <path vector-effect="non-scaling-stroke" stroke="var(--icon-color, #001e00)" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M18 11.54V5a2 2 0 00-2-2H8a2 2 0 00-2 2v6.54"></path>
                                    <path vector-effect="non-scaling-stroke" stroke="var(--icon-color, #001e00)" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M14.5 6.2l-3.56 3.56L9.5 8.32"></path>
                                </svg>
                            </span>
                            <span class="font_weight_600">
                                Apply for open roles or list services for clients to buy
                            </span>
                        </li>
                        <li class="d-flex align-items-center border-bottom py-4">
                            <span class="welcome_list_icon me-4">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" aria-hidden="true" viewBox="0 0 24 24" role="img">
                                    <path vector-effect="non-scaling-stroke" stroke="var(--icon-color, #001e00)" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M11.5 21c7-2 7.5-6.41 7.5-6.41V5.43L11.5 3 4 5.43v9.16S4.5 19 11.5 21z"></path>
                                    <path vector-effect="non-scaling-stroke" stroke="var(--icon-color, #001e00)" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9.22 13.91a2.08 2.08 0 002.28 1.79 2.08 2.08 0 002.28-1.79 1.68 1.68 0 00-1.13-1.56c-.62-.23-1.93-.55-2.54-.83a1.56 1.56 0 01-.89-1.43A2.08 2.08 0 0111.5 8.3a2.08 2.08 0 012.28 1.79M11.5 8.3V7m0 10v-1.3"></path>
                                </svg>
                            </span>
                            <span class="font_weight_600">
                                Get paid safely and know we’re there to help
                            </span>
                        </li>
                    </ul>
                </div>
                <div class="welcom_btn d-flex flex-wrap mb-3 align-items-center">
                    <a href="{{route('create_profile.title')}}" class="up_green_btn me-5 text-decoration-none">Get started</a>
                    <span class="color_grey font_14 mb-4 mb-md-0">It only takes 5-10 minutes and you can edit it later. We’ll save as you go.</span>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection