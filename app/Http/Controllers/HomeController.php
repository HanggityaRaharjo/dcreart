<?php

namespace App\Http\Controllers;

use App\Models\Feature;
use App\Models\Post;
use App\Models\Project;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $projects = Project::with(['project_image','project_category'])->latest()->take(3)->get();
        $testimonials = Testimonial::latest()->take(9)->get();
        $single_testimonial = Testimonial::latest()->first();
        $posts = Post::latest()->take(3)->get();
        $features= Feature::all();

        // dd($features);
        return view('pages.home.index',compact('projects','testimonials','single_testimonial','features','posts'));
    }
}
