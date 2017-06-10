@extends('layouts.app')


@section('content')

    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" style="background-image: url('{{ asset($post->imagem) }}')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="post-heading">
                        <h1>{{ $post->titulo }}</h1>
                       
                        <span class="meta">Postado em {{ $post -> created_at->format('d-m-Y')}}</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    

    <!-- Post Content -->
    <article>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <p>{{ $post->texto }}</p>

                    
                </div>
            </div>
        </div>
    </article>


@endsection