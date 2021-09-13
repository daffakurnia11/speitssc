@extends('admin.layouts.main')

@section('content')
    
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">SPE ITS SC Articles : {{ $article->title }}</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="/dashboard/">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="/dashboard/article">Articles</a></li>
            <li class="breadcrumb-item active">{{ $article->title }}</li>
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
        <div class="col-lg-8">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">{{ $article->title }}</h3>
            </div>
            <div class="card-body">
              {!! $article->body !!}
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Article Information</h3>
            </div>
            <div class="card-body">
              <img src="/img/article/{{ $article->image }}" class="w-100 mb-3" alt="">
              <p>
                <strong>Author : </strong>
                {{ $article->user->name }}
              </p>
              <p>
                <strong>Category : </strong>
                {{ $article->category }}
              </p>
              <p>
                <strong>Created : </strong>
                {{ $article->created_at->diffForHumans() }}
              </p>
              <p>
                <strong>Timestamp : </strong>
                {{ $article->created_at }}
              </p>
              <p>
                <strong>Published : </strong>
                {{ $article->published_at ? $article->published_at->diffForHumans() : 'Not Published' }}
              </p>
            </div>
          </div>
        </div>
      </div>


    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content -->

@endsection