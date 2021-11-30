@extends('templates.main')

@section('navbar')
  @include('templates.navbar')
@endsection

@section('footer')
    @include('templates.footer')
@endsection

@section('content')

	<section id="detailArticle">
		<div class="container">
			<div class="col-lg-8 article mx-auto my-5">
				<h1 class="article-title">
					{{ $articles->title }}
					@if (auth()->user()->id == $articles->user_id)
					<a href="/myarticle/{{ $articles->slug }}/edit">
						<i class="fas fa-edit"></i>
					</a>
					@endif
				</h1>
				<div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
					<div>
						<span class="article-author">
							<img src="/img/profile_user.png" class="me-3" alt="">
							{{ $articles->user->name }}
						</span>
						@if ($articles->published_at)
							<span class="article-released">Published at {{ $articles->published_at->diffForHumans() }}</span>
						@else
							<span class="article-released">Created at {{ $articles->created_at->diffForHumans() }}</span>
						@endif
					</div>
					<div class="text-end">
						<button class="article-button" onclick="window.history.back();">Back to Articles</button>
					</div>
				</div>
				<div class="text-center">
					<img src="/img/article/{{ $articles->image }}" class="article-image my-4" alt="">
				</div>
				<p>
					{!! $articles->body !!}
				</p>
			</div>
		</div>
	</section>

@endsection