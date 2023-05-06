<?php

namespace App\Http\Controllers\auth;


use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Testimonial;

class TestimonialController extends Controller
{
    public function store(Request $request){
        // dd('sampe sini',$request);
        if ($request->hasFile('user_image')) {
            $name = Str::lower($request->file('user_image')->getClientOriginalName());
            $name = Str::remove(' ', $name);
            $filename = time(). '-user-' .$name;
            $request->file('user_image')->move('assets/images/testimonials/', $filename);
        }
        Testimonial::create([
            "user_name" => $request->user_name,
            "user_image" => $filename,
            "rating" => $request->rating,
            "text" => $request->text,
        ]);
        return back();
    }
}
