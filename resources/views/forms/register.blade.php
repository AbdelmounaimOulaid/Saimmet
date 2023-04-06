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
                        <form>
                            @csrf
                            <div class="row">

                                <div class="form-group col-md-6 col-12 gap-2">
                                    <label class="form-control-label">First name</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control w-full border-gray-200 py-2 rounded-sm focus:border-yellow-500 focus:outline-yellow-500"  placeholder="First name">
                                    </div>
                                </div>
                                <div class="form-group col-md-6 col-12 gap-2">
                                    <label class="form-control-label">Last name</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control w-full border-gray-200 py-2 rounded-sm focus:border-yellow-500 focus:outline-yellow-500"  placeholder="Last name">
                                    </div>
                                </div>
                            </div>
                            <div class="row">

                                <div class="form-group col-md-12 col-12 gap-2">
                                    <label class="form-control-label">Status</label>
                                    <div class="input-group">
                                        <select class="form-control w-full border-gray-200 py-2 rounded-sm focus:border-yellow-500 focus:outline-yellow-500" name="select">
                                            <option disabled selected>You are a ...</option>
                                            <option value="Employed">Employed</option>
                                            <option value="Self-employed">Self-employed</option>
                                            <option value="Out of work">Out of work</option>
                                            <option value="Student">Student</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">Email address</label>
                                <div class="input-group">
                                    <input type="email" class="form-control w-full border-gray-200 py-2 rounded-sm focus:border-yellow-500 focus:outline-yellow-500" id="input-email" placeholder="name@example.com">
                                </div>
                            </div>
                            <div class="form-group mb-0">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div>
                                        <label class="form-control-label">Password</label>
                                    </div>
                                    <div class="mb-2">
                                        <a href="#" class="small text-muted text-underline--dashed border-primary" data-toggle="password-text" data-target="#input-password">Show password</a>
                                    </div>
                                </div>
                                <div class="input-group">
                                    <input type="password" class="form-control w-full border-gray-200 py-2 rounded-sm focus:border-yellow-500 focus:outline-yellow-500" id="input-password" placeholder="Password">
                                </div>
                            </div>
                            <div class="mt-4">
                                <button type="button" class="btn btn-block btn-primary">Sign up</button></div>
                        </form>
                    </div>
                    <div class="card-footer px-md-5"><small>Already have an account?</small>
                        <a href="{{ Route('register') }}" class="small font-weight-bold">Login</a></div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
