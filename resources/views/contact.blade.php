@extends('layouts.app')
@section('title','Saimeet - Contact Us')
@section('content')

<body>
   
    <!-- Main content -->
    <section class="slice py-6 pt-lg-7 pb-lg-8 bg-dark">
        <!-- Container-lg -->
        <div class="container">
            <div class="row row-grid align-items-center">
                <div class="col-lg-6">
                    <!-- Heading -->
                    <h1 class="h1 text-white text-center text-lg-left my-4">
                        Do You Have <strong>A Problem?</strong>
                    </h1>
                    <!-- Text -->
                    <p class="lead text-white text-center text-lg-left opacity-8">
                         Please click the button below if you encounter any issues while using our service.
                    </p>
                    <!-- Buttons -->
                    <div class="mt-5 text-center text-lg-left">
                        <a href="#sct-form-contact" data-scroll-to class="btn btn-white btn-lg btn-icon">
                            <span class="btn-inner--icon">
                                <i data-feather="edit-2"></i>
                            </span>
                            <span class="btn-inner--text">Write a message</span>
                        </a>
                    </div>
                    <!-- Clients -->
                    <div class="d-flex align-items-center justify-content-center justify-content-lg-left mt-5">
                        <div class="col-auto text-sm text-white pl-0 pr-4">Trusted by:</div>
                        <div class="client-group col">
                            <div class="row">
                                <div class="client col-3 py-3">
                                    <img alt="Image placeholder" src="assets/img/clients/svg/google-gray.svg">
                                </div>
                                <div class="client col-3 py-3">
                                    <img alt="Image placeholder" src="assets/img/clients/svg/spotify-gray.svg">
                                </div>
                                <div class="client col-3 py-3">
                                    <img alt="Image placeholder" src="assets/img/clients/svg/airbnb-gray.svg">
                                </div>
                                <div class="client col-3 py-3">
                                    <img alt="Image placeholder" src="assets/img/clients/svg/paypal-gray.svg">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- SVG separator -->
        <div class="shape-container shape-line shape-position-bottom">
            <svg width="2560px" height="100px" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" preserveAspectRatio="none" x="0px" y="0px" viewBox="0 0 2560 100" style="enable-background:new 0 0 2560 100;" xml:space="preserve" class="">
                <polygon points="2560 0 2560 100 0 100"></polygon>
            </svg>
        </div>
    </section>
    <section class="slice slice-lg">
        <div class="container-lg">
            <div class="row" style="display: flex; justify-content:center;">
             
                <div class="col-lg-4">
                    <div class="card text-center hover-translate-y-n10 hover-shadow-lg">
                        <div class="px-5 pb-5 pt-5">
                            <div class="py-4">
                                <div class="icon text-warning icon-sm mx-auto">
                                    <i data-feather="settings"></i>
                                </div>
                            </div>
                            <h5 class="">Technical support</h5>
                            <p class=" mt-2 mb-0">Lorem ipsum dolor
                                sit amet consectetur adipiscing.</p>
                            <div class="mt-4">
                                <a href="#" class="link-underline-warning">support@saimeet.com</a>
                            </div>
                        </div>
                    </div>
                </div>
              
            </div>
        </div>
    </section>
  
    <section class="slice slice-lg">
        <div class="container-lg text-center text-lg-left">
            <!-- Title -->
            <div class="row">
                <div class="col-lg-6 col-md-10">
                    <span class="badge badge-primary badge-pill">Support team</span>
                    <h5 class="h5 lh-180 mt-4 mb-6">Our support team is available 24/7 for any issues you might have with our products.</h5>
                </div>
            </div>
            <!-- Team -->
            <div class="row">
                <div class="col-lg-3 col-sm-6 mb-5 mb-lg-0">
                    <div data-animate-hover="2">
                        <div class="animate-this">
                            <a href="#">
                                <img alt="Image placeholder" class="img-fluid rounded shadow" src="assets/img/theme/light/person-1.jpg">
                            </a>
                        </div>
                        <div class="mt-3">
                            <h5 class="h6 mb-0">Heather Wright</h5>
                            <p class="text-muted text-sm mb-0">Founded &amp; Chairman</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 mb-5 mb-lg-0">
                    <div data-animate-hover="2">
                        <div class="animate-this">
                            <a href="#">
                                <img alt="Image placeholder" class="img-fluid rounded shadow" src="assets/img/theme/light/person-2.jpg">
                            </a>
                        </div>
                        <div class="mt-3">
                            <h5 class="h6 mb-0">Monroe Parker</h5>
                            <p class="text-muted text-sm mb-0">Back End Developer</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 mb-5 mb-lg-0">
                    <div data-animate-hover="2">
                        <div class="animate-this">
                            <a href="#">
                                <img alt="Image placeholder" class="img-fluid rounded shadow" src="assets/img/theme/light/person-3.jpg">
                            </a>
                        </div>
                        <div class="mt-3">
                            <h5 class="h6 mb-0">John Sullivan</h5>
                            <p class="text-muted text-sm mb-0">Front End Developer</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 mb-5 mb-lg-0">
                    <div data-animate-hover="2">
                        <div class="animate-this">
                            <a href="#">
                                <img alt="Image placeholder" class="img-fluid rounded shadow" src="assets/img/theme/light/person-4.jpg">
                            </a>
                        </div>
                        <div class="mt-3">
                            <h5 class="h6 mb-0">James Lewis</h5>
                            <p class="text-muted text-sm mb-0">Vice Chairman</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="slice slice-lg" id="sct-form-contact">
        <div class="container-lg position-relative zindex-100">
            <div class="row justify-content-center mb-5">
                <div class="col-lg-6 text-center">
                    <h3>Contact us</h3>
                    <p class="lh-190">If there's something we can help you with, jut let us know. We'll be more than happy to offer you our help</p>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <!-- Form -->
                    <form>
                        <div class="form-group">
                            <input class="form-control form-control-lg" type="text" placeholder="Your name" required>
                        </div>
                        <div class="form-group">
                            <input class="form-control form-control-lg" type="email" placeholder="email@example.com" required>
                        </div>
                        <div class="form-group">
                            <input class="form-control form-control-lg" type="text" placeholder="+40-745-234-567" required>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control form-control-lg" placeholder="Tell us a few words ..." rows="3" required></textarea>
                        </div>
                        <div class="text-center">
                            <!-- <div class="g-recaptcha" data-sitekey="6Lfs5ScUAAAAANAJwGrdfvWLFRRiVbKRE2vfoaFj"></div> -->
                            <button type="reset" class="btn-reset d-none"></button>
                            <button type="submit" class="btn btn-block btn-lg btn-primary mt-4">Send your message</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
   
</body>
@endsection