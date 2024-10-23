<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable = ['college_info_id', 'course_name', 'duration'];

    // Course belongs to a college
    public function collegeInfo()
    {
        return $this->belongsTo(CollegeInfo::class);
    }

    // Course has many branches
    public function branches()
    {
        return $this->hasMany(Branch::class);
    }
}
