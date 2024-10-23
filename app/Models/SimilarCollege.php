<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SimilarCollege extends Model
{
    use HasFactory;

    protected $table = 'similar_colleges';

    protected $fillable = ['college_info_id', 'title', 'image', 'description', 'link'];


    public function collegeInfo(){

        return $this->belongsTo(CollegeInfo::class, 'college_info_id');
    }

}
