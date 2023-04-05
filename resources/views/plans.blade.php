@extends('layouts.app')
@section('title', 'Saimeet - Plans')
@section('content')

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
            <div class="col-lg-3 col-md">
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
                        <a href="#" class="btn btn-sm btn-warning hover-translate-y-n3 hover-shadow-lg mb-3 purchase-link" data-price="24.99" data-plan="BASIC">Purchase now</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md">
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
                        <a href="#" class="btn btn-sm btn-white hover-translate-y-n3 hover-shadow-lg mb-3 purchase-link" data-price="41.99" data-plan="PRO">Purchase now</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md">
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
                        <a href="#" class="btn btn-sm btn-warning hover-translate-y-n3 hover-shadow-lg mb-3 purchase-link" data-price="98.99" data-plan="BUSINESS" >Purchase now</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<script>
    const purchaseLinks = document.querySelectorAll('.purchase-link');

    purchaseLinks.forEach(function(purchaseLink) {
        purchaseLink.addEventListener('click', function(event) {
            event.preventDefault(); // prevent the default behavior of the link (i.e. navigating to the href)

            const price = this.getAttribute('data-price'); // get the value from the data-value attribute of the clicked element
            const plan = this.getAttribute('data-plan');


            localStorage.setItem('price', price); // store the value in localStorage
            localStorage.setItem('plan', plan);
            // do any other actions you want to perform when the link is clicked
            
            location.href = '/checkout';
        });
    });
</script>
@endsection