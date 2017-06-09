@extends('layouts.app')

@section('content')

       
    <header class="intro-header" style="background-image: url('{{ asset('assets/img/home-bg.jpg') }}')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="site-heading">
                        <h1>Fatal Blog</h1>
                        <hr class="small">
                       
                    </div>
                </div>
            </div>
        </div>
    </header>

    
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                
              @foreach($posts as $post)
                
                <div class="post-preview">
                    <a href="{{ route('post.show', ['slug' => str_slug($post->titulo, '-' )]) }}">
                        <h2 class="post-title">
                            {{ $post->titulo }}
                        </h2>
                        
                    </a>
                    <p class="post-meta">Postado em {{ $post -> created_at->format('d-m-Y')}}</p>
                </div>

                <hr>

                @endforeach
                <!-- Pager -->
                @if( !is_null($posts->previousPageUrl()))
                <ul class="pager pull-left">
                    <li class="next">
                        <a href="{{ $posts->previousPageUrl() }}">&larr; Posts Novos </a>
                    </li>
                </ul>

                @endif
                @if( !is_null($posts->nextPageUrl()))
                <ul class="pager pull-right">
                    <li class="next">
                        <a href="{{ $posts->nextPageUrl() }}">Posts Antigos &rarr;</a>
                    </li>
                </ul>
                @endif


                {{ $posts->links() }}
            </div>
        </div>
    </div>

@endsection
