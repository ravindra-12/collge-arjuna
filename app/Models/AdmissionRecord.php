<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdmissionRecord extends Model
{
    use HasFactory;

    protected $fillable = [
        'year', 
        'round', 
        'branch', 
        'opening', 
        'closing', 
        'student_category', 
        'seat_pool',
        'quota', 
        'college_id'  // Add college_id to fillable fields
    ];

    public function college()
    {
        return $this->belongsTo(CollegeInfo::class);
    }

}
