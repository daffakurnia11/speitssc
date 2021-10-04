@extends('admin.layouts.main')

@section('content')
    
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">SPE ITS SC Member Points</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="/dashboard/">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="/dashboard/user">Member</a></li>
            <li class="breadcrumb-item active">Point</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <div class="content">
    <div class="container-fluid">
      
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Lists of SPE ITS SC Member Point</h3>
        </div>
        <div class="card-body">
          <table id="memberList" class="table table-bordered table-hover">
            <thead>
            <tr class="text-center">
              <th width="30">No.</th>
              <th>Name</th>
              <th>Member ID</th>
              <th>Major, Batch</th>
              <th>Student Number</th>
              <th>Point</th>
              <th>Action</th>
            </tr>
            </thead>
            <tbody>
              @foreach ($points as $point)
              <tr>
                <td class="text-center">{{ $loop->iteration }}</td>
                <td class="text-nowrap member-name">{{ $point->user->name }}</td>
                <td class="text-nowrap text-center">{{ $point->user->profile->member_id }}</td>
                <td class="text-nowrap text-center">{{ $point->user->profile->major }}, {{ $point->user->profile->batch }}</td>
                <td class="text-nowrap text-center">{{ $point->user->profile->student_number }}</td>
                <td class="text-nowrap text-center score-{{ $point->id }}">{{ $point->point }}</td>
                <td class="text-nowrap text-center" width="150">
                  <form action="" method="POST">
                    <div class="input-group input-group-sm">
                      <input type="hidden" name="id" value="{{ $point->id }}">
                      <input type="text" class="form-control point-{{ $point->id }}" name="point" value="{{ $point->point }}">
                      <span class="input-group-append">
                        <button type="button" class="btn btn-primary btn-flat btn-submit toastsDefaultSuccess" data-member="{{ $point->id }}"><i class="fas fa-check"></i></button>
                      </span>
                    </div>
                  </form>
                </td>
              </tr>
              @endforeach
            </tbody>
            <tfoot>
            <tr class="text-center">
              <th>No.</th>
              <th>Name</th>
              <th>Member ID</th>
              <th>Major, Batch</th>
              <th>Student Number</th>
              <th>Point</th>
              <th>Action</th>
            </tr>
            </tfoot>
          </table>
        </div>
      </div>

    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content -->

@endsection