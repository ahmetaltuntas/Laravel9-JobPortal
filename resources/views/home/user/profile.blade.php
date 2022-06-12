@extends('layouts.userbase')

@section('title', $settings->title)
@section('description', $settings->description)
@section('keywords', $settings->keywords)



@section('content')
<div class="pxp-dashboard-content-details">
    <h1>Edit Profile</h1>
    <p class="pxp-text-light">Edit your candidate profile page info.</p>

    <form action="{{route('user.saveprofile')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row mt-4 mt-lg-5">
            <div class="col-xxl-8">
                <div class="mb-3">
                    <label for="pxp-candidate-name" class="form-label" for="name">Name</label>
                    <input type="text" id="name" name="name" type="text" autocomplete="name" class="form-control" value="{{$user->name}}">
                    <input type="text" class="form-control" name="profile_id" value="{{$user->profiles->id}}" hidden>
                    <input type="text" class="form-control" name="user_id" value="{{$user->id}}" hidden>


                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="mb-3">
                            <label for="pxp-candidate-title" class="form-label">Title</label>
                            <input type="text" name="title" class="form-control" value="{{$user->profiles->title}}">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="mb-3">
                            <label for="pxp-candidate-location" class="form-label">Location</label>
                            <input type="tel" name="address" class="form-control" value="{{$user->profiles->address}}">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="mb-3">
                            <label for="pxp-candidate-email" class="form-label">Email</label>
                            <input type="email" id="email" name="email" class="form-control" value="{{$user->email}}">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="mb-3">
                            <label for="pxp-candidate-phone" class="form-label">Phone</label>
                            <input type="tel" name="phone" class="form-control" value="{{$user->profiles->phone}}">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-4">
                <div class="form-label">&nbsp;</div>
                <div class="pxp-candidate-cover mb-3">
                    <input type="file" id="pxp-candidate-cover-choose-file" name="coverimage" accept="image/*">
                    <label for="pxp-candidate-cover-choose-file" class="pxp-cover"><span>Upload Cover Image</span></label>
                </div>
                <div class="pxp-candidate-photo mb-3">
                    <input type="file" id="pxp-candidate-photo-choose-file" name="image" accept="image/*">
                    <label for="pxp-candidate-photo-choose-file" class="pxp-cover"><span>Upload<br>Photo</span></label>
                </div>
            </div>
        </div>

        <div class="mb-3">
            <label for="pxp-candidate-about" class="form-label">About you</label>
            <textarea class="form-control" name="about" >{{$user->profiles->about}}</textarea>
        </div>
        <div class="mt-4 mt-lg-5">
            <button class="btn rounded-pill pxp-section-cta" type="submit">Save Profile</button>
        </div>
    </form>
        <div class="mt-4 mt-lg-5">
            <h2>Skills</h2>
            <div class="pxp-candidate-dashboard-skills mb-3">
                <ul class="list-unstyled">
                    @foreach($usercv as $rs)
                        @if($rs->skills != null)
                            @foreach($rs->skills as $rs)
                            <li>{{$rs->name}} <a href="{{route('user.deleteskill',['id'=>$rs->id])}}"><i class="fa fa-trash-o"></i></a></li>
                            @endforeach
                        @endif
                    @endforeach
                </ul>
            </div>
            <form action="{{route('user.addskill')}}" method="post" enctype="multipart/form-data">
                @csrf
            <div class="input-group mb-3">
                <input type="text" class="form-control" name="cvid" value="{{$user->usercv->id}}" hidden>
                <input type="text" class="form-control" name="name" placeholder="Skill">
                <button class="btn" type="submit">Add Skill</button>
            </div>
            </form>
        </div>



        <div class="mt-4 mt-lg-5">
            <h2>Work Experience</h2>
            <div class="table-responsive">
                <table class="table align-middle">

                    @foreach($usercv as $rs)
                        @if($rs->experiences != null)

                            @foreach($rs->experiences as $rs)
                                <tr>
                                    <td style="width: 30%;"><div class="pxp-candidate-dashboard-experience-title">{{$rs->title}}</div></td>
                                    <td style="width: 25%;"><div class="pxp-candidate-dashboard-experience-company">{{$rs->company}}</div></td>
                                    <td style="width: 25%;"><div class="pxp-candidate-dashboard-experience-time">{{$rs->period}}</div></td>
                                    <td>
                                        <div class="pxp-dashboard-table-options">
                                            <ul class="list-unstyled">
                                                <li><a title="Delete" href="{{route('user.deleteexperience',['id'=>$rs->id])}}" ><span class="fa fa-trash-o"></span></a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        @endif

                    @endforeach
                </table>
            </div>

            <form action="{{route('user.addexperience')}}" method="post" enctype="multipart/form-data">
                @csrf

                <div class="row mt-3 mt-lg-4">
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="pxp-candidate-work-title" class="form-label">Job title</label>
                            <input type="text" id="pxp-candidate-work-title" class="form-control" name="title" placeholder="E.g. Web Designer">
                            <input type="text" class="form-control" name="cvid" value="{{$user->usercv->id}}" hidden>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="pxp-candidate-work-company" class="form-label">Company</label>
                            <input type="text" id="pxp-candidate-work-company" class="form-control" name="company" placeholder="Company name">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="pxp-candidate-work-time" class="form-label">Time period</label>
                            <input type="text" id="pxp-candidate-work-time" class="form-control" name="period" placeholder="E.g. 2005 - 2013">
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="pxp-candidate-work-about" class="form-label">Description</label>
                    <textarea class="form-control pxp-smaller" name="description" placeholder="Type a short description here..."></textarea>
                </div>
                <button class="btn rounded-pill pxp-subsection-cta" type="submit">Add Experience</button>
            </form>
        </div>
        <div class="mt-4 mt-lg-5">
            <h2>Education & Training</h2>
            <div class="table-responsive">
                <table class="table align-middle">
                    @foreach($usercv as $rs)
                        @if($rs->educations != null)
                            @foreach($rs->educations as $rs)
                                <tr>
                                    <td style="width: 30%;"><div class="pxp-candidate-dashboard-experience-title">{{$rs->title}}</div></td>
                                    <td style="width: 25%;"><div class="pxp-candidate-dashboard-experience-school">{{$rs->school}}</div></td>
                                    <td style="width: 25%;"><div class="pxp-candidate-dashboard-experience-time">{{$rs->period}}</div></td>
                                    <td>
                                        <div class="pxp-dashboard-table-options">
                                            <ul class="list-unstyled">
                                                <li><a href="{{route('user.deleteeducation',['id'=>$rs->id])}}"><button title="Delete"><span class="fa fa-trash-o"></span></button></a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        @endif
                    @endforeach

                </table>
            </div>
            <form action="{{route('user.addeducation')}}" method="post" enctype="multipart/form-data">
                @csrf

            <div class="row mt-3 mt-lg-4">
                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="pxp-candidate-edu-title" class="form-label">Title</label>
                        <input type="text" id="pxp-candidate-edu-title" name="title" class="form-control" placeholder="E.g. Architecure">
                        <input type="text" class="form-control" name="cvid" value="{{$user->usercv->id}}" hidden>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="pxp-candidate-edu-school" class="form-label">School</label>
                        <input type="text" id="pxp-candidate-edu-school" name="school" class="form-control" placeholder="School name">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="pxp-candidate-edu-time" class="form-label">Time period</label>
                        <input type="text" id="pxp-candidate-edu-time" name="period" class="form-control" placeholder="E.g. 2005 - 2013">
                    </div>
                </div>
            </div>
            <div class="mb-3">
                <label for="pxp-candidate-edu-about" class="form-label">Description</label>
                <textarea class="form-control pxp-smaller" name="description" placeholder="Type a short description here..."></textarea>
            </div>
            <button class="btn rounded-pill pxp-subsection-cta" type="submit">Add Education</button>
</form>
        </div>

</div>
@endsection
