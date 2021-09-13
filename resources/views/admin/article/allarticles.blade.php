@extends('admin.layouts.main')

@section('content')
    
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">SPE ITS SC Articles</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
            <li class="breadcrumb-item active">Articles</li>
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
          <h3 class="card-title">Lists of SPE ITS SC Articles</h3>
        </div>
        <div class="card-body">
          <table id="shortlinkList" class="table table-bordered table-hover">
            <thead>
            <tr class="text-center">
              <th>No.</th>
              <th>Title</th>
              <th>Author</th>
              <th>Reader</th>
              <th>Category</th>
              <th>Published At</th>
              <th>Updated At</th>
              <th>Action</th>
            </tr>
            </thead>
            <tbody>
              @foreach ($articles as $article)
                <tr>
                  <td class="text-center align-middle">{{ $loop->iteration }}</td>
                  <td class="align-middle">{{ $article->title }}</td>
                  <td class="align-middle">{{ $article->user->name }}</td>
                  <td class="text-center align-middle">{{ $article->reader }}</td>
                  <td class="text-center align-middle">{{ $article->category }}</td>
                  <td class="text-nowrap align-middle">{{ $article->published_at ?? 'Not Published' }}</td>
                  <td class="text-nowrap align-middle">{{ $article->updated_at }}</td>
                  <td class="align-middle"><a href="/dashboard/article/{{ $article->slug }}" class="btn btn-sm btn-info"><i class="fas fa-fw fa-eye"></i> Show</a></td>
                </tr>
              @endforeach
            </tbody>
            <tfoot>
            <tr class="text-center">
              <th>No.</th>
              <th>Title</th>
              <th>Author</th>
              <th>Reader</th>
              <th>Category</th>
              <th>Published At</th>
              <th>Updated At</th>
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