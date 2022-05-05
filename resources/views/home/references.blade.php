@extends('layouts.frontbase')

@section('title', 'References')


@section('content')

    <section class="pxp-page-image-hero pxp-cover" style="background-image: url({{asset("assets")}}/images/company-hero-3.jpg);">
        <div class="pxp-hero-opacity"></div>
        <div class="pxp-page-image-hero-caption">
            <div class="pxp-container">
                <div class="row justify-content-center">
                    <div class="col-9 col-md-8 col-xl-7 col-xxl-6">
                        <h1 class="text-center">REFERENCES</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="mt-100">
        <div class="pxp-container">
            <div class="row justify-content-center">
                <div class="col-xl-7 col-xxl-6">

                    <div class="mt-4 mt-md-5 text-center">
                        {!! $settings->references !!}
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
