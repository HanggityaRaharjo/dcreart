<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\ProjectCategory;
use App\Models\ProjectImage;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class ProjectController extends Controller
{
    public function interior(){
        $projects = Project::where('type_project','interior')->with('project_image')->take(5)->get();
        $categories = ProjectCategory::all();
        return view('pages.project.interior',compact('projects','categories'));
    }
    
    public function exterior(){
        return view('pages.project.exterior');
    }

    public function index(){
        return view('pages.project.index');
    }
    
    public function show($slug)
    {
        $project = Project::where('slug',$slug)->with('project_image')->first();
        return view('pages.project.show',compact('project'));
    }

    public function create(){
        return view('pages.project.create');
    }

    public function store(Request $request){
        // dd(count($request->file('images')));
        $project = Project::create([
            "name" => $request->name,
            "slug" => Str::of($request->name)->slug('-'),
            "type_project" => $request->type_project,
            "category_id" => $request->category_id,
            "land_length" => $request->land_length,
            "land_width" => $request->land_width,
            "total_bedroom" => $request->total_bedroom,
            "total_powder_room" => $request->total_powder_room,
            "total_maid_room" => $request->total_maid_room,
            "cars_acomodated" => $request->cars_acomodated,
            "total_floor" => $request->total_floor,
            "description" => $request->description,
        ]);
        // dd($project);
        if ($request->hasFile('images')) {
            for ($i=0; $i < count($request->file('images')) ; $i++) { 
                $file = $request->file('images')[$i];
                $filename = time() . $file->getClientOriginalName();
                $img = Image::make(file_get_contents($file));
                $img->save(public_path('assets/images/project-images/'. $filename),30);
                ProjectImage::create(["project_id"=>$project->id,"file"=>$filename]);
            }
        }

        return back();
    }


}
