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
            <li class="breadcrumb-item"><a href="/dashboard/">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="/dashboard/article">Articles</a></li>
            <li class="breadcrumb-item active">Edit</li>
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
          <h3 class="card-title">Edit SPE ITS SC Article</h3>
        </div>
        <form action="/dashboard/article/{{ $article->slug }}" method="POST" enctype="multipart/form-data">
          @csrf
          @method('PUT')
          <div class="card-body">
            <div class="row">
              <div class="col-lg-6">
                <div class="form-group">
                  <label for="title">Title</label>
                  <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" placeholder="Please enter the title of your article" value="{{ old('title', $article->title) }}">
                  @error('title')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                  @enderror
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-group">
                  <label for="header-img">Header Image</label>
                  <div class="custom-file">
                    <input type="file" id="header-img" name="image">
                  </div>
                  @error('image')
                    <small class="text-danger">
                      {{ $message }}
                    </small>
                  @enderror
                </div>
              </div>
            </div>
            <div class="form-group">
              <label for="description">Description</label>
              <textarea class="form-control @error('description') is-invalid @enderror" rows="3" id="description" name="description" placeholder="Create the description">{{ old('description', $article->description) }}</textarea>
              @error('description')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror
            </div>
            <div class="form-group">
              <label for="body">Article</label>
              <textarea id="summernote" name="body">{{ old('body', $article->body) }}</textarea>
              @error('body')
                <small class="text-danger">
                  {{ $message }}
                </small>
              @enderror
            </div>
            <div class="col-lg-6 px-0">
              <div class="form-group">
                <label>Category</label>
                <select class="form-control @error('category') is-invalid @enderror" name="category">
                  <option disabled>--Choose the category--</option>
                  <option value="Petroknowledge" {{ $article->category == 'Petroknowledge' ?? 'selected' }}>Petroknowledge</option>
                  <option value="Seize Your Sunday" {{ $article->category == 'Seize Your Sunday' ?? 'selected' }}>Seize Your Sunday</option>
                  <option value="Petronews" {{ $article->category == 'Petronews' ?? 'selected' }}>Petronews</option>
                  <option value="Fun Facts" {{ $article->category == 'Fun Facts' ?? 'selected' }}>Fun Facts</option>
                  <option value="Journalism" {{ $article->category == 'Journalism' ?? 'selected' }}>Journalism</option>
                </select>
                @error('category')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                @enderror
              </div>
            </div>
            <div class="form-check">
              <input type="checkbox" class="form-check-input" id="publish" name="publish" {{ $article->published_at ? 'checked' : '' }}>
              <label class="form-check-label" for="publish">Publish Now!</label>
            </div>
          </div>
          <div class="card-footer">
            <button type="submit" class="btn btn-primary">Save Changes!</button>
          </div>
        </form>
      </div>

    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content -->

@endsection