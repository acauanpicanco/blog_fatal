<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Models\Post;
class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::where('status', '1')
                    ->orderBy('created_at', 'desc')
                    ->simplePaginate(3);

        return view('index', ['posts' => $posts] );
    }


}
