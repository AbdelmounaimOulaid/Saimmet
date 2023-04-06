@extends('layouts.app')
@section('title','Saimeet - Login')
@section('content')

<section>
    <div class="container d-flex flex-column">
        <div class="row align-items-center justify-content-center min-vh-100">
            <div class="col-md-6 col-lg-5 col-xl-5 py-6 py-md-0">
                <div class="card shadow zindex-100 mb-0">
                    <div class="card-body px-md-5 py-5">
                        <div class="mb-5">
                            <h6 class="h3">Login</h6>
                            <p class="text-muted mb-0">Sign in to your account to continue.</p>
                        </div>
                        <span class="clearfix"></span>
                        <form action="{{ route('logine') }}" method="POST"> @csrf
                            <div class="form-group">
                                <label class="form-control-label">Email address</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i data-feather="user"></i></span>
                                    </div>
                                    <input type="email" class="form-control" id="input-email" name="email" placeholder="name@example.com">
                                   

                                </div>
                                @error('email')
                                    <div style="color: red;">{{ $message }}</div>
                                    @enderror
                            </div>
                            <div class="form-group mb-0">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div>
                                        <label class="form-control-label">Password</label>
                                    </div>
                                    
                                </div>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i data-feather="key"></i></span>
                                    </div>
                                    <input type="password" class="form-control" id="input-password" name="password" placeholder="Password">
                                   

                                </div>
                                @error('password')
                                    <div style="color: red;">{{ $message }}</div>
                                    @enderror
                            </div>
                            <div class="mt-4">
                                <button type="submit" class="btn btn-block btn-primary">Sign in</button>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer px-md-5"><small>Not registered?</small>
                        <a href="{{ Route('register') }}" class="small font-weight-bold">Create account</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection