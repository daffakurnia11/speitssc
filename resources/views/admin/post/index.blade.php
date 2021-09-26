@extends('admin.layouts.main')

@section('content')
    
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">SPE ITS SC Posts</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
            <li class="breadcrumb-item active">Posts</li>
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
      <div class="row">
        <div class="col-md-6">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Fun Facts Posts</h3>
            </div>
            <div class="card-body">
              <div class="row">
                @foreach ($funfact as $post)
                  <div class="col-sm-6 col-lg-12 col-xl-6">
                    <div class="card card-warning">
                      <div class="card-header">
                        <h3 class="card-title">{{ $post->title }}</h3>
                        <div class="card-tools">
                          <form action="/dashboard/post/{{ $post->slug }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm py-0" onclick="return confirm('Are you sure to delete?');"><i class="fas fa-trash"></i></button>
                          </form>
                        </div>
                      </div>
                      <div class="card-body py-0">
                        @php
                            $images = explode(';', $post->image)
                        @endphp
                        <div class="owl-carousel owl-theme owl-loaded">
                          <div class="owl-stage-outer">
                            <div class="owl-stage">
                              @foreach ($images as $image)
                                <div class="owl-item">
                                  <img src="/img/post/{{ $image }}" class="w-100" alt="">
                                </div>
                              @endforeach
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                @endforeach
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Seize Your Sunday Posts</h3>
            </div>
            <div class="card-body">
              <div class="row">
                @foreach ($seize as $post)
                  <div class="col-sm-6 col-lg-12 col-xl-6">
                    <div class="card card-warning">
                      <div class="card-header">
                        <h3 class="card-title">{{ $post->title }}</h3>
                        <div class="card-tools">
                          <form action="/dashboard/post/{{ $post->slug }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm py-0" onclick="confirm('Are you sure to delete?');"><i class="fas fa-trash"></i></button>
                          </form>
                        </div>
                      </div>
                      <div class="card-body py-0">
                        @php
                            $images = explode(';', $post->image)
                        @endphp
                        <div class="owl-carousel owl-theme owl-loaded">
                          <div class="owl-stage-outer">
                            <div class="owl-stage">
                              @foreach ($images as $image)
                              <div class="owl-item">
                                <img src="/img/post/{{ $image }}" class="w-100" alt="">
                              </div>
                              @endforeach
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                @endforeach
              </div>
            </div>
          </div>
        </div>
      </div>

    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content -->

@endsection