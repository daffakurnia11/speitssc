@extends('admin.layouts.main')

@section('content')
    
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">SPE ITS SC Admin Request</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="/dashboard/">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="/dashboard/admin">Admin</a></li>
            <li class="breadcrumb-item active">Requesting</li>
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
          <h3 class="card-title">Lists of SPE ITS SC Admin Requesting</h3>
        </div>
        <div class="card-body">
          <table id="memberList" class="table table-bordered table-hover">
            <thead>
            <tr class="text-center">
              <th width="30">No.</th>
              <th>Name</th>
              <th>Username</th>
              <th width="150">Accept Request</th>
              <th width="70">Delete</th>
            </tr>
            </thead>
            <tbody>
              @foreach ($admin as $user)
              <tr>
                <td class="text-center">{{ $loop->iteration }}</td>
                <td class="text-nowrap">{{ $user->name }}</td>
                <td class="text-nowrap">{{ $user->username }}</td>
                <td class="text-nowrap text-center">
                  <form action="/dashboard/admin/acceptrequest/{{ $user->id }}" method="POST">
                    @csrf
                    @method('PATCH')
                    <input type="hidden" name="nrp" value="{{ $user->username }}">
                    <button type="submit" class="btn btn-sm btn-primary"><i class="fas fa-check"></i> Accept!</button>
                  </form>  
                </td>
                <td class="text-center">
                  <form action="/dashboard/admin/{{ $user->id }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-sm btn-danger" style="border-color: none" onclick="return confirm('Are you sure to remove the user?');"><i class="fas fa-fw fa-trash"></i></button>
                  </form>
                </td>
              </tr>
              @endforeach
            </tbody>
            <tfoot>
            <tr class="text-center">
              <th width="30">No.</th>
              <th>Name</th>
              <th>Username</th>
              <th width="150">Accept Request</th>
              <th width="70">Delete</th>
            </tr>
            </tfoot>
          </table>
        </div>
      </div>

    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content -->

@endsection