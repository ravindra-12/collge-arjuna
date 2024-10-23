<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admissionmode extends Model
{
    use HasFactory;

    protected $table = 'admissionmodes';

    protected $fillable = [
'admissionmode', 'college_info_id'
    ];

 public function collegeInfo(){
    return $this->belongsTo(CollegeInfo::class, 'college_info_id');
 }
  

    }



