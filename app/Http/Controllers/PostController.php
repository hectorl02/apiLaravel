<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//add
use App\Models\Post;

class PostController extends Controller
{
    //add
    public function index()
    {
        //retorna el index con esta información
        return view('index',[
            'posts'=>Post::latest()->paginate()
        ]);
    }
}
