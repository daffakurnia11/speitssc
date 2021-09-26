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
            <li class="breadcrumb-item"><a href="/dashboard/">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="/dashboard/post">Posts</a></li>
            <li class="breadcrumb-item active">Create</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <div class="content">
    <div class="container-fluid">
      
      <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">Create New SPE ITS SC Post</h3>
        </div>
        <form action="/dashboard/post" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="card-body">
            <div class="row">
              <div class="col-lg-6">
                <div class="form-group">
                  <label for="title">Title</label>
                  <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" placeholder="Please enter the title of your post" value="{{ old('title') }}">
                  @error('title')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                  @enderror
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-group">
                  <label for="post-img">Post Image (<span class="text-danger">only JPG or PNG</span>)</label>
                  <div class="custom-file">
                    <input type="file" id="post-img" name="image[]" multiple>
                  </div>
                  @if ($errors->has('image'))
                    @foreach ($errors->get('image') as $error)
                      <small class="text-danger">
                        {{ $error }}
                      </small>
                    @endforeach
                  @endif
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-group">
                  <label for="link">Link</label>
                  <input type="text" class="form-control @error('link') is-invalid @enderror" id="link" name="link" placeholder="Please enter the link of your post" value="{{ old('link') }}">
                    @error('link')
                      <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                    @enderror
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-group">
                  <label>Category</label>
                  <select class="form-control @error('category') is-invalid @enderror" name="category">
                    <option disabled selected>--Choose the category--</option>
                    <option value="Seize Your Sunday">Seize Your Sunday</option>
                    <option value="Fun Facts">Fun Facts</option>
                  </select>
                  @error('category')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                  @enderror
                </div>
              </div>
            </div>
          </div>
          <div class="card-footer">
            <button type="submit" class="btn btn-primary">Save Post!</button>
          </div>
        </form>
      </div>

    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content -->

@endsection