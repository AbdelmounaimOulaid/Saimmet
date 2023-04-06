@extends('layouts.app')
@section('title','Saimeet - Register')

@section('content')

<section>
    <div class="container d-flex flex-column">
        <div class="row align-items-center justify-content-center min-vh-100 md:py-5">
            <div class="col-md-10 col-lg-7 col-xl-6 py-6 py-md-0">
                <div class="card shadow zindex-100 mb-0">
                    <div class="card-body px-md-5 py-5">
                        <div class="mb-3">
                            <h6 class="h3">Register</h6>
                            <p class="text-muted mb-0">Create an account to continue.</p>
                        </div>
                        <span class="clearfix"></span>
                        <form method="POST" action="{{ Route('signup') }}">
                            @csrf
                            <div class="row">

                                <div class="form-group col-md-6 col-12 gap-2">
                                    <label class="form-control-label">First name</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control w-full border-gray-200 py-2 rounded-sm focus:border-yellow-500 focus:outline-yellow-500" name="firstname" value="{{ old('firstname') }}" placeholder="First name">
                                    </div>
                                    @error('firstname')
                                    <div style="color: red;">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group col-md-6 col-12 gap-2">
                                    <label class="form-control-label">Last name</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control w-full border-gray-200 py-2 rounded-sm focus:border-yellow-500 focus:outline-yellow-500" name="lastname" value="{{ old('lastname') }}" placeholder="Last name">
                                    </div>
                                    @error('lastname')
                                    <div style="color: red;">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row">

                                <div class="form-group col-md-12 col-12 gap-2">
                                    <label class="form-control-label">Status</label>
                                    <div class="input-group">
                                        <select class="form-control w-full border-gray-200 py-2 rounded-sm focus:border-yellow-500 focus:outline-yellow-500" value="{{ old('job') }}" name="job">
                                            <option disabled selected>You are a ...</option>
                                            <option value="Employed">Employed</option>
                                            <option value="Self-employed">Self-employed</option>
                                            <option value="Out of work">Out of work</option>
                                            <option value="Student">Student</option>
                                        </select>
                                    </div>
                                    @error('job')
                                    <div style="color: red;">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">Email address</label>
                                <div class="input-group">
                                    <input type="email" class="form-control w-full border-gray-200 py-2 rounded-sm focus:border-yellow-500 focus:outline-yellow-500" name="email" value="{{ old('email') }}" id="input-email" placeholder="name@example.com">
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
                                    <input type="password" class="form-control w-full border-gray-200 py-2 rounded-sm focus:border-yellow-500 focus:outline-yellow-500" id="input-password" name="password" placeholder="Password">
                                </div>
                                @error('password')
                                <div style="color: red;">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mt-4">
                                <button type="submit" class="btn btn-block btn-primary">Sign up</button>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer px-md-5"><small>Already have an account?</small>
                        <a href="{{ Route('login') }}" class="small font-weight-bold">Login</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection