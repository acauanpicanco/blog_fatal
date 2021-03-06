@extends('layouts.app')


@section('content')

    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    
    <header class="intro-header" style="background-image: url('{{ asset('assets/img/post-bg.jpg') }}')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="post-heading">
                        <h1>Blog Fatal</h1>
                        <h2 class="subheading">Criação de post</h2>
                        
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
                <p>Criação de post</p>
                
                <form name="createPost" action="{{ url('post-store') }}" method="post" enctype="multipart/form-data" id="createPostForm" novalidate>
                    {!! csrf_field() !!}

                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>Título</label>
                            <input type="text" class="form-control" placeholder="Título" id="titulo" name="titulo" required data-validation-required-message="Titulo do Post.">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    
                    
                    
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>Texto</label>
                            <textarea rows="5"  class="form-control" placeholder="Texto" id="texto" name="texto" required data-validation-required-message="Texto para o post."></textarea>
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>

                     <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>Tags</label>
                            <input type="text" value="" class="form-control" placeholder="Tags" id="tags" name="tags" data-validation-required-message="Tags do Post.">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>

                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>Status</label>
                            <select class="form-control" name="status" id="status">
                                <option value="0"  >Rascunho</option>
                                <option value="1" >Publicado</option>
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
                            <button type="submit" class="btn btn-default">Criar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
    <hr>


@endsection