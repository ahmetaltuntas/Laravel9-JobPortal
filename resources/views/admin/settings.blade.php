@extends('layouts.adminbase')

@section('title', 'Admin Panel')

@section('head')
    <script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>
@endsection


@section('content')
    <!--start page wrapper -->
    <div class="page-wrapper">
        <div class="page-content">
            <!--breadcrumb-->
            <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                <div class="breadcrumb-title pe-3">Home</div>
                <div class="ps-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 p-0">
                            <li class="breadcrumb-item"><a href="{{route('admin.index')}}"><i class="bx bx-home-alt"></i></a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Settings</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <ul class="nav nav-pills mb-3" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a class="nav-link active" data-bs-toggle="pill" href="#general" role="tab" aria-selected="true">
                                <div class="d-flex align-items-center">
                                    <div class="tab-icon"><i class="bx bx-home font-18 me-1"></i>
                                    </div>
                                    <div class="tab-title">General</div>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" data-bs-toggle="pill" href="#smtp" role="tab" aria-selected="false">
                                <div class="d-flex align-items-center">
                                    <div class="tab-icon"><i class="bx bx-user-pin font-18 me-1"></i>
                                    </div>
                                    <div class="tab-title">SMTP Settings</div>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" data-bs-toggle="pill" href="#social-media" role="tab" aria-selected="false">
                                <div class="d-flex align-items-center">
                                    <div class="tab-icon"><i class="bx bx-microphone font-18 me-1"></i>
                                    </div>
                                    <div class="tab-title">Social Media</div>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" data-bs-toggle="pill" href="#aboutus" role="tab" aria-selected="false">
                                <div class="d-flex align-items-center">
                                    <div class="tab-icon"><i class="bx bx-microphone font-18 me-1"></i>
                                    </div>
                                    <div class="tab-title">About Us</div>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" data-bs-toggle="pill" href="#contact" role="tab" aria-selected="false">
                                <div class="d-flex align-items-center">
                                    <div class="tab-icon"><i class="bx bx-microphone font-18 me-1"></i>
                                    </div>
                                    <div class="tab-title">Contact Page</div>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" data-bs-toggle="pill" href="#references" role="tab" aria-selected="false">
                                <div class="d-flex align-items-center">
                                    <div class="tab-icon"><i class="bx bx-microphone font-18 me-1"></i>
                                    </div>
                                    <div class="tab-title">References</div>
                                </div>
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade active show" id="general" role="tabpanel">
                            <!--start-->
                            <div class="card-body p-5">
                                <div class="card-title d-flex align-items-center">
                                    <div><i class="bx bxs-user me-1 font-22 text-primary"></i>
                                    </div>
                                    <h5 class="mb-0 text-primary">Edit General Settings</h5>
                                </div>
                                <hr>
                                <form class="row g-3" action="{{route('admin.settings.update')}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <input type="text" class="form-control" name="id" id="id" value="{{$data->id}}" hidden>

                                    <div class="row-md-6">
                                        <label for="title" class="form-label">Title</label>
                                        <input type="text" class="form-control" name="title" id="title" value="{{$data->title}}">
                                    </div>
                                    <div class="row-md-6">
                                        <label for="keywords" class="form-label">Keywords</label>
                                        <input type="text" class="form-control" name="keywords" value="{{$data->keywords}}">
                                    </div>
                                    <div class="row-md-6">
                                        <label for="description" class="form-label">Description</label>
                                        <textarea class="form-control" aria-label="With textarea" id="detail" name="description">{{$data->description}}</textarea>

                                        <script>
                                            ClassicEditor
                                                .create( document.querySelector( '#detail' ) )
                                                .then( editor => {
                                                    console.log( editor );
                                                } )
                                                .catch( error => {
                                                    console.error( error );
                                                } );
                                        </script>
                                    </div>
                                    <div class="row-md-6">
                                        <label for="company" class="form-label">Company</label>
                                        <input type="text" class="form-control" name="company" value="{{$data->company}}">
                                    </div>
                                    <div class="row-md-6">
                                        <label for="address" class="form-label">Address</label>
                                        <input type="text" class="form-control" name="address" value="{{$data->address}}">
                                    </div>
                                    <div class="row-md-6">
                                        <label for="phone" class="form-label">Phone</label>
                                        <input type="number" class="form-control" name="phone" value="{{$data->phone}}">
                                    </div>
                                    <div class="row-md-6">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="email" class="form-control" name="email" value="{{$data->email}}">
                                    </div>
                                    <div class="row-md-6">
                                        <label for="status" class="form-label">Status</label>
                                        <select name="status" class="form-select">
                                            <option selected="">{{$data->status}}</option>
                                            <option>True</option>
                                            <option>False</option>
                                        </select>
                                    </div>
                                    <div>
                                        <label for="icon" class="form-label">Icon</label>
                                        <input class="form-control" type="file" id="icon" name="icon">
                                    </div>

                                    <div class="row-12">
                                        <button type="submit" class="btn btn-primary px-5">Save</button>
                                    </div>

                            </div>
                            <!--end-->
                        </div>

                        <div class="tab-pane fade" id="smtp" role="tabpanel">
                            <!--start-->
                            <div class="card-body p-5">
                                <div class="card-title d-flex align-items-center">
                                    <div><i class="bx bxs-user me-1 font-22 text-primary"></i>
                                    </div>
                                    <h5 class="mb-0 text-primary">Edit SMTP Settings</h5>
                                </div>
                                <hr>


                                <div class="row-md-6">
                                    <label for="smtpserver" class="form-label">SMTP Server</label>
                                    <input type="text" class="form-control" name="smtpserver" value="{{$data->smtpserver}}">
                                </div>
                                <div class="row-md-6">
                                    <label for="smtpemail" class="form-label">SMTP Email</label>
                                    <input type="text" class="form-control" name="smtpemail" value="{{$data->smtpemail}}">
                                </div>
                                <div class="row-md-6">
                                    <label for="smtppassword" class="form-label">SMTP Password</label>
                                    <input type="password" class="form-control" name="smtppassword" value="{{$data->smtppassword}}">
                                </div>
                                <div class="row-md-6">
                                    <label for="smtpport" class="form-label">SMTP Port</label>
                                    <input type="text" class="form-control" name="smtpport" value="{{$data->smtpport}}">
                                </div>
                                    <div class="row-12">
                                        <br>
                                        <button type="submit" class="btn btn-primary px-5">Save</button>
                                    </div>

                            </div>
                            <!--end-->
                        </div>
                        <div class="tab-pane fade" id="social-media" role="tabpanel">
                            <!--start-->
                            <div class="card-body p-5">
                                <div class="card-title d-flex align-items-center">
                                    <div><i class="bx bxs-user me-1 font-22 text-primary"></i>
                                    </div>
                                    <h5 class="mb-0 text-primary">Edit Social Media Settings</h5>
                                </div>
                                <hr>

                                <div class="row-md-6">
                                    <label for="fax" class="form-label">Fax</label>
                                    <input type="text" class="form-control" name="fax" value="{{$data->fax}}">
                                </div>
                                <div class="row-md-6">
                                    <label for="facebook" class="form-label">Facebook</label>
                                    <input type="text" class="form-control" name="facebook" value="{{$data->facebook}}">
                                </div>
                                <div class="row-md-6">
                                    <label for="instagram" class="form-label">Instagram</label>
                                    <input type="text" class="form-control" name="instagram" value="{{$data->instagram}}">
                                </div>
                                <div class="row-md-6">
                                    <label for="twitter" class="form-label">Twitter</label>
                                    <input type="text" class="form-control" name="twitter" value="{{$data->twitter}}">
                                </div>
                                <div class="row-md-6">
                                    <label for="youtube" class="form-label">Youtube</label>
                                    <input type="text" class="form-control" name="youtube" value="{{$data->youtube}}">
                                </div>

                                <div class="row-12">
                                    <br>
                                    <button type="submit" class="btn btn-primary px-5">Save</button>
                                </div>

                            </div>
                            <!--end-->
                        </div>
                        <div class="tab-pane fade" id="aboutus" role="tabpanel">
                            <!--start-->
                            <div class="card-body p-5">
                                <div class="card-title d-flex align-items-center">
                                    <div><i class="bx bxs-user me-1 font-22 text-primary"></i>
                                    </div>
                                    <h5 class="mb-0 text-primary">Edit About Us</h5>
                                </div>
                                <hr>

                                    <div class="row-md-6">
                                        <label for="aboutus" class="form-label">About Us</label>
                                        <textarea class="form-control" aria-label="With textarea" id="detail2" name="aboutus">{{$data->aboutus}}</textarea>

                                        <script>
                                            ClassicEditor
                                                .create( document.querySelector( '#detail2' ) )
                                                .then( editor => {
                                                    console.log( editor );
                                                } )
                                                .catch( error => {
                                                    console.error( error );
                                                } );
                                        </script>
                                    </div>
                                    <div class="row-12">
                                        <br>
                                        <button type="submit" class="btn btn-primary px-5">Save</button>
                                    </div>

                            </div>
                            <!--end-->
                        </div>
                        <div class="tab-pane fade" id="contact" role="tabpanel">
                            <!--start-->
                            <div class="card-body p-5">
                                <div class="card-title d-flex align-items-center">
                                    <div><i class="bx bxs-user me-1 font-22 text-primary"></i>
                                    </div>
                                    <h5 class="mb-0 text-primary">Edit Contact</h5>
                                </div>
                                <hr>

                                    <div class="row-md-6">
                                        <label for="contact" class="form-label">Contact</label>
                                        <textarea class="form-control" aria-label="With textarea" id="detail3" name="contact">{{$data->contact}}</textarea>

                                        <script>
                                            ClassicEditor
                                                .create( document.querySelector( '#detail3' ) )
                                                .then( editor => {
                                                    console.log( editor );
                                                } )
                                                .catch( error => {
                                                    console.error( error );
                                                } );
                                        </script>
                                    </div>
                                    <div class="row-12">
                                        <br>
                                        <button type="submit" class="btn btn-primary px-5">Save</button>
                                    </div>

                            </div>
                            <!--end-->
                        </div>
                        <div class="tab-pane fade" id="references" role="tabpanel">
                            <!--start-->
                            <div class="card-body p-5">
                                <div class="card-title d-flex align-items-center">
                                    <div><i class="bx bxs-user me-1 font-22 text-primary"></i>
                                    </div>
                                    <h5 class="mb-0 text-primary">Edit References</h5>
                                </div>
                                <hr>

                                    <div class="row-md-6">
                                        <label for="references" class="form-label">About Us</label>
                                        <textarea class="form-control" aria-label="With textarea" id="detail4" name="references">{{$data->references}}</textarea>

                                        <script>
                                            ClassicEditor
                                                .create( document.querySelector( '#detail4' ) )
                                                .then( editor => {
                                                    console.log( editor );
                                                } )
                                                .catch( error => {
                                                    console.error( error );
                                                } );
                                        </script>
                                    </div>
                                    <div class="row-12">
                                        <br>
                                        <button type="submit" class="btn btn-primary px-5">Save</button>
                                    </div>
                                </form>
                            </div>
                            <!--end-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end page wrapper -->
@endsection
