@extends('admin.layouts.main')

@section('content')
    
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Welcome, <strong>{{ auth()->user()->name }}</strong></h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item active">Dashboard</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <div class="content">
    <div class="container-fluid">

      {{-- User Profile Card --}}
      <div class="card mb-3 col-lg-4 p-0">
        <div class="row g-0 align-items-center">
          <div class="col-md-4">
            <img src="/img/avatar5.png" class="img-fluid rounded-start" alt="">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">{{ auth()->user()->name }}</h5>
              <p class="card-text"><strong>Username : </strong>{{ auth()->user()->username }}</p>
              <p class="card-text"><small class="text-muted">Profile updated at {{ auth()->user()->updated_at->diffForHumans() }}</small></p>
            </div>
          </div>
        </div>
      </div>
      {{-- End of User Profile Card --}}

      {{-- Statistics Card --}}
      <div class="row">
        <div class="col-lg-6 col-xl-3 col-6">
          <!-- small box -->
          <div class="small-box bg-warning">
            <div class="inner">
              <h3>{{ $members }}</h3>
              
              <p>Total Members</p>
            </div>
            <div class="icon">
              <i class="fas fa-users"></i>
            </div>
            <a href="/dashboard/user" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <div class="col-lg-6 col-xl-3 col-6">
          <!-- small box -->
          <div class="small-box bg-danger">
            <div class="inner">
              <h3>{{ $articles }}</h3>
              
              <p>Total Articles</p>
            </div>
            <div class="icon">
              <i class="fas fa-newspaper"></i>
            </div>
            <a href="/dashboard/articles" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <div class="col-lg-6 col-xl-3 col-6">
          <!-- small box -->
          <div class="small-box bg-success">
            <div class="inner">
              <h3>{{ $posts }}</h3>
              
              <p>Total Posts</p>
            </div>
            <div class="icon">
              <i class="fas fa-copy"></i>
            </div>
            <a href="/dashboard/post" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <div class="col-lg-6 col-xl-3 col-6">
          <!-- small box -->
          <div class="small-box bg-primary">
            <div class="inner">
              <h3>{{ $shortlinks }}</h3>
              
              <p>Short Links</p>
            </div>
            <div class="icon">
              <i class="fas fa-link"></i>
            </div>
            <a href="/dashboard/shortlink" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
      </div>
      {{-- End of Statistics Card --}}

      {{-- Articles --}}
      <div class="row">
        <div class="col-lg-6">
          {{-- Petroknowledge --}}
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Petroknowledge Articles</h3>
              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body p-0">
              <div class="table-responsive">
                <table class="table m-0">
                  <thead>
                    <tr class="text-center">
                      <th>No</th>
                      <th>Title</th>
                      <th>Status</th>
                      <th>Reader</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($petroknowledge as $article)
                    <tr>
                      <td class="text-center">{{ $loop->iteration }}</td>
                      <td>
                        <a href="/dashboard/article/{{ $article->slug }}">
                          {{ $article->title }}
                        </a>
                      </td>
                      <td class="text-center">
                        @if ($article->published_at)
                          <span class="badge badge-primary">
                            Published
                          </span>
                        @else
                          <span class="badge badge-warning">
                            Draft
                          </span>
                        @endif
                      </td>
                      <td class="text-center">{{ $article->reader }}</td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.table-responsive -->
            </div>
            <!-- /.card-body -->
            <div class="card-footer clearfix">
              <a href="/dashboard/article" class="btn btn-sm btn-primary float-left">See My Articles</a>
              <a href="/dashboard/articles" class="btn btn-sm btn-warning float-right">All Articles</a>
            </div>
            <!-- /.card-footer -->
          </div>
          {{-- End of Petroknowledge --}}
        </div>
        <div class="col-lg-6">
          
          
          {{-- Petronews --}}
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Petronews Articles</h3>
              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body p-0">
              <div class="table-responsive">
                <table class="table m-0">
                  <thead>
                    <tr class="text-center">
                      <th>No</th>
                      <th>Title</th>
                      <th>Status</th>
                      <th>Reader</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($petronews as $article)
                    <tr>
                      <td class="text-center">{{ $loop->iteration }}</td>
                      <td>
                        <a href="/dashboard/article/{{ $article->slug }}">
                          {{ $article->title }}
                        </a>
                      </td>
                      <td class="text-center">
                        @if ($article->published_at)
                          <span class="badge badge-primary">
                            Published
                          </span>
                        @else
                          <span class="badge badge-warning">
                            Draft
                          </span>
                        @endif
                      </td>
                      <td class="text-center">{{ $article->reader }}</td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.table-responsive -->
            </div>
            <!-- /.card-body -->
            <div class="card-footer clearfix">
              <a href="/dashboard/article" class="btn btn-sm btn-primary float-left">See My Articles</a>
              <a href="/dashboard/articles" class="btn btn-sm btn-warning float-right">All Articles</a>
            </div>
            <!-- /.card-footer -->
          </div>
          {{-- End of Petronews --}}
        </div>
      </div>
      {{-- End of Articles --}}
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content -->

@endsection