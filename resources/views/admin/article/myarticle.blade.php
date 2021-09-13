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
            <li class="breadcrumb-item"><a href="/dashboard/articles">All Articles</a></li>
            <li class="breadcrumb-item active">My Article</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-6">
          @if (session()->has('message'))
          <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('message') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          @endif
        </div>
      </div>
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Lists of {{ auth()->user()->name }} Articles</h3>
        </div>
        <div class="card-body">
          <table id="shortlinkList" class="table table-bordered table-hover">
            <thead>
            <tr class="text-center">
              <th>No.</th>
              <th>Title</th>
              <th>Description</th>
              <th>Category</th>
              <th>Reader</th>
              <th class="text-nowrap">Published At</th>
              <th class="text-nowrap">Created At</th>
              <th>Action</th>
            </tr>
            </thead>
            <tbody>
              @foreach ($articles as $article)
                <tr>
                  <td class="text-center align-middle">{{ $loop->iteration }}</td>
                  <td class="text-wrap align-middle">{{ $article->title }}</td>
                  <td class="text-wrap align-middle">{{ $article->description }}</td>
                  <td class="text-wrap align-middle">{{ $article->category }}</td>
                  <td class="text-center align-middle">{{ $article->reader }}</td>
                  <td class="text-nowrap align-middle">
                    @if ($article->published_at)
                      {{ $article->published_at->diffForHumans() }}
                    @else
                      <div class="text-center">
                        <a href="/dashboard/article/publish/{{ $article->slug }}" class="btn-sm btn-primary">Publish Now!</a>
                      </div>
                    @endif
                  </td>
                  <td class="text-nowrap align-middle">{{ $article->created_at->diffForHumans() }}</td>
                  <td class="text-center text-nowrap align-middle">
                    <form action="/dashboard/article/{{ $article->slug }}" method="POST">
                      @csrf
                      @method('DELETE')
                      <a href="/dashboard/article/{{ $article->slug }}" class="btn btn-sm btn-info"><i class="fas fa-fw fa-eye"></i></a>
                      <a href="/dashboard/article/{{ $article->slug }}/edit" class="btn btn-sm btn-primary"><i class="fas fa-fw fa-pencil-alt"></i></a>
                      <button type="submit" class="btn btn-sm btn-danger" style="border-color: none" onclick="confirm('Are you sure to delete this article?')"><i class="fas fa-fw fa-trash"></i></button>
                    </form>
                  </td>
                </tr>
              @endforeach
            </tbody>
            <tfoot>
            <tr class="text-center">
              <th>No.</th>
              <th>Title</th>
              <th>Description</th>
              <th>Category</th>
              <th>Reader</th>
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