<?php

namespace App\Http\Controllers\auth\api;

use App\Http\Controllers\Controller;
use App\Models\Feature;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class FeatureApiController extends Controller
{
    public function get_all_features(){
        $features = Feature::latest()->get();
        return response($features,200);
    }

    public function get_feature_by_id($id){
        $feature = Feature::where('id',$id)->first();
        return response($feature,200);
    }


    public function delete_features($id){
        $file = Feature::where('id',$id)->first()->image;
        if (File::exists(public_path("assets/images/features/".$file))) {
            File::delete(public_path("assets/images/features/".$file));
        }
        Feature::find($id)->delete();
        return response($file,200);
    }
}
