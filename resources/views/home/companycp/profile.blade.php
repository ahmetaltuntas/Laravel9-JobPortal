@extends('layouts.companybase')

@section('title', $settings->title)
@section('description', $settings->description)
@section('keywords', $settings->keywords)



@section('content')
    <div class="pxp-dashboard-content-details">
        <h1>Edit Profile</h1>
        <p class="pxp-text-light">Edit your company profile page info.</p>

        <form action="{{route('companycp.saveprofile')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row mt-4 mt-lg-5">
                <div class="col-xxl-8">
                    <div class="mb-3">
                        <label for="pxp-company-name" class="form-label">Company name</label>
                        <input type="text" id="name" name="name" type="text" autocomplete="name" class="form-control" value="{{$user->name}}">
                        <input type="text" class="form-control" name="profile_id" value="{{$user->profiles->id}}" hidden>
                        <input type="text" class="form-control" name="user_id" value="{{$user->id}}" hidden>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="pxp-company-email" class="form-label">Email</label>
                                <input type="email" id="email" name="email" class="form-control" value="{{$user->email}}">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="pxp-company-phone" class="form-label">Phone</label>
                                <input type="tel" name="phone" class="form-control" value="{{$user->profiles->phone}}">
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="pxp-company-website" class="form-label">Website</label>
                        <input type="url" name="website" class="form-control" value="{{$user->profiles->website}}">
                    </div>
                </div>
                <div class="col-xxl-4">
                    <div class="form-label">&nbsp;</div>
                    <div class="pxp-company-cover mb-3">
                        <input type="file" id="pxp-company-cover-choose-file" name="coverimage" accept="image/*">
                        <label for="pxp-company-cover-choose-file" class="pxp-cover"><span>Upload Cover Image</span></label>
                    </div>
                    <div class="pxp-company-logo mb-3">
                        <input type="file" name="image" id="pxp-company-logo-choose-file" accept="image/*">
                        <label for="pxp-company-logo-choose-file" class="pxp-cover"><span>Upload<br>Logo</span></label>
                    </div>
                </div>
            </div>

            <div class="mb-3">
                <label for="pxp-company-about" class="form-label">About the company</label>
                <textarea class="form-control" name="about" >{{$user->profiles->about}}</textarea>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="pxp-company-industry" class="form-label">Industry</label>
                        <input type="text" name="industry" class="form-control" value="{{$user->profiles->industry}}">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="pxp-company-founded" class="form-label">Founded in</label>
                        <input type="text" name="founded" class="form-control" value="{{$user->profiles->founded}}">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="pxp-company-size" class="form-label">Company size</label>
                        <select name="company_size" class="form-select">
                            <option value="{{$user->profiles->company_size}}">{{$user->profiles->company_size}}</option>
                            <option value="< 50 employees">&lt; 50 employees</option>
                            <option value="50 - 100 employees">50 - 100 employees</option>
                            <option value="100 - 150 employees">100 - 150 employees</option>
                            <option value="150 - 200 employees">150 - 200 employees</option>
                            <option value="200 - 250 employees">200 - 250 employees</option>
                            <option value="250 - 300 employees">250 - 300 employees</option>
                            <option value="> 300 employees">&gt; 300 employees</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="mt-4 mt-lg-5">
                <h2>Company Location</h2>
                <div class="mb-3">
                    <label for="pxp-company-address" class="form-label">Address</label>
                    <input type="text" id="pxp-company-address" name="address" class="form-control" value="{{$user->profiles->address}}">
                </div>
            </div>

            <div class="mt-4 mt-lg-5">
                <button class="btn rounded-pill pxp-section-cta">Save Profile</button>
            </div>
        </form>
    </div>
@endsection
