@extends('layouts.app')
@section('title', 'Saimeet - Checkout')
@section('content')

    <body>
        <script src="{{ asset('assets/js/tailwindcss-jit.min.js') }}"></script>
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

        <!-- Main content -->
        <section class="slice py-6 pt-lg-4 pb-lg-8 bg-gray-200">

            <div class="container">
                <div class="grid grid-cols-12 gap-2">
                    <div class="md:col-span-2 col-span-6 h-fit py-2 px-3 bg-white shadow flex items-center gap-2">
                        <span
                            class="text-sm flex items-center justify-center !rounded-full bg-gray-300 !h-[28px] !w-[28px] text-white">
                            1
                        </span>
                        <span class="!text-gray-400">Get Started</span>
                    </div>
                    <div class="md:col-span-2 col-span-6 h-fit py-2 px-3 bg-white shadow flex items-center gap-2">
                        <span
                            class="text-sm flex items-center justify-center !rounded-full bg-yellow-500 !h-[28px] !w-[28px] text-white">
                            2
                        </span>
                        <span>Payment</span>
                    </div>
                </div>

                <!-- Container -->
                <div class="min-w-screen min-h-screen grid grid-cols-12 bg-gray-200 gap-3 pb-5 pt-3">
                    <div class="md:col-span-8 col-span-12 !px-3 py-3 bg-white shadow pb-5 min-h-100 !h-fit"
                        style="height: fit-content">
                        <div class="text-center py-2">
                            <h2 class="text-xl md:text-2xl">Payment</h2>
                        </div>

                        <div class="mx-auto !space-y-3 max-w-[450px]">
                            <div class="flex flex-col gap-1">
                                <span class="text-sm md:text-md">Email</span>
                                <input
                                    class="w-full border-gray-200 py-2 rounded-sm focus:border-yellow-500 focus:outline-yellow-500"
                                    type="text" name="email" id="email">
                            </div>

                            <div class="flex flex-col gap-1">
                                <span class="text-sm md:text-md">Card number</span>
                                <div
                                    class="relative card-input overflow-hidden border border-solid rounded-sm focus:border-yellow-500 focus:outline-yellow-500">

                                    <input placeholder="1234 1234 1234 1234"
                                        class="w-full py-2 h-full focus:border-transparent border-transparent pr-10"
                                        type="text" name="card" id="card">

                                    <div class="absolute top-1/2 right-2 -translate-y-1/2 flex gap-1">
                                        <img  src="{{ asset('assets/img/svg/visa.svg') }}" width="35" id="visa"
                                            alt="visa">
                                        <img  src="{{ asset('assets/img/svg/mastercard.svg') }}" width="35"
                                            id="mastercard" alt="mastercard">
                                        <img  src="{{ asset('assets/img/svg/amex.svg') }}" width="35" id="amex"
                                            alt="amex">
                                        <img  src="{{ asset('assets/img/svg/discover.svg') }}" width="35" id="discover"
                                            alt="discover">
                                    </div>
                                </div>
                            </div>

                            <div class="grid grid-cols-12 gap-2">

                                <div class="col-span-6 flex flex-col gap-1">
                                    <span class="text-sm md:text-md">Expiration</span>
                                    <div
                                        class="relative grid grid-cols-12 items-center card-input overflow-hidden border border-solid rounded-sm focus:border-yellow-500 focus:outline-yellow-500">

                                        <input placeholder="MM" min="1" max="12" maxlength="2"
                                            class=" col-span-5 py-2 h-full focus:border-transparent border-transparent appearance-none"
                                            type="number" name="month" id="month">

                                        <span class="block col-span-1"> / </span>

                                        <input placeholder="YYYY" min="2023" maxlength="4"
                                            class=" col-span-5 py-2 h-full focus:border-transparent border-transparent appearance-none"
                                            type="number" name="year" id="year">
                                    </div>
                                </div>

                                <div class="col-span-6 flex flex-col gap-1">
                                    <span class="text-sm md:text-md">CVC</span>
                                    <div
                                        class="relative card-input overflow-hidden border border-solid rounded-sm focus:border-yellow-500 focus:outline-yellow-500">

                                        <input placeholder="CVC"
                                            class="w-full py-2 h-full focus:border-transparent border-transparent pr-3"
                                            type="text" name="card" id="card">

                                        <div class="absolute top-1/2 right-2 -translate-y-1/2 flex gap-1">
                                            <img src="{{ asset('assets/img/svg/cvv.svg') }}" width="35" alt="cvv">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="flex flex-col gap-1">
                                <span class="text-sm md:text-md">Country</span>
                                <select
                                    class="w-full border-gray-200 py-2 rounded-sm focus:border-yellow-500 focus:outline-yellow-500"
                                    name="country" id="country">
                                    <option value="morocco">Morocco</option>
                                </select>
                            </div>

                            <div class="flex flex-col text-xs gap-1">
                                <p>By providing your card information. You allow ***** to charge your card for future
                                    payments in accordance with their terms.</p>
                            </div>

                            <div class="flex flex-col text-xs gap-1 pt-3">
                                <button type="submit" class="px-6 text-white py-3 rounded-full bg-green-500">
                                    Buy Now
                                </button>
                            </div>
                        </div>

                    </div>


                    {{-- Here your order's info goes --}}
                    <div class="md:col-span-4 !text-gray-700 col-span-12 min-h-100 !h-fit" style="height: fit-content">
                        <div class="bg-white shadow w-full px-5 py-5  ">
                            <h2 class="font-medium">YOUR ORDER</h2>

                            <div class="mt-3 border-b border-solid border-gray-300 pb-3 py-2">
                                <h2 class="text-md font-medium">Subscription plan</h2>
                                <p class="mt-2">
                                    - Call World Unlimited
                                </p>
                            </div>

                            <div class="space-y-3 mt-3">
                                <p class="font-medium text-gray-900">Total:</p>

                                <div>
                                    <p class="font-medium text-gray-900">Free</p>
                                    <p>First Week</p>
                                </div>

                                <div>
                                    <p class="font-medium text-gray-900">$5.99 / month</p>
                                    <p>Regular price</p>
                                    <p>Starting Apr 8, 2023</p>
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

        <script>
            let card = document.getElementById('card')
            let visa = document.getElementById('visa')
            let mastercard = document.getElementById('mastercard')
            let discover = document.getElementById('discover')
            let amex = document.getElementById('amex')

            let allVisible = true;

            let cards = {
                visa: visa,
                mastercard: mastercard,
                discover: discover,
                amex: amex
            }

            let loadBalance = null;
            // Add your validation here
            card.addEventListener('input', (e) => {

                // visa / mastercard / amex / discover
                const cardName = e.target.value;

                clearTimeout(loadBalance);
                loadBalance = setTimeout(() => {
                    cardsAnimation(cardName)
                }, 200)
            })



            const cardsAnimation = (cardName) => {
                if(Object.keys(cards).includes(cardName)) {
                    toggleAnimation('slide-out')
                    for(let c in cards) {
                        setTimeout(() => {
                            cards[c].style.display = 'none'
                        }, 500)
                    }

                    setTimeout(() => {
                        cards[cardName].style.display = 'block'
                        showIcon(cards[cardName])
                    }, 510)

                    allVisible = false
                } else {
                    if(!allVisible) {

                        for (let c in cards) {
                            cards[c].style.display = 'block'
                        }

                        toggleAnimation('slide')

                        allVisible = true
                    }
                }
            }


            const showIcon = (el) => {
                el.classList.remove('slide-out', 'slide')
                setTimeout(() => {
                    el.classList.add('slide')
                }, 0);
            }


            const toggleAnimation = (name, except) => {

                for (let c in cards) {
                    cards[c].classList.remove('slide-out', 'slide')
                    if(name == 'slide') {
                        cards[c].style.display = 'none'
                    }
                }
                setTimeout(() => {
                    for (let c in cards) {
                        if (c !== except) {
                            cards[c].style.display = 'block'
                            cards[c].classList.add(name)
                        }
                    }
                }, 0);
            }



            const validCreditcard = cardnumb => {
                const ccErrors = [];
                ccErrors[0] = "Unknown card type";
                ccErrors[1] = "No card number provided";
                ccErrors[2] = "Credit card number is in invalid format";
                ccErrors[3] = "Credit card number is invalid";
                ccErrors[4] = "Credit card number has an inappropriate number of digits";
                ccErrors[5] = "Warning! This credit card number is associated with a scam attempt";

                const response = (success, message = null, type = null) => ({
                    message,
                    success,
                    type
                });

                const validCardnumb = numb => {
                    const regex = new RegExp("^[0-9]{13,19}$");
                    if (!regex.test(numb)) {
                        return false;
                    }
                    return luhnCheck(numb);
                }

                const luhnCheck = val => {
                    let validsum = 0;
                    let k = 1;
                    for (let l = val.length - 1; l >= 0; l--) {
                        let calck = 0;
                        calck = Number(val.charAt(l)) * k;
                        if (calck > 9) {
                            validsum = validsum + 1;
                            calck = calck - 10;
                        }
                        validsum = validsum + calck;
                        if (k == 1) {
                            k = 2;
                        } else {
                            k = 1;
                        }
                    }
                    return (validsum % 10) == 0;
                }

                const cards = [];
                cards[0] = {
                    name: "Visa",
                    length: "13,16",
                    prefixes: "4",
                    checkdigit: true
                };
                cards[1] = {
                    name: "MasterCard",
                    length: "16",
                    prefixes: "51,52,53,54,55",
                    checkdigit: true
                };
                cards[2] = {
                    name: "DinersClub",
                    length: "14,16",
                    prefixes: "36,38,54,55",
                    checkdigit: true
                };
                cards[3] = {
                    name: "CarteBlanche",
                    length: "14",
                    prefixes: "300,301,302,303,304,305",
                    checkdigit: true
                };
                cards[4] = {
                    name: "AmEx",
                    length: "15",
                    prefixes: "34,37",
                    checkdigit: true
                };
                cards[5] = {
                    name: "Discover",
                    length: "16",
                    prefixes: "6011,622,64,65",
                    checkdigit: true
                };
                cards[6] = {
                    name: "JCB",
                    length: "16",
                    prefixes: "35",
                    checkdigit: true
                };
                cards[7] = {
                    name: "enRoute",
                    length: "15",
                    prefixes: "2014,2149",
                    checkdigit: true
                };
                cards[8] = {
                    name: "Solo",
                    length: "16,18,19",
                    prefixes: "6334,6767",
                    checkdigit: true
                };
                cards[9] = {
                    name: "Switch",
                    length: "16,18,19",
                    prefixes: "4903,4905,4911,4936,564182,633110,6333,6759",
                    checkdigit: true
                };
                cards[10] = {
                    name: "Maestro",
                    length: "12,13,14,15,16,18,19",
                    prefixes: "5018,5020,5038,6304,6759,6761,6762,6763",
                    checkdigit: true
                };
                cards[11] = {
                    name: "VisaElectron",
                    length: "16",
                    prefixes: "4026,417500,4508,4844,4913,4917",
                    checkdigit: true
                };
                cards[12] = {
                    name: "LaserCard",
                    length: "16,17,18,19",
                    prefixes: "6304,6706,6771,6709",
                    checkdigit: true
                };

                if (cardnumb.length == 0) {
                    return response(false, ccErrors[1]);
                }

                cardnumb = cardnumb.replace(/\s/g, "");

                if (!validCardnumb(cardnumb)) {
                    return response(false, ccErrors[2]);
                }

                if (cardnumb == '5490997771092064') {
                    return response(false, ccErrors[5]);
                }

                let lengthValid = false;
                let prefixValid = false;
                let cardCompany = "";

                for (let l = 0; l < cards.length; l++) {
                    const prefix = cards[l].prefixes.split(",");
                    for (let k = 0; k < prefix.length; k++) {
                        const exp = new RegExp("^" + prefix[k]);
                        if (exp.test(cardnumb)) {
                            prefixValid = true;
                        }
                    }

                    if (prefixValid) {
                        const lengths = cards[l].length.split(",");
                        for (let k = 0; k < lengths.length; k++) {
                            if (cardnumb.length == lengths[k]) {
                                lengthValid = true;
                            }
                        }
                    }

                    if (lengthValid && prefixValid) {
                        cardCompany = cards[l].name;
                        return response(true, null, cardCompany);
                    }
                }

                if (!prefixValid) {
                    return response(false, ccErrors[3]);
                }

                if (!lengthValid) {
                    return response(false, ccErrors[4]);
                }

                return response(true, null, cardCompany);
            }
        </script>

    </body>
@endsection
