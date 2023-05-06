<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VirtualController extends Controller
{
    public function index(){
        return view('auth.virtual.index');
    }
}
