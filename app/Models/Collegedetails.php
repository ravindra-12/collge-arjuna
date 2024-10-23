<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Collegedetails extends Model
{
    use HasFactory;
    protected $table = 'college_details';

    // Specify the fillable properties
    protected $fillable = ['title',  'image', 'description'];
}
