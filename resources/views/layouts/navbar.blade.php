 <!-- Navbar -->
 <nav class="navbar navbar-expand-lg navbar-light bg-white">
        <div class="container">
            <!-- Brand -->
            <a class="navbar-brand" href="{{ url('/') }}">
                <!-- <img alt="Image placeholder" src="{{ url('assets/img/brand/dark.svg') }}" id="navbar-logo"> -->
                <h1 class="text-3xl" id="navbar-logo">Sai<span>meet</span></h1>
            </a>
            <!-- Toggler -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Collapse -->
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav mt-4 mt-lg-0 ml-auto">
                    <li class="nav-item ">
                        <a class="nav-link" href="{{ url('/#oreview') }}">Overview</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="{{ url('/#services') }}">Services</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="{{ url('/#plans') }}">Plans</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="{{ url('/contact') }}">Contact</a>
                    </li>
                    <li class="nav-item ">
                        <a href="{{ Route('login') }}" class="nav-link">Login</a>
                    </li>

                </ul>
                <!-- Button -->
                <!-- <a class="navbar-btn btn btn-sm btn-primary d-none d-lg-inline-block ml-3" href="{{ url('https://github.com/webpixels/quick-website-ui-kit-demo/archive/master.zip') }}">
                    Download Free
                </a> -->
                <!-- Mobile button -->
                <!-- <div class="d-lg-none text-center">
                    <a href="{{ url('https://webpixels.io/themes/quick-website-ui-kit') }}" class="btn btn-block btn-sm btn-warning">See more details</a>
                </div> -->
            </div>
        </div>
    </nav>
