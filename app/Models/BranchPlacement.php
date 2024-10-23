<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BranchPlacement extends Model
{
    use HasFactory;
    protected $table = 'branch_placement_';
    protected $fillable = ['college_info_id', 'branch', 'placed'];

    public function collegeInfo(){

        return $this->belongsTo(CollegeInfo::class);
        
    }
}
