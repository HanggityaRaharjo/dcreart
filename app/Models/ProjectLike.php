<?php

namespace App\Models;

use App\Models\Project;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ProjectLike extends Model
{
    public function project_like(){
        return $this->belongsTo(Project::class,'project_id');
    }
}
