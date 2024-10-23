<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AveragePackegeOfferd extends Model
{
    use HasFactory;

    protected $table = 'average_packege_offerd_';
    protected $fillable = ['college_info_id', 'branch', 'avgctc'];


    public function collegeInfo(){

        return $this->belongsTo(CollegeInfo::class);
    }

}
