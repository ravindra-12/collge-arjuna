<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExploreMoreCollege extends Model
{
    use HasFactory;

protected $table = 'explore_more_colleges';
protected $fillable = ['college_info_id', 'title', 'link', 'image'];


public function collegeInfo(){

return $thisbelongsTo(CollegeInfo::class);

}

}
