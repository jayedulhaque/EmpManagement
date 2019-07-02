@extends('admin.admin_master')
@section('page_title', 'Attendance')
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
        <small>
                         <p class="text-center  alert-success">{{Session::get('message_success')}}</p>
                         <p class="text-center  alert-danger">{{Session::get('message_error')}}</p>
                     </small>
      {{$user->name}} Attendance</div>
      <div class="container">
        @if(isset($user))
        <form method="post" action="{{url('user')}}" enctype="multipart/form-data">

          {{csrf_field()}}
          <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="ban_id">User</label>
              <input type="text" class="form-control" name="ban_id" value="{{$user->ban_id}}" readonly>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="in_time">In Time</label>
              <input type="text" class="form-control" name="in_time">
            </div>
          </div>
          <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="out_time">Out Time</label>
              <input type="text" class="form-control" name="out_time">
            </div>
          </div>
          <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="date">Date</label>
              <input type="text" class="form-control" name="date">
            </div>
          </div>

          <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4" style="margin-top:30px">
              <button type="submit" class="btn btn-success">Submit</button>
            </div>
          </div>
        </form>
        @endif
      </div>
      <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
    </div>

  </div>
  <!-- /.container-fluid -->

  @endsection
