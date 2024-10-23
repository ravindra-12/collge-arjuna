<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentCategory extends Model
{
    use HasFactory;

    protected $fillable = ['category_name'];

    // Relationship with AdmissionCutoff
    
    public function admissionCutoffs()
    {
        return $this->hasMany(AdmissionCutoff::class, 'ref_student_category_id');
    }
}
