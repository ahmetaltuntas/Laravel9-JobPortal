@extends('layouts.frontbase')

@section('title', 'Sign-in Job Portal')




@section('content')

    <section class="pxp-hero vh-100" style="background-color: var(--pxpMainColorLight);">
        <div class="row align-items-center pxp-sign-hero-container">
            <div class="col-xl-6 pxp-column">
                <div class="pxp-sign-hero-fig text-center pb-100 pt-100">
                    <img src="{{asset("assets")}}/images/signin-big-fig.png" alt="Sign In">
                    <h1 class="mt-4 mt-lg-5">Welcome back!</h1>
                </div>
            </div>
            <div class="col-xl-6 pxp-column pxp-is-light">
                <div class="pxp-sign-hero-form pb-100 pt-100">
                    <div class="row justify-content-center">
                        <h4>{{Session::get('error')}}</h4>
                        @if($errors->any())
                            <h4>{{$errors->first()}}</h4>
                        @endif
                        <div class="col-lg-6 col-xl-7 col-xxl-5">
                            <div class="pxp-sign-hero-form-content">

                                <h5 class="text-center">Sign In</h5>
                                <form class="mt-4" method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <div class="form-floating mb-3">
                                        <input  class="form-control" id="email" type="email" name="email" required="required" autofocus="autofocus">
                                        <label for="email">Email address</label>
                                        <span class="fa fa-envelope-o"></span>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input  class="form-control" id="password" type="password" name="password" required="required" autocomplete="current-password">
                                        <label for="password">Password</label>
                                        <span class="fa fa-lock"></span>
                                    </div>
                                    <button type="submit" class="btn rounded-pill pxp-sign-hero-form-cta">Continue</button>
                                    <div class="mt-4 text-center pxp-sign-hero-form-small">
                                        <a href="#" class="pxp-modal-link">Forgot password</a>
                                    </div>
                                    <div class="mt-4 text-center pxp-sign-hero-form-small">
                                        New to JobPortal? <a href="/sign-up">Create an account</a>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
