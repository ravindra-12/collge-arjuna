<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MedianPackageOffered extends Model
{
    use HasFactory;

    protected $table = 'median_package_offered_';
    protected $fillable = ['college_info_id', 'branch', 'ctc'];

    public function collegeInfo(){

        return $this->belongsTo(CollegeInfo::class);
        
    }

}
