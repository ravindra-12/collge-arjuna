<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CollegePdf extends Model
{
    use HasFactory;

    protected $fillable = ['college_info_id', 'pdf_path'];

    public function collegeInfo()
    {
        return $this->belongsTo(CollegeInfo::class);
    }
}