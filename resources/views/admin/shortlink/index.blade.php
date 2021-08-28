@extends('admin.layouts.main')

@section('content')
    
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">SPE ITS SC Short Link</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="/admin/">Dashboard</a></li>
            <li class="breadcrumb-item active">Short Link</li>
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
          <h3 class="card-title">Lists of SPE ITS SC Short Link</h3>
        </div>
        <div class="card-body">
          <table id="shortlinkList" class="table table-bordered table-hover">
            <thead>
            <tr class="text-center">
              <th>No.</th>
              <th>Name</th>
              <th>Short link</th>
              <th>Original</th>
              <th>Action</th>
            </tr>
            </thead>
            <tbody>
              @foreach ($links as $link)
              <tr>
                <td class="text-center">{{ $loop->iteration }}</td>
                <td>{{ $link->name }}</td>
                <td class="text-wrap">
                  <a href="/{{ $link->short }}" target="_blank">speitssc.org/{{ $link->short }}</a> 
                </td>
                <td class="text-wrap">
                  <a href="{{ $link->original }}" target="_blank">{{ $link->original }}</a> 
                </td>
                <td class="text-center">
                  <form action="/admin/shortlink/{{ $link->id }}" method="POST">
                    @csrf
                    @method('DELETE')
                  <a href="/{{ $link->short }}" class="btn btn-sm btn-primary" target="_blank"><i class="fas fa-fw fa-eye"></i></a>
                  <a href="/admin/shortlink/{{ $link->id }}/edit" class="btn btn-sm btn-success"><i class="fas fa-fw fa-pencil-alt"></i></a>
                    <button type="submit" class="btn btn-sm btn-danger" style="border-color: none"><i class="fas fa-fw fa-trash"></i></button>
                  </form>
                </td>
              </tr>
              @endforeach
            </tbody>
            <tfoot>
            <tr class="text-center">
              <th>No.</th>
              <th>Name</th>
              <th>Short link</th>
              <th>Original</th>
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