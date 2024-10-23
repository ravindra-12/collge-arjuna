<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Connectivity extends Model
{
    use HasFactory;

    protected $fillable = ['college_info_id', 'icon', 'title', 'km' ];

    public function collegeInfo()
    {
        return $this->belongsTo(CollegeInfo::class, 'college_info_id');
    }
}

