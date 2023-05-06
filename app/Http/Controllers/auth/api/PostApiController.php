<?php

namespace App\Http\Controllers\auth\api;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class PostApiController extends Controller
{
    public function get_all_posts(){
        $posts = Post::latest()->get();
        return response($posts,200);
    }
    
    public function get_post_by_id($id){
        $post = Post::where('id',$id)->first();
        return response($post,200);
    }

    public function delete_posts($id){
        $file = Post::where('id',$id)->first()->image;
        if (File::exists(public_path("assets/images/posts/".$file))) {
            File::delete(public_path("assets/images/posts/".$file));
        }
        Post::find($id)->delete();
        return response($file,200);
    }
}