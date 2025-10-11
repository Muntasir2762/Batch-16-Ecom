@extends('backend.master')

@section('content')
    <!--begin::App Content Header-->
    <div class="app-content-header">
        <!--begin::Container-->
        <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
                <div class="col-sm-6">
                    <h3 class="mb-0">Edit User</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-end">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Edit User</li>
                    </ol>
                </div>
            </div>
            <!--end::Row-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::App Content Header-->
    <!--begin::App Content-->
    <div class="app-content">
        <!--begin::Container-->
        <div class="container-fluid">
            <!--begin::Row-->
            <div class="row g-4">
                <!--begin::Col-->
                <div class="col-md-12">
                    <!--begin::Quick Example-->
                    <div class="card card-primary card-outline mb-4">
                        <!--begin::Header-->
                        <div class="card-header">
                            <div class="card-title">Edit User</div>
                        </div>
                        <!--end::Header-->
                        <!--begin::Form-->
                        <form action="{{url('/admin/user/update/'.$user->id)}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <!--begin::Body-->
                            <div class="card-body">
                                <div class="mb-3">
                                    <label for="name" class="form-label">User Name*</label>
                                    <input type="text" class="form-control" value="{{$user->name}}" name="name" id="name" required/>
                                </div>

                                <div class="mb-3">
                                    <label for="role" class="form-label">Select Role*</label>
                                    <select class="form-control" name="role" id="role">
                                        <option value="employee" @if ($user->role == "employee")
                                            selected
                                        @endif>Employee</option>
                                        <option value="editor" @if ($user->role == "editor")
                                            selected
                                        @endif>Editor</option>
                                    </select>
                                </div>

                                <div class="mb-3">
                                    <label for="email" class="form-label">User Email*</label>
                                    <input type="email" class="form-control" value="{{$user->email}}" name="email" id="email" required/>
                                </div>

                                <div class="mb-3">
                                    <label for="password" class="form-label">User Password*</label>
                                    <input type="text" class="form-control" name="password" id="password"/>
                                </div>
                            </div>
                            <!--end::Body-->
                            <!--begin::Footer-->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                            <!--end::Footer-->
                        </form>
                        <!--end::Form-->
                    </div>
                    <!--end::Quick Example-->
                </div>
                <!--end::Col-->
            </div>
            <!--end::Row-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::App Content-->
@endsection
