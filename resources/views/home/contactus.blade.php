@extends('layouts.frontbase')

@section('title', 'Contact-Us')


@section('content')

    <section class="mt-100 pxp-no-hero">
        <div class="pxp-container">
            <h2 class="pxp-section-h2 text-center">We'd love to hear from you</h2>
            <p class="pxp-text-light text-center">Get in touch with us</p>

            <div class="row mt-4 mt-md-5 justify-content-center pxp-animate-in pxp-animate-in-top">
                <div class="col-lg-4 col-xxl-3 pxp-contact-card-1-container">
                    <a href="#" class="pxp-contact-card-1">
                        <div class="pxp-contact-card-1-icon-container">
                            <div class="pxp-contact-card-1-icon">
                                <span class="fa fa-globe"></span>
                            </div>
                        </div>
                        <div class="pxp-contact-card-1-title">San Francisco, CA</div>
                    </a>
                </div>
                <div class="col-lg-4 col-xxl-3 pxp-contact-card-1-container">
                    <a href="#" class="pxp-contact-card-1">
                        <div class="pxp-contact-card-1-icon-container">
                            <div class="pxp-contact-card-1-icon">
                                <span class="fa fa-phone"></span>
                            </div>
                        </div>
                        <div class="pxp-contact-card-1-title">(0124) - 456 - 789</div>
                    </a>
                </div>
                <div class="col-lg-4 col-xxl-3 pxp-contact-card-1-container">
                    <a href="#" class="pxp-contact-card-1">
                        <div class="pxp-contact-card-1-icon-container">
                            <div class="pxp-contact-card-1-icon">
                                <span class="fa fa-envelope-o"></span>
                            </div>
                        </div>
                        <div class="pxp-contact-card-1-title">admin@admin.com</div>
                    </a>
                </div>
            </div>

            <div class="row mt-100 justify-content-center pxp-animate-in pxp-animate-in-top">
                <div class="col-lg-6 col-xxl-4">
                    <div class="pxp-contact-us-form pxp-has-animation pxp-animate">
                        <h2 class="pxp-section-h2 text-center">Contact Us</h2>
                        <h2 class="pxp-section-h2 text-center">{{Session::get('info')}}</h2>

                        <form class="mt-4" action="{{route("storemessage")}}" method="post">
                            @csrf
                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name">
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email address">
                            </div>
                            <div class="mb-3">
                                <label for="phone" class="form-label">Phone</label>
                                <input type="text" class="form-control" id="phone" name="phone" placeholder="Enter your phone number">
                            </div>
                            <div class="mb-3">
                                <label for="subject" class="form-label">Subject</label>
                                <input type="text" class="form-control" id="subject" name="subject" placeholder="Enter your subject">
                            </div>
                            <div class="mb-3">
                                <label for="message" class="form-label">Message</label>
                                <textarea class="form-control" id="message" name="message" placeholder="Type your message here..."></textarea>
                            </div>
                            <button type="submit" class="btn rounded-pill pxp-section-cta d-block">Send Message</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
