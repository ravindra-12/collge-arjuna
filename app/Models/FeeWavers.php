<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FeeWavers extends Model
{
    use HasFactory;
    protected $table = 'fee_wavers';
    protected $fillable = ['college_info_id', 'title'];

    public function collegeInfo()
    {
        return $this->belongsTo(CollegeInfo::class, 'college_info_id');
    }

}
