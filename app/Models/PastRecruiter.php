<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PastRecruiter extends Model
{
    use HasFactory;

    protected $table = 'past_recruiters_';
    protected $fillable = ['college_info_id', 'title'];

public function collegeInfo(){

    return $this->belongsTo(CollegeInfo::class);
    
}
}
