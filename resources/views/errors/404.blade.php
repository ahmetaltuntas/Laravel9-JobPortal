@extends('layouts.frontbase')

@section('title', '404 Not Found')

@section('content')

    <section class="mt-100 pxp-no-hero">
        <div class="pxp-container">
            <h2 class="pxp-section-h2 text-center">This page is off the map</h2>
            <p class="pxp-text-light text-center">We can't seem to find the page you're looking for.</p>

            <div class="pxp-404-fig text-center mt-4 mt-lg-5">
                <img src="{{asset("assets")}}/images/404.png" alt="Page not found">
            </div>

            <div class="mt-4 mt-lg-5 text-center">
                <a href="index.html" class="btn rounded-pill pxp-section-cta">Go Home<span class="fa fa-angle-right"></span></a>
            </div>
        </div>
    </section>

@endsection
