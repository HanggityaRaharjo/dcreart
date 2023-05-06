<?php

namespace App\Http\Controllers\auth\api;

use App\Http\Controllers\Controller;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class TestimonialApiController extends Controller
{
    public function get_all_testimonials(){
        $testimonials = Testimonial::latest()->get();
        return response($testimonials,200);
    }
    
    public function delete_testimonials($id){
        $file = Testimonial::where('id',$id)->first()->image;
        if (File::exists(public_path("assets/images/testimonials/".$file))) {
            File::delete(public_path("assets/images/testimonials/".$file));
        }
        Testimonial::find($id)->delete();
        return response($file,200);
    }
}
