<?php

namespace App\Models;

use App\Models\Project;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ProjectImage extends Model
{
    protected $guarded = ['id'];
    public function project(){
        return $this->belongsTo(Project::class,'project_id');
    }
    
}
