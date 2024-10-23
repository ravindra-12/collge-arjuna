<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TopRecruiter extends Model
{
    use HasFactory;

    protected $table = 'top_recruiters_';
    protected $fillable = ['college_info_id', 'title'];



    public function collegeInfo(){

        return $this->belongsTo(CollegeInfo::class);

    }

}
