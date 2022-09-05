@extends('layouts.app')

@push('style-head')
    <link href="{{ asset('css/pages/profile.css') }}" type="text/css" rel="stylesheet"/>
@endpush

@push('script-head')
    <script src="{{ asset('js/pages/profile.js') }}" type="text/javascript" defer></script>
@endpush
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Profile</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item active">Profile</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Profile Setting</h3>
                        </div>
                        <div class="card-body">
                            <form class="form" action="{{ route('profile.update', ['id' => 0]) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="text-center">
                                    <span class="image-preview">
                                        <img src="{{ auth()->user()->photo != '' ? url('uploads/users/' . auth()->user()->photo) : url('images/avatar.png') }}" width="120" height="120"/>
                                        <span class="mask">
                                            <a href="javascript: void(0);" class="upload_btn text-light">UPLOAD PHOTO</a>
                                        </span>
                                    </span>
                                </div>
                                <div class="d-none">
                                    <input type="file" name="photo"/>
                                </div>
                                <div class="form-group">
                                    <label>Name:</label>
                                    <input type="text" class="form-control" name="name" value="{{ Auth::user()->name }}"/>
                                </div>
                                <div class="form-group">
                                    <label>Email:</label>
                                    <input type="email" class="form-control" name="email" value="{{ Auth::user()->email }}"/>
                                </div>
                                <div class="text-right">
                                    <button class="btn btn-primary">
                                        <i class="fa fa-edit"></i> Edit
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Password Setting</h3>
                        </div>
                        <div class="card-body">
                            <form class="form" action="{{ route('profile.update', ['id' => 1]) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label>New Password:</label>
                                    <input type="password" class="form-control" name="new_password"/>
                                </div>
                                <div class="form-group">
                                    <label>Confirm Password:</label>
                                    <input type="password" class="form-control" name="confirm_password"/>
                                    @error('new_password')
                                    <div class="alert alert-danger">${{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="text-right">
                                    <button class="btn btn-primary">
                                        <i class="fa fa-edit"></i> Edit
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection