<?php

namespace App\Http\Controllers\auth\api;

use App\Models\Project;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\ProjectImage;

class ProjectApiController extends Controller
{
    public function show($id){
        $project = Project::where('id',$id)->first();
        return response($project);
    }

    public function get_all_projects(){
        $projects = Project::with('project_image')->latest()->paginate(10);
        return response()->json($projects);
    }

    public function store_like(Request $request,$id){
        return response()->json(["msg"=>$request]);
    }
}
