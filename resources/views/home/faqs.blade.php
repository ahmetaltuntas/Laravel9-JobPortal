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
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="pxpFAQsHeader1">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#pxpCollapseFAQs1" aria-expanded="false" aria-controls="pxpCollapseFAQs1">
                                    How does the free trial work?
                                </button>
                            </h2>
                            <div id="pxpCollapseFAQs1" class="accordion-collapse collapse" aria-labelledby="pxpFAQsHeader1" data-bs-parent="#pxpFAQsAccordion">
                                <div class="accordion-body">
                                    Select a plan and get a free 4-day free trial in any subscription plan. Post jobs for free during your trial period. When your free trial ends, we’ll charge the payment method you provided during signup. You can pause, cancel, or change your subscription at any time by signing into your account.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="pxpFAQsHeader2">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#pxpCollapseFAQs2" aria-expanded="false" aria-controls="pxpCollapseFAQs2">
                                    Where is my job posting advertised?
                                </button>
                            </h2>
                            <div id="pxpCollapseFAQs2" class="accordion-collapse collapse" aria-labelledby="pxpFAQsHeader2" data-bs-parent="#pxpFAQsAccordion">
                                <div class="accordion-body">
                                    Your job posting is seen on Jobster, hundreds of local news sites, our mobile app, and Jobster network sites.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="pxpFAQsHeader3">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#pxpCollapseFAQs3" aria-expanded="false" aria-controls="pxpCollapseFAQs3">
                                    Is there a limit to how many candidates can apply to my posting?
                                </button>
                            </h2>
                            <div id="pxpCollapseFAQs3" class="accordion-collapse collapse" aria-labelledby="pxpFAQsHeader3" data-bs-parent="#pxpFAQsAccordion">
                                <div class="accordion-body">
                                    No! The sky’s the limit for the duration of your posting.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="pxpFAQsHeader4">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#pxpCollapseFAQs4" aria-expanded="false" aria-controls="pxpCollapseFAQs4">
                                    How soon will I start receiving resumes?
                                </button>
                            </h2>
                            <div id="pxpCollapseFAQs4" class="accordion-collapse collapse" aria-labelledby="pxpFAQsHeader4" data-bs-parent="#pxpFAQsAccordion">
                                <div class="accordion-body">
                                    Your job posting will be live within an hour of posting, and you will start to receive resumes from applicants as soon as we get them.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="pxpFAQsHeader5">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#pxpCollapseFAQs5" aria-expanded="false" aria-controls="pxpCollapseFAQs5">
                                    How long will it take to post my job?
                                </button>
                            </h2>
                            <div id="pxpCollapseFAQs5" class="accordion-collapse collapse" aria-labelledby="pxpFAQsHeader5" data-bs-parent="#pxpFAQsAccordion">
                                <div class="accordion-body">
                                    Our simple job posting form should only take a few minutes to complete. You’ll need to include your job’s title, location, description, and the email address where you want to have applications sent.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="pxpFAQsHeader6">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#pxpCollapseFAQs6" aria-expanded="false" aria-controls="pxpCollapseFAQs6">
                                    I’m not sure what to put in my job posting. Can you help?
                                </button>
                            </h2>
                            <div id="pxpCollapseFAQs6" class="accordion-collapse collapse" aria-labelledby="pxpFAQsHeader6" data-bs-parent="#pxpFAQsAccordion">
                                <div class="accordion-body">
                                    Absolutely! Check out our guide to writing great job descriptions. And for some extra guidance, take a look at some of our sample job descriptions.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="pxpFAQsHeader7">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#pxpCollapseFAQs7" aria-expanded="false" aria-controls="pxpCollapseFAQs7">
                                    What is your cancellation policy?
                                </button>
                            </h2>
                            <div id="pxpCollapseFAQs7" class="accordion-collapse collapse" aria-labelledby="pxpFAQsHeader7" data-bs-parent="#pxpFAQsAccordion">
                                <div class="accordion-body">
                                    You’re free to cancel your Monthly Value Plan any time via the link in your Customer Account Preferences. You will still be able to use your Plan if there are remaining days in your current 30-day cycle.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
