@extends('layouts.app')
@section('title','Saimeet - Home')
@section('content')



<!-- ***** Preloader Start ***** -->
<div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
        <span class="dot"></span>
        <div class="dots">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
</div>
<!-- ***** Preloader End ***** -->



<!-- Main content -->
<section id="oreview" class="slice py-7">
    <div class="container">
        <div class="row row-grid align-items-center">
            <div class="col-12 col-md-5 col-lg-6 order-md-2 text-center">
                <!-- Image -->
                <figure class="w-100">
                    <img alt="Image placeholder" src="assets/img/svg/illustrations/illustration-3.svg" class="img-fluid mw-md-120">
                </figure>
            </div>
            <div class="col-12 col-md-7 col-lg-6 order-md-1 pr-md-5">
                <!-- Heading -->
                <h1 class="display-4 text-center text-md-left mb-3">
                    Amazing Platform for Virtual Meetings <strong class="text-primary">Start Meeting Now</strong>
                </h1>
                <!-- Text -->
                <p class="lead text-center text-md-left text-muted">
                    Use Saimeet to call your employees , your students , your team and your friends as well
                </p>
                <!-- Buttons -->
                <div class="text-center text-md-left mt-5">
                    <a href="https://webpixels.io/themes/quick-free-bootstrap-theme" class="btn btn-primary btn-icon" target="_blank">
                        <span class="btn-inner--text">Register now</span>
                        <span class="btn-inner--icon"><i data-feather="chevron-right"></i></span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="slice slice-lg pt-lg-6 pb-0 pb-lg-6 bg-section-secondary">
    <div class="container">
        <!-- Title -->
        <!-- Section title -->
        <div id="services" class="row mb-5 justify-content-center text-center">
            <div class="col-lg-6">
                <span class="badge badge-soft-success badge-pill badge-lg">
                    Get started
                </span>
                <h2 class="mt-4">Services</h2>
                <div class="mt-2">
                    <p class="lead lh-180">We serve All people with high quality growth services which are presented below</p>
                </div>
            </div>
        </div>
        <!-- Card -->
        <div class="row mt-5">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body pb-5">
                        <div class="pt-4 pb-5">
                            <img src="assets/img/svg/illustrations/illustration-5.svg" class="img-fluid img-center" style="height: 150px;" alt="Illustration" />
                        </div>
                        <h5 class="h4 lh-130 mb-3">Hold an Interview</h5>
                        <p class="text-muted mb-0">You can ace your interview from anywhere and anytime. Find features suitable for you and rock your interview.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body pb-5">
                        <div class="pt-4 pb-5">
                            <img src="assets/img/svg/illustrations/illustration-6.svg" class="img-fluid img-center" style="height: 150px;" alt="Illustration" />
                        </div>
                        <h5 class="h4 lh-130 mb-3">Flexible</h5>
                        <p class="text-muted mb-0">Adaptable for any workstyle, role, or device so you can choose when, where, and how you work.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body pb-5">
                        <div class="pt-4 pb-5">
                            <img src="assets/img/svg/illustrations/illustration-7.svg" class="img-fluid img-center" style="height: 150px;" alt="Illustration" />
                        </div>
                        <h5 class="h4 lh-130 mb-3">Secure</h5>
                        <p class="text-muted mb-0">Keep your sensitive conversations private with industry standard end to end encryption.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="plans" class="slice slice-lg bg-section-secondary">
    <div class="container text-center">
        <div class="row justify-content-center mb-6">
            <div class="col-lg-8">
                <!-- Title -->
                <h2 class="h1 strong-600">
                     Pricing & Plans
                </h2>
                <!-- Text -->
                <p class="text-muted">
                    Thousands of People around the world have already made Saimeet the main tool for Online Meeting.
                </p>
            </div>
        </div>
        <!-- Pricing -->
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md">
                <div class="card card-pricing text-center px-3 hover-scale-110">
                    <div class="card-header py-5 border-0 delimiter-bottom">
                        <div class="h1 text-center mb-0">$<span class="price font-weight-bolder">25</span></div>
                        <span class="h6 text-muted">BASIC License</span>
                    </div>
                    <div class="card-body">
                        <ul class="list-unstyled text-sm mb-4">
                            <li class="py-2">Team Chat</li>
                            <li class="py-2">Whiteboard 3 included</li>
                            <li class="py-2">50 Attendees per meeting</li>
                            <li class="py-2">Mail & Calendar Client </li>
                            <li class="py-2" style="text-decoration: line-through;">Cloud Storage 5GB</li>
                            <li class="py-2" style="text-decoration: line-through;">Extras SSO, managed domains & more</li>
                        </ul>
                        <a href="#" class="btn btn-sm btn-warning hover-translate-y-n3 hover-shadow-lg mb-3">Purchase now</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md">
                <div class="card card-pricing bg-yellow text-center px-3 border-0 hover-scale-110">
                    <div class="card-header py-5 border-0 delimiter-bottom">
                        <div class="h1 text-white text-center mb-0">$<span class="price font-weight-bolder">42</span></div>
                        <span class="h6 text-white">PRO License</span>
                    </div>
                    <div class="card-body">
                        <ul class="list-unstyled text-white text-sm opacity-8 mb-4">
                            <li class="py-2">Team Chat</li>
                            <li class="py-2">Whiteboard 3 included</li>
                            <li class="py-2">50 Attendees per meeting</li>
                            <li class="py-2">Mail & Calendar Client </li>
                            <li class="py-2">Cloud Storage 5GB</li>
                            <li class="py-2" style="text-decoration: line-through;">Extras SSO, managed domains & more</li>
                        </ul>
                        <a href="#" class="btn btn-sm btn-white hover-translate-y-n3 hover-shadow-lg mb-3">Purchase now</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md">
                <div class="card card-pricing text-center px-3 hover-scale-110">
                    <div class="card-header py-5 border-0 delimiter-bottom">
                        <div class="h1 text-center mb-0">$<span class="price font-weight-bolder">99</span></div>
                        <span class="h6 text-muted">BUSINESS License</span>
                    </div>
                    <div class="card-body">
                        <ul class="list-unstyled text-sm mb-4">
                            <li class="py-2">Team Chat</li>
                            <li class="py-2">Whiteboard 3 included</li>
                            <li class="py-2">50 Attendees per meeting</li>
                            <li class="py-2">Mail & Calendar Client </li>
                            <li class="py-2">Cloud Storage 5GB</li>
                            <li class="py-2">Extras SSO, managed domains & more</li>
                        </ul>
                        <a href="#" class="btn btn-sm btn-warning hover-translate-y-n3 hover-shadow-lg mb-3">Purchase now</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>



@endsection