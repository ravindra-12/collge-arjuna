<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Placement extends Model
{
    use HasFactory;

    protected  $table = 'placement';
    protected $fillable = ['college_info_id', 'image', 'year'];

public function collegeInfo(){

    return $this->belongsTo(CollegeInfo::class, 'college_info_id');
    
}


}
