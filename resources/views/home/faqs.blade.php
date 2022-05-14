@extends('layouts.frontbase')

@section('title', 'FAQS')


@section('content')

    <section class="mt-100 pxp-no-hero">
        <div class="pxp-container">
            <h2 class="pxp-section-h2 text-center">Frequently Asked Questions</h2>
            <p class="pxp-text-light text-center">We help employers and candidates find the right fit</p>

            <div class="row mt-4 mt-lg-5 justify-content-center">
                <div class="col-xxl-7">
                    <div class="accordion pxp-faqs-accordion" id="pxpFAQsAccordion">
                        @foreach($setting as $rs)
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="pxpFAQsHeader{{$rs->id}}">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#pxpCollapseFAQs{{$rs->id}}" aria-expanded="false" aria-controls="pxpCollapseFAQs{{$rs->id}}">
                                        {{$rs->question}}
                                    </button>
                                </h2>
                                <div id="pxpCollapseFAQs{{$rs->id}}" class="accordion-collapse collapse" aria-labelledby="pxpFAQsHeader{{$rs->id}}" data-bs-parent="#pxpFAQsAccordion">
                                    <div class="accordion-body">
                                        {!! $rs->answer !!}
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
