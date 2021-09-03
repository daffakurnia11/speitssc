@extends('admin.layouts.main')

@section('content')
    
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">SPE ITS SC Expired Member</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="/dashboard/">Dashboard</a></li>
            <li class="breadcrumb-item active">Expired Member</li>
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
          <h3 class="card-title">Lists of SPE ITS SC Expired Member</h3>
        </div>
        <div class="card-body">
          <table id="memberList" class="table table-bordered table-hover">
            <thead>
            <tr class="text-center">
              <th width="30">No.</th>
              <th>Student Number</th>
              <th>Member ID</th>
              <th>Phone</th>
              <th>Line ID</th>
              <th>Batch</th>
              <th>Faculty</th>
              <th>Major</th>
              <th>Renewal Status</th>
            </tr>
            </thead>
            <tbody>
              @foreach ($users as $user)
              <tr>
                <td class="text-center">{{ $loop->iteration }}</td>
                <td class="text-nowrap">{{ $user->student_number }}</td>
                <td class="text-nowrap">{{ $user->member_id }}</td>
                <td class="text-nowrap">{{ $user->phone }}</td>
                <td class="text-nowrap">{{ $user->line_id }}</td>
                <td class="text-nowrap">{{ $user->batch }}</td>
                <td class="text-nowrap">{{ $user->faculty }}</td>
                <td class="text-nowrap">{{ $user->major }}</td>
                <td>
                  @if ($user->status === 1)
                      Activated
                  @else
                      Not Active
                  @endif
                </td>
              </tr>
              @endforeach
            </tbody>
            <tfoot>
            <tr class="text-center">
              <th>No.</th>
              <th>Student Number</th>
              <th>Member ID</th>
              <th>Phone</th>
              <th>Line ID</th>
              <th>Batch</th>
              <th>Faculty</th>
              <th>Major</th>
              <th>Renewal Status</th>
            </tr>
            </tfoot>
          </table>
        </div>
      </div>

    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content -->

@endsection