<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class PostController extends Controller
{
    public function index(){
        return view('pages.post.index');
    }

    public function store(Request $request){
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . $file->getClientOriginalName();
            $img = Image::make(file_get_contents($file));
            $img->save(public_path('assets/images/posts/'. $filename),30);
        }
        $slug = Str::of($request->name)->slug('-');
        Post::create([
            "name" => $request->name,
            "slug" => $slug,
            "image" => $filename,
            "body" => $request->body,
        ]);
        return back();
    }
}
