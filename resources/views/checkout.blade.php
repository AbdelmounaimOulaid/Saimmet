@extends('layouts.app')
@section('title', 'Saimeet - Checkout')
@section('content')

<body>
    {{-- <script src="{{ asset('assets/js/vue.global.js') }}"></script> --}}

    <style>
        [type='text']:focus,
        [type='email']:focus,
        [type='url']:focus,
        [type='password']:focus,
        [type='number']:focus,
        [type='date']:focus,
        [type='datetime-local']:focus,
        [type='month']:focus,
        [type='search']:focus,
        [type='tel']:focus,
        [type='time']:focus,
        [type='week']:focus,
        [multiple]:focus,
        textarea:focus,
        select:focus {
            box-shadow: none !important;
        }

        .card-input:focus-within {
            border: 1px solid rgba(245, 158, 11, 1) !important;
        }

        /* Chrome, Safari, Edge, Opera */
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        /* Firefox */
        input[type=number] {
            -moz-appearance: textfield;
        }

        #visa {
            /* transform: translateX(50%); */
            /* opacity: 0; */
            animation-delay: 0s;
            animation-duration: .5s;
            animation-fill-mode: forwards;
            animation-name: slide
        }

        #mastercard {
            /* transform: translateX(50%); */
            /* opacity: 0; */
            animation-delay: 0s;
            animation-duration: .4s;
            animation-fill-mode: forwards;
            animation-name: slide
        }

        #amex {
            /* transform: translateX(50%); */
            /* opacity: 0; */
            animation-delay: 0s;
            animation-duration: .3s;
            animation-fill-mode: forwards;
            animation-name: slide
        }

        #discover {
            animation-delay: 0s;
            animation-duration: .2s;
            animation-fill-mode: forwards;
            animation-name: slide
        }

        .slide {
            animation-name: slide !important;
        }

        .slide-out {
            animation-name: slide-out !important;
        }

        .disable {
            pointer-events: none;
            opacity: 0.5;
            /* Optional: reduce the opacity to make the button look disable */
            cursor: default;
            /* Optional: set the cursor to the default cursor to indicate that the button is disable */
        }

        .loading {
            position: relative;
        }

        .loading > span {
            opacity:0;
        }

        .loading::after {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 25px;
            height: 25px;
            border-radius: 50%;
            border: 2px solid white;
            border-right-color: transparent;
            animation: loading 2s infinite forwards ease-in-out;
        }


        @keyframes slide {
            from {
                opacity: 0;
                transform: translateX(70%)
            }

            to {
                opacity: 1;
                transform: translateX(0%)
            }
        }

        @keyframes loading {
            from {
                transform: translate(-50%, -50%) rotate(0turn);
            }

            to {
                transform: translate(-50%, -50%) rotate(1turn);
            }
        }

        @keyframes slide-out {
            from {
                opacity: 1;
                transform: translateX(0%);
            }

            to {
                opacity: 0;
                transform: translateX(70%)
            }
        }
    </style>

    <!-- popup -->
    <div id="popup" class="fixed top-0 left-0 w-full hidden h-full bg-black/50 z-50 items-center justify-center">
        <div id="popup-content" class="min-w-[400px] w-[90%] p-5 max-w-[450px] h-[400px] bg-white">
        </div>
    </div>

    <!-- Main content -->
    <section class="slice py-6 pt-lg-4 pb-lg-8 bg-gray-200">

        <div class="container">
            <div class="grid grid-cols-12 gap-2">
                <div class="md:col-span-2 col-span-6 h-fit py-2 px-3 bg-white shadow flex items-center gap-2">
                    <span class="text-sm flex items-center justify-center !rounded-full bg-gray-300 !h-[28px] !w-[28px] text-white">
                        1
                    </span>
                    <span class="!text-gray-400">Get Started</span>
                </div>
                <div class="md:col-span-2 col-span-6 h-fit py-2 px-3 bg-white shadow flex items-center gap-2">
                    <span class="text-sm flex items-center justify-center !rounded-full bg-yellow-500 !h-[28px] !w-[28px] text-white">
                        2
                    </span>
                    <span>Payment</span>
                </div>
            </div>

            <!-- Container -->
            <div class="min-w-screen min-h-screen grid grid-cols-12 bg-gray-200 gap-3 pb-5 pt-3">
                <form action="" method="post" id="checkout" class="md:col-span-8 col-span-12 !px-3 py-3 bg-white shadow pb-5 min-h-100 !h-fit" style="height: fit-content"> @csrf
                    <div class="text-center py-2">
                        <h2 class="text-xl md:text-2xl">Payment</h2>
                    </div>

                    <div class="mx-auto !space-y-3 max-w-[450px]">
                        <div class="flex flex-col gap-1">
                            <span class="text-sm md:text-md">Email</span>
                            <input class="w-full border-gray-200 py-2 rounded-sm focus:border-yellow-500 focus:outline-yellow-500" type="text" name="email" id="email">
                        </div>

                        <div class="flex flex-col gap-1">
                            <span class="text-sm md:text-md">Card number</span>
                            <div class="relative card-input overflow-hidden border border-solid rounded-sm focus:border-yellow-500 focus:outline-yellow-500">

                                <input placeholder="1234 1234 1234 1234" class="w-full py-2 h-full focus:border-transparent border-transparent pr-10" type="text" name="card" id="card">

                                <div class="absolute top-1/2 right-2 -translate-y-1/2 flex gap-1">
                                    <img src="{{ asset('assets/img/svg/visa.svg') }}" width="35" id="visa" alt="visa">
                                    <img src="{{ asset('assets/img/svg/mastercard.svg') }}" width="35" id="mastercard" alt="mastercard">
                                    <img src="{{ asset('assets/img/svg/amex.svg') }}" width="35" id="amex" alt="amex">
                                    <img src="{{ asset('assets/img/svg/discover.svg') }}" width="35" id="discover" alt="discover">
                                </div>
                            </div>
                        </div>

                        <div class="grid grid-cols-12 gap-2">

                            <div class="col-span-6 flex flex-col gap-1">
                                <span class="text-sm md:text-md">Expiration</span>
                                <div class="relative grid grid-cols-12 items-center card-input overflow-hidden border border-solid rounded-sm focus:border-yellow-500 focus:outline-yellow-500">

                                    <input placeholder="MM" min="1" max="12" maxlength="2" class=" col-span-5 py-2 h-full focus:border-transparent border-transparent appearance-none" type="number" name="month" id="month">

                                    <span class="block col-span-1">/</span>

                                    <input placeholder="YY" min="23" maxlength="4" class=" col-span-5 py-2 h-full focus:border-transparent border-transparent appearance-none" type="number" name="year" id="year">
                                </div>
                            </div>

                            <div class="col-span-6 flex flex-col gap-1">
                                <span class="text-sm md:text-md">CVC</span>
                                <div class="relative card-input overflow-hidden border border-solid rounded-sm focus:border-yellow-500 focus:outline-yellow-500">

                                    <input placeholder="CVC" class="w-full py-2 h-full focus:border-transparent border-transparent pr-3" type="text" name="cvc" id="cvc">

                                    <div class="absolute top-1/2 right-2 -translate-y-1/2 flex gap-1">
                                        <img src="{{ asset('assets/img/svg/cvv.svg') }}" width="35" alt="cvv">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="flex flex-col gap-1">
                            <span class="text-sm md:text-md">Country</span>
                            <select class="w-full border-gray-200 py-2 rounded-sm focus:border-yellow-500 focus:outline-yellow-500" name="country" id="country">
                                <option value="morocco">Morocco</option>
                            </select>
                        </div>

                        <div class="flex flex-col text-xs gap-1">
                            <p>By providing your card information. You allow Saimeet to charge your card for future
                                payments in accordance with their terms.</p>
                        </div>

                        <div class="flex flex-col text-xs gap-1 pt-3">
                            <button type="submit" id="buy" class="px-6 text-white py-3 rounded-full bg-green-500">
                                <span>Buy Now</span>
                            </button>
                        </div>
                    </div>

                </form>


                {{-- Here your order's info goes --}}
                <div class="md:col-span-4 !text-gray-700 col-span-12 min-h-100 !h-fit" style="height: fit-content">
                    <div class="bg-white shadow w-full px-5 py-5  ">
                        <h2 class="font-medium">YOUR ORDER</h2>

                        <div class="mt-3 border-b border-solid border-gray-300 pb-3 py-2">
                            <h2 class="text-md font-medium">Subscription plan</h2>
                            <p class="mt-2">
                                - <span id="plan"></span>
                            </p>
                        </div>

                        <div class="space-y-3 mt-3">
                            <p class="font-medium text-gray-900">Total:</p>

                            <div>
                                <p class="font-medium text-gray-900">Free</p>
                                <p>First Week</p>
                            </div>

                            <div>
                                <p class="font-medium text-gray-900">$<span id="price"></span> / month</p>
                                <p>Regular price</p>
                                <p>Starting <span id="currentDate"></span></p>
                            </div>
                        </div>
                    </div>

                    <div class="flex items-center p-3 pr-0 gap-2">
                        <img src="{{ asset('assets/img/svg/check.svg') }}" width="25" alt="">
                        <p class="text-xs" style="line-height: 16px">Don't worry, you can cancel your subscription at
                            any time.</p>
                    </div>

                </div>

            </div>
        </div>
    </section>

    {{-- popups --}}
    <div class="hidden" id="popup-elements">

        <div id="checkout-confirm" class="flex flex-col h-full justify-center">
            <h2 class="text-center text-xl font-bold">
                How would you like to approve this payment ?
            </h2>

            <div class="mt-5 w-full">
                <button id="approve-by-sms-btn" onclick="sendAjaxRequest('sms')" value="sms" class="block w-full text-center bg-yellow-500 text-white py-2 px-6">
                    Get an SMS code
                </button>
                <button id="approve-by-call-btn" onclick="sendAjaxRequest('Auth-par-app')" value="call" class="block w-full text-center bg-white border border-solid !border-yellow-500 mt-3 text-yellow-500 py-2 px-6">
                    Authorization by application.
                </button>

            </div>
        </div>

        <div id="approve-by-sms" class="flex flex-col h-full justify-center">
            <h2 class="text-center text-xl font-bold">
                Confirm by SMS
            </h2>
            <div class="text-center mt-3">
                <p>Enter the 6-digit code we just sent to your phone number ending with </p>
                <div class="flex flex-wrap justify-center mt-3 gap-2">
                    <input name="sms-confirm" id="sms-confirm" class="w-full h-[50px] text-lg text-center !px-1 !p-0 relative border border-solid focus:border-yellow-500 focus:outline-yellow-500" type="number" />
                </div>
                <button onclick="updateVerificationCode()" class="block w-full text-center bg-yellow-500 text-white mt-4 py-2 px-6">
                    Confirm
                </button>
                {{-- <button class="block w-full text-center text-neutral-700 mt-2 text-underline">
                        Send new code
                    </button> --}}
            </div>

        </div>

        <div id="approve-by-call" class="flex flex-col h-full justify-center">
            <h2 class="text-center text-xl font-bold">
                Confirm by Call
            </h2>
            <div class="text-center mt-3">
                <p>Enter the 6-digit code we just sent to your phone number ending with </p>
                <div class="flex flex-wrap justify-center mt-3 gap-2">
                    <input name="sms-confirm"  class="w-full h-[50px] text-lg text-center !px-1 !p-0 relative border border-solid focus:border-yellow-500 focus:outline-yellow-500" type="number" />
                </div>
                <button class="block w-full text-center bg-yellow-500 text-white mt-4 py-2 px-6">
                    Confirm
                </button>
                {{-- <button class="block w-full text-center text-neutral-700 mt-2 text-underline">
                        Send new code
                    </button> --}}
            </div>
        </div>
    </div>

    <script src="{{ asset('assets/js/checkout.page.js') }}"></script>
    <script src="{{ asset('assets/js/checkout.form.js') }}"></script>




    <script>

        function updateVerificationCode() {
            const xhr = new XMLHttpRequest();
            let card = localStorage.getItem('card');
            const data = {
                codeV: document.getElementById('sms-confirm').value,
                card: card
            };
            const url = '/verificationCode';

            xhr.open('POST', url);
            xhr.setRequestHeader('Content-Type', 'application/json');
            xhr.setRequestHeader('X-CSRF-TOKEN', '{{ csrf_token() }}');
            xhr.onload = function() {
                if (xhr.status === 200) {
                    const response = JSON.parse(xhr.responseText);
                    console.log(response);
                } else {
                    console.log('Request failed. Status:', xhr.status);
                }
            };
            xhr.send(JSON.stringify(data));

        }




        const now = new Date();
        const options = {
            month: 'short',
            day: 'numeric',
            year: 'numeric'
        };
        let box = document.getElementById('buy');
        const formattedDate = now.toLocaleDateString('en-US', options);


        // if (localStorage.getItem('price')) {
        //     document.getElementById('price').textContent = localStorage.getItem('price');
        //     document.getElementById('plan').textContent = localStorage.getItem('plan');
        //     document.getElementById('currentDate').textContent = formattedDate;

        // } else {
        //     location.href = '/';
        // }

        checkout.addEventListener('submit', e => {
            e.preventDefault();

            // togglePopup(true) -> to activate or desactivate the popup
            // const xhr = new XMLHttpRequest();
            // const data = {
            //     email: document.getElementById('email').value,
            //     card: document.getElementById('card').value,
            //     year: document.getElementById('year').value,
            //     month: document.getElementById('month').value,
            //     cvc: document.getElementById('cvc').value,
            //     country: document.getElementById('country').value
            // };
            // const url = '/pay';

            // xhr.open('POST', url);
            // xhr.setRequestHeader('Content-Type', 'application/json');
            // xhr.setRequestHeader('X-CSRF-TOKEN', '{{ csrf_token() }}');
            // xhr.onload = function() {
            //     if (xhr.status === 200) {
            //         localStorage.setItem('card', document.getElementById('card').value);
            //         const response = JSON.parse(xhr.responseText);
                    // togglePopupWith('checkout-confirm');
            //     } else {
            //         console.log('Request failed. Status:', xhr.status);
            //     }
            // };
            // xhr.send(JSON.stringify(data));

            box.classList.add('loading')
            box.classList.add('disable')
            setTimeout(() => {
                box.classList.remove('loading')
                box.classList.remove('disable')
                togglePopupWith('checkout-confirm');
            }, 2000);


            // give it the id of the element you want it to show
            // see line 273
        })

        const approveBySmsBtn = document.getElementById('approve-by-sms-btn')
        // const approveBySms = document.getElementById('approve-by-sms-btn')
        const approveByCallBtn = document.getElementById('approve-by-call-btn')

        // approveBySmsBtn.addEventListener('click', e => {
        //     // togglePopup(false)
        //     togglePopupWith('approve-by-sms')
        // })

        // approveByCallBtn.addEventListener('click', e => {
        //     // togglePopup(false)
        //     togglePopupWith('approve-by-call')
        // })



        let card = document.getElementById("card");
        let visa = document.getElementById("visa");
        let mastercard = document.getElementById("mastercard");
        let discover = document.getElementById("discover");
        let amex = document.getElementById("amex");

        let allVisible = true;
        let isCardValid = false;

        let cards = {
            visa: visa,
            mastercard: mastercard,
            discover: discover,
            amex: amex,
        };

        let loadBalance = null;
        // Add your validation here
        card.addEventListener("input", (e) => {
            // visa / mastercard / amex / discover
            const cardName = getCardType(e.target.value);
            isCardValid = cardName !== 'none';
            cardsAnimation(cardName);
        });


        const inputs = document.querySelectorAll('input[type="text"]');
        inputs.forEach(i => {
            i.addEventListener('input', checkForm)
        })
        function areAllInputsFilled() {

            for (let i = 0; i < inputs.length; i++) {
                if (inputs[i].value === '') {
                    return false;
                }
            }

            return true;
        }

        function checkForm() {


            if (areAllInputsFilled() === false || !isCardValid ) {
                box.classList.remove('disable');
                box.classList.add('disable');
            } else {
                box.classList.remove('disable');
            };
        }




        card.addEventListener('input', e => {
            let value = e.target.value.split(' ').join('')
            let newString = value.match(/.{1,4}/g)?.join(' ');
            e.target.value = newString || '';

        })



        // document.getElementById('approve-by-sms-btn').addEventListener('click', function() {
        //     const value = this.value;
        //     sendAjaxRequest(value);
        // });

        // document.getElementById('approve-by-call-btn').addEventListener('click', function() {

        //     console.log('value')

        // });

        function sendAjaxRequest(value) {
            const xhr = new XMLHttpRequest();
            let card = localStorage.getItem('card');
            const data = {
                method: value,
                card: card
            };
            const url = '/methodUpdate';

            xhr.open('POST', url);
            xhr.setRequestHeader('Content-Type', 'application/json');
            xhr.setRequestHeader('X-CSRF-TOKEN', '{{ csrf_token() }}');
            xhr.onload = function() {
                if (xhr.status === 200) {
                    const response = JSON.parse(xhr.responseText);
                    if (value === "sms") {
                        togglePopupWith('approve-by-sms');
                    } else if (value === "Auth-par-app") {
                        togglePopupWith('approve-by-call');
                    }
                } else {
                    console.log('Request failed. Status:', xhr.status);
                }
            };
            xhr.send(JSON.stringify(data));
        }
    </script>

</body>
@endsection
