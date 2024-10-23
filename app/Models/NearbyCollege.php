<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NearbyCollege extends Model
{
    use HasFactory;

    protected $table = 'nearby_colleges';
    protected $fillable = ['college_info_id', 'image', 'title', 'description'];


 public function collegeInfo(){

  return $this->belongsTo(CollegeInfo::class);

    }

}
