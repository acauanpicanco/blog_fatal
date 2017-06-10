<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Models\Post;

use File;

use Illuminate\Support\Facades\Input;

use Illuminate\Support\Facades\Schema;


class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        


        return view('blog.create');

            
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      

        $post = $request->all();

        $post['slug'] = str_slug($post['titulo']);

        
        
    

        
        if($post['imagem']){
        

            $arquivo = str_slug( $request->file('imagem')->getClientOriginalName() );
            

            $request->file('imagem')->move( 'post-img/' ,  $post['slug'].$request->file('imagem')->getClientOriginalName());

            $post['imagem'] = 'post-img/'.$post['slug'] .  $request->file('imagem')->getClientOriginalName();
           
        }

       

        Post::create($post);

        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $post = Post::where('slug', $slug)->first();



        return view('blog.show', ['post' => $post]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        $post = Post::where('slug', $slug)->first();


        return view('blog.edit', ['post' => $post]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       
            $post = Post::find($id);

            $post->delete();

             return redirect('/');
       
    }
}
