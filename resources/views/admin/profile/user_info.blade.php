@extends('admin.admin_master')
@section('page_title', 'Employees')
@section('admin_content')

<div id="content-wrapper">

  <div class="container-fluid">

    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="#">Dashboard</a>
      </li>
      <li class="breadcrumb-item active">Overview</li>
    </ol>
    <!-- DataTables Example -->
    <div class="card mb-3">
      <div class="card-header">
        <i class="fas fa-table"></i>
      Emolee Information</div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>Name</th>
                <th>Position</th>
                <th>Office</th>
                <th>Age</th>
                <th>Start date</th>
                <th>Salary</th>
              </tr>
            </thead>

            <tbody style="font-size: small;">
              @foreach($user as $key => $data)
              <tr>
                <th>{{$data->name}}</th>
                <th>{{$data->position}}</th>
                <th>{{$data->district}}</th>
                <th>30</th>
                <th>{{$data->created_at}}</th>
                <th>30</th>
                <th>
                  <a class="btn btn-info btn-sm" href="{{route('user.edit',$data->id)}}">Attendance</a>

                </th>

              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
      <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
    </div>

  </div>
  <!-- /.container-fluid -->

  @endsection
