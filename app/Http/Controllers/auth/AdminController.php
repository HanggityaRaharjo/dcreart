<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function post(){
        return view('auth.post.index');
    }
    public function testimonial(){
        return view('auth.testimonial.index');
    }
}
