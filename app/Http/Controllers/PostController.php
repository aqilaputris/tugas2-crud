<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function getIndex()
    {
        return view('template.index', [
            'data' => post::get(),
        ]);    
    }
}
