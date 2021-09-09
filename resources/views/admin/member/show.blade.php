@extends('admin.layouts.main')

@section('content')
    
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">SPE ITS SC Member</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="/dashboard/">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="/dashboard/user">Member</a></li>
            <li class="breadcrumb-item active">Member Detail</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <div class="content">
    <div class="container-fluid">

      @if (session()->has('resetSuccess'))
        <div class="alert alert-primary alert-dismissible fade show" role="alert">
          {{ session('resetSuccess') }}
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
      @endif
      
      <div class="row">
        <div class="col-lg-6">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Detail Information of {{ $user->name }}</h3>
            </div>
            <div class="card-body">
              
              <div class="row">
                <div class="col-sm-3">
                  <strong>Name</strong>
                  <strong class="float-right">:</strong>
                </div>
                <div class="col-sm-9">
                  {{ $user->name }}
                </div>
              </div>
              
              <div class="row">
                <div class="col-sm-3">
                  <strong>Student Number</strong>
                  <strong class="float-right">:</strong>
                </div>
                <div class="col-sm-9">
                  {{ $user->profile->student_number }}
                </div>
              </div>
              
              <div class="row">
                <div class="col-sm-3">
                  <strong>Batch</strong>
                  <strong class="float-right">:</strong>
                </div>
                <div class="col-sm-9">
                  {{ $user->profile->batch }}
                </div>
              </div>
              
              <div class="row">
                <div class="col-sm-3">
                  <strong>Faculty</strong>
                  <strong class="float-right">:</strong>
                </div>
                <div class="col-sm-9">
                  {{ $user->profile->faculty }}
                </div>
              </div>
              
              <div class="row">
                <div class="col-sm-3">
                  <strong>Major</strong>
                  <strong class="float-right">:</strong>
                </div>
                <div class="col-sm-9">
                  {{ $user->profile->major }}
                </div>
              </div>
              
              <div class="row">
                <div class="col-sm-3">
                  <strong>Phone</strong>
                  <strong class="float-right">:</strong>
                </div>
                <div class="col-sm-9">
                  {{ $user->profile->phone }}
                </div>
              </div>
              
              <div class="row">
                <div class="col-sm-3">
                  <strong>Line ID</strong>
                  <strong class="float-right">:</strong>
                </div>
                <div class="col-sm-9">
                  {{ $user->profile->line_id }}
                </div>
              </div>

            </div>
          </div>
        </div>

        <div class="col-lg-6">
          <div class="card card-danger">
            <div class="card-header">
              <h3 class="card-title">Detail Account of {{ $user->name }}</h3>
            </div>
            <div class="card-body">
              
              <div class="row">
                <div class="col-sm-3">
                  <strong>Name</strong>
                  <strong class="float-right">:</strong>
                </div>
                <div class="col-sm-9">
                  {{ $user->name }}
                </div>
              </div>
              
              <div class="row">
                <div class="col-sm-3">
                  <strong>Email</strong>
                  <strong class="float-right">:</strong>
                </div>
                <div class="col-sm-9">
                  {{ $user->email }}
                </div>
              </div>
              
              <div class="row">
                <div class="col-sm-3">
                  <strong>Password</strong>
                  <strong class="float-right">:</strong>
                </div>
                <div class="col-sm-9">
                  <form action="/dashboard/resetpass/{{ $user->id }}" method="POST" class="d-inline">
                    @csrf
                    @method('PUT')
                    <button type="submit" class="font-weight-bold btn p-0">Click to reset password!</button>
                  </form>
                </div>
              </div>
              
              <div class="row">
                <div class="col-sm-3">
                  <strong>Username</strong>
                  <strong class="float-right">:</strong>
                </div>
                <div class="col-sm-9">
                  {{ $user->username }}
                </div>
              </div>
              
              <div class="row">
                <div class="col-sm-3">
                  <strong>Registered</strong>
                  <strong class="float-right">:</strong>
                </div>
                <div class="col-sm-9">
                  {{ $user->created_at }}
                </div>
              </div>

            </div>
          </div>
          <div class="card card-warning">
            <div class="card-header">
              <h3 class="card-title">Files of {{ $user->name }}</h3>
            </div>
            <div class="card-body">
              
              <div class="row">
                <div class="col-sm-3">
                  <strong>Payment</strong>
                  <strong class="float-right">:</strong>
                </div>
                <div class="col-sm-9">
                  <a href="{{ asset('/files/payment/' . $user->file->payment) }}" target="_blank">See the payment slip</a>
                </div>
              </div>
              
              <div class="row">
                <div class="col-sm-3">
                  <strong>Screenshot</strong>
                  <strong class="float-right">:</strong>
                </div>
                <div class="col-sm-9">
                  <a href="{{ asset('/files/screenshot/' . $user->file->screenshot) }}" target="_blank">See the screenshot image</a>
                </div>
              </div>

            </div>
          </div>
        </div>
        
      </div>

    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content -->

@endsection