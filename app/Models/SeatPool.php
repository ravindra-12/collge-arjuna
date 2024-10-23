<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SeatPool extends Model
{
    use HasFactory;

    protected $fillable = ['seatpool_name'];
    // Relationship with AdmissionCutoff
    public function admissionCutoffs()
    {
        return $this->hasMany(AdmissionCutoff::class, 'seatpoolrefid');
    }
}
