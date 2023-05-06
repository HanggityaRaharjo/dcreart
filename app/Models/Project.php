<?php

namespace App\Models;

use App\Models\ProjectCategory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Project extends Model
{
    protected $guarded = ['id'];
    
    public function project_category(){
        return $this->belongsTo(ProjectCategory::class,'category_id');
    }
    public function project_image(){
        return $this->hasMany(ProjectImage::class,'project_id');
    }
}
