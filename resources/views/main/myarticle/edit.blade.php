@extends('templates.main')

@section('navbar')
    @include('templates.navbar')
@endsection

@section('footer')
    @include('templates.footer')
@endsection

@section('title', 'My Articles')

@section('content')

  <section id="editProfile">
    <div class="container">
      <div class="d-flex align-items-center my-4">
        <img src="/svg/profile_avatar.svg" class="profile-img" alt="">
        <div class="ms-4">
          <h1 class="profile-name">{{ auth()->user()->name }}</h1>
          <h2 class="profile-desc">{{ auth()->user()->profile->major }}, {{ auth()->user()->profile->batch }}</h2>
          @if (auth()->user()->profile->member_id)
            <p>Member ID : <strong>{{ auth()->user()->profile->member_id }}</strong></p>
          @endif
        </div>
      </div>
    </div>
  </section>

  <section id="myArticle">
    <div class="container article mt-5">
      <div class="col-lg-9 mx-auto">
        <form action="/myarticle/{{ $myarticle->slug }}" method="POST" enctype="multipart/form-data">
          @method("PUT")
          @csrf
          <div class="row">
            <div class="col-md-6">
              <div class="mb-3">
                <label for="title" class="form-label fw-bold">Title</label>
                <input type="text" class="form-control" name="title" id="title" placeholder="Your Article Title" value="{{ old('title', $myarticle->title) }}">
                @error('title')
                <small class="text-danger">
                  {{ $message }}
                </small>
                @enderror
              </div>
            </div>
            <div class="col-md-6">
              <div class="mb-3">
                <label class="form-label fw-bold">Header</label>
                <div class="input-group">
                  <input type="file" class="form-control" name="image" accept=".jpg,.png">
                </div>
                @error('image')
                <small class="text-danger">
                  {{ $message }}
                </small>
                @enderror
              </div>
            </div>
          </div>
          <div class="mb-3">
            <label for="description" class="form-label fw-bold">Description</label>
            <textarea class="form-control" name="description" id="description" rows="3">{{ $myarticle->description }}</textarea>
            @error('description')
            <small class="text-danger">
              {{ $message }}
            </small>
            @enderror
          </div>
          <div class="mb-3">
            <label class="form-label fw-bold">Article's Body</label>
            @error('body')
            <small class="text-danger d-block mb-2">
              {{ $message }}
            </small>
            @enderror
            <textarea class="form-control" name="body" id="summernote" rows="3">{!! $myarticle->body !!}</textarea>
          </div>
          <div class="text-end">
            <a href="/myarticle" class="btn me-3">Back to My Articles</a>
            <button type="submit" class="article-button">Edit Article!</button>
          </div>
        </form>
      </div>
    </div>
  </section>

@endsection