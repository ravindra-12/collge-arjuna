<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HostelFee extends Model
{
    use HasFactory;
    protected $fillable = ['college_info_id', 'type', 'amount'];

public function collegeInfo(){

    return $this->belongsTo(CollegeInfo::class);
}

}
