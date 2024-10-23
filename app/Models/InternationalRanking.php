<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InternationalRanking extends Model
{
    use HasFactory;

    protected $fillable = ['college_info_id', 'category', 'latest_ranking', 'previous_ranking'];

    public function collegeInfo()
    {
        return $this->belongsTo(CollegeInfo::class);
    }
}
