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

    public function create(){
        $post = Post::all();
        $category = Category::all();

        return view("content.create", [
            "post" => $post,
            "category" => $category,
        ]);
    }

    public function store(Request $request){
        $payload = $request->validate([
            "title" => ["required", "min:3"],
            "description" => ["required"],
            "image" => ["required", "file", "extensions:png,jpg,jpeg"],
            "category" => ["required"],
        ]);

        if($request->hasFile("image")){
            $image = $request->file("image");
            $imageName = time() . "-" . $image->hashName();
            $image->move("image/", $imageName);
        } else {
            $imageName = "default.jpg";
        }

        $category = Category::all();
        foreach($category as $cate){
            if($cate->category == $payload['category']){
                $id_category = $cate->id;
            }
        }

        $post = New Post();

        $post->image = $imageName;
        $post->title = $payload['title'];
        $post->description = $payload['description'];
        $post->id_category = $id_category;
        $post->id_users = session()->get('userId');

        $post->save();

        return redirect()->route("content.index");
    }
}
