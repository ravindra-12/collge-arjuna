<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdmissionCutoff extends Model
{
    use HasFactory;

    protected $fillable = ['round', 'branch', 'opening', 'closing', 'ref_student_category_id', 'seatpoolrefid' ];
    // Relationship with StudentCategory
    public function studentCategory()
    {
        return $this->belongsTo(StudentCategory::class, 'ref_student_category_id');
    }

    // Relationship with SeatPool
    public function seatPool()
    {
        return $this->belongsTo(SeatPool::class, 'seatpoolrefid');
    }
}
