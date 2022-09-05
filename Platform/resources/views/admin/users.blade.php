@extends('layouts.app')

@push('style-head')
  <link href="{{ asset('plugins/datatables-bs4/css/dataTables.bootstrap4.css') }}" rel="stylesheet">
@endpush

@push('script-head')
  <script src="{{ asset('plugins/datatables/jquery.dataTables.js') }}" defer></script>
  <script src="{{ asset('plugins/datatables-bs4/js/dataTables.bootstrap4.js') }}" defer></script>
  <script src="{{ asset('js/pages/users.js') }}" defer></script>
@endpush
@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Owners</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}">Home</a></li>
                    <li class="breadcrumb-item active">Owners</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<section class="content">
    <div class="container-fluid">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Registered Users</h3>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered table-striped" id="users_table">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Domain</th>
                    <th>Token</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody></tbody>
              </table>
            </div>
          </div>
        </div>
    </div>
</section>
@endsection