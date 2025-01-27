<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;

class ContentController extends Controller
{
    public function index(){
        $post = Post::all();
        $category = Category::all();

        return view("content.index", [
            "post" => $post,
            "category" => $category,
        ]);
    }
}
