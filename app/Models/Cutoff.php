<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cutoff extends Model
{
    use HasFactory;

    protected $table = 'cutoffs';
    protected $fillable = ['college_info_id', 'title', 'link'];


    public function collegeInfo(){
        return $this->belongsTo(CollegeInfo::class, 'college_info_id');
    }
    
}
