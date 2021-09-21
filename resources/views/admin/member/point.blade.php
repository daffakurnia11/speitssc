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
              <th>Username</th>
              <th>Student Number</th>
              <th>Member ID</th>
              <th>Point</th>
            </tr>
            </thead>
            <tbody>
              @foreach ($points as $point)
              <tr>
                <td class="text-center">{{ $loop->iteration }}</td>
                <td class="text-nowrap">{{ $point->user->name }}</td>
                <td class="text-nowrap">{{ $point->user->username }}</td>
                <td class="text-nowrap text-center">{{ $point->user->profile->student_number }}</td>
                <td class="text-nowrap text-center">{{ $point->user->profile->member_id }}</td>
                <td class="text-nowrap text-center">{{ $point->point }}</td>
              </tr>
              @endforeach
            </tbody>
            <tfoot>
            <tr class="text-center">
              <th>No.</th>
              <th>Name</th>
              <th>Username</th>
              <th>Student Number</th>
              <th>Member ID</th>
              <th>Point</th>
            </tr>
            </tfoot>
          </table>
        </div>
      </div>

    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content -->

@endsection