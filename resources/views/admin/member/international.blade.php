@extends('admin.layouts.main')

@section('content')
    
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">SPE International Member</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="/dashboard/">Dashboard</a></li>
            <li class="breadcrumb-item active">International Member</li>
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
          <h3 class="card-title">Lists of SPE International Member</h3>
        </div>
        <div class="card-body">
          <table id="memberList" class="table table-bordered table-hover">
            <thead>
            <tr class="text-center">
              <th width="30">No.</th>
              <th>Member ID</th>
              <th>Name</th>
              <th>Student Number</th>
              <th>Email</th>
              <th>Major</th>
              <th>Status</th>
              <th width="70">Action</th>
            </tr>
            </thead>
            <tbody>
              @foreach ($members as $user)
              <tr>
                <td class="text-center">{{ $loop->iteration }}</td>
                <td class="text-nowrap">{{ $user->profile->member_id }}</td>
                <td class="text-nowrap">{{ $user->name }}</td>
                <td class="text-nowrap">{{ $user->profile->student_number }}</td>
                <td class="text-nowrap">{{ $user->email }}</td>
                <td class="text-nowrap">{{ $user->profile->major }}</td>
                <td class="text-nowrap">
                  @if ($user->file->member_slip)
                    Active Member
                  @else
                    Not Registered
                  @endif
                </td>
                <td class="text-center">
                  <form action="/dashboard/user/{{ $user->id }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <a href="/dashboard/user/{{ $user->id }}" class="btn btn-sm btn-primary"><i class="fas fa-fw fa-eye"></i></a>
                    {{-- <a href="/dashboard/user/{{ $user->id }}/edit" class="btn btn-sm btn-success"><i class="fas fa-fw fa-pencil-alt"></i></a> --}}
                    <button type="submit" class="btn btn-sm btn-danger" style="border-color: none"><i class="fas fa-fw fa-trash"></i></button>
                  </form>
                </td>
              </tr>
              @endforeach
            </tbody>
            <tfoot>
            <tr class="text-center">
              <th width="30">No.</th>
              <th>Member ID</th>
              <th>Name</th>
              <th>Student Number</th>
              <th>Email</th>
              <th>Major</th>
              <th>Status</th>
              <th width="70">Action</th>
            </tr>
            </tfoot>
          </table>
        </div>
      </div>

    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content -->

@endsection