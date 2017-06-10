@extends('layouts.app')


@section('content')

    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    
    <header class="intro-header" style="background-image: url('{{ asset($post->imagem) }}')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="post-heading">
                        <h1>Blog Fatal</h1>
                        <h2 class="subheading">Edição de post</h2>
                        
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Post Content -->
    
        
    

<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <p>Edição de post</p>
                
                <form name="editPost" action="{{ url('post-store') }}" method="post" enctype="multipart/form-date" id="editPostForm" novalidate>
                    {!! csrf_field() !!}

                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>Título</label>
                            <input type="text" value="{{ $post->titulo }}" class="form-control" placeholder="Título" id="titulo" name="titulo" required data-validation-required-message="Titulo do Post.">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    
                    
                    
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>Texto</label>
                            <textarea rows="5" value="{{ $post->texto }}" class="form-control" placeholder="Texto" id="texto" name="texto" required data-validation-required-message="Texto para o post.">{{ $post->texto }}</textarea>
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>

                     <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>Tags</label>
                            <input type="text" value="{{ $post->tags }}" class="form-control" placeholder="Tags" id="tags" name="tags" data-validation-required-message="Tags do Post.">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>

                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>Status</label>
                            <select class="form-control" name="status" id="status">
                                <option value="0" @if( $post->status == 0 ) selected @endif >Rascunho</option>
                                <option value="1" @if( $post->status == 1 ) selected @endif >Publicado</option>
                            </select>
                            
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>Imagem</label>
                            <input type="file" class="form-control" placeholder="Imagem" id="imagem" name="imagem"  data-validation-required-message="Tags do Post.">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>


                    <br>
                    <div id="success"></div>
                    <div class="row">
                        <div class="form-group col-xs-12">
                            <button type="submit" class="btn btn-default">Editar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
    <hr>


@endsection