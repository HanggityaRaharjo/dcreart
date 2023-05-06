<?php

namespace App\Http\Controllers\auth;

use App\Models\Feature;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
// use Intervention\Image\Image;
use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;


class FeatureController extends Controller
{
    public function index(){
        return view('pages.features.index');
    }

    public function store(Request $request){
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . $file->getClientOriginalName();
            $img = Image::make(file_get_contents($file));
            $img->save(public_path('assets/images/features/'. $filename),30);
        }
        Feature::create([
            "feature_name" => $request->feature_name,
            "image" => $filename,
        ]);
        return back();
    }

    public function update(Request $request,$id){
        $feature = Feature::where('id',$id)->first();
        if ($request->hasFile('image')) {
            $name = Str::lower($request->file('image')->getClientOriginalName());
            $name = Str::remove(' ', $name);
            $filename = time(). $name;
            $request->file('image')->move('assets/images/features/', $filename);
        }
        Feature::create([
            "feature_name" => $request->feature_name,
            "image" => $filename,
        ]);
        return back();
    }
}
