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
            <li class="breadcrumb-item"><a href="/dashboard/member_article">Member's Articles</a></li>
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
              <div class="card-tools">
                <form action="/dashboard/article/{{ $article->slug }}" method="POST">
                  @csrf
                  @method('DELETE')
                  <a href="/dashboard/member_article/{{ $article->slug }}/edit" class="btn btn-sm btn-primary"><i class="fas fa-fw fa-pencil-alt"></i></a>
                  <button type="submit" class="btn btn-sm btn-danger" style="border-color: none" onclick="return confirm('Are you sure to delete this article?')"><i class="fas fa-fw fa-trash"></i></button>
                </form>
              </div>
            </div>
            <div class="card-body">
              <div class="text-center mb-3">
                <img src="/img/article/{{ $article->image }}" alt="">
              </div>
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
              <p>
                <strong>Title : </strong>
                {{ $article->title }}
              </p>
              <p>
                <strong>Author : </strong>
                {{ $article->user->name }}
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