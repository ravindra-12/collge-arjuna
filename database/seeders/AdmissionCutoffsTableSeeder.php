<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\AdmissionCutoff;

class AdmissionCutoffsTableSeeder extends Seeder
{
    public function run()
    {
        // Round 1
        AdmissionCutoff::create([
            'round' => 1,
            'branch' => 'Computer Science',
            'opening' => 100,
            'closing' => 200,
            'ref_student_category_id' => 1, 
            'seatpoolrefid' => 1
        ]);

        AdmissionCutoff::create([
            'round' => 1,
            'branch' => 'Mechanical Engineering',
            'opening' => 150,
            'closing' => 300,
            'ref_student_category_id' => 2,
            'seatpoolrefid' => 2
        ]);

        AdmissionCutoff::create([
            'round' => 1,
            'branch' => 'Electrical Engineering',
            'opening' => 80,
            'closing' => 220,
            'ref_student_category_id' => 1,
            'seatpoolrefid' => 3
        ]);

        AdmissionCutoff::create([
            'round' => 1,
            'branch' => 'Civil Engineering',
            'opening' => 120,
            'closing' => 250,
            'ref_student_category_id' => 2,
            'seatpoolrefid' => 1
        ]);

        // Round 2
        AdmissionCutoff::create([
            'round' => 2,
            'branch' => 'Computer Science',
            'opening' => 110,
            'closing' => 210,
            'ref_student_category_id' => 1,
            'seatpoolrefid' => 1
        ]);

        AdmissionCutoff::create([
            'round' => 2,
            'branch' => 'Mechanical Engineering',
            'opening' => 160,
            'closing' => 320,
            'ref_student_category_id' => 2,
            'seatpoolrefid' => 2
        ]);

        AdmissionCutoff::create([
            'round' => 2,
            'branch' => 'Electrical Engineering',
            'opening' => 90,
            'closing' => 230,
            'ref_student_category_id' => 1,
            'seatpoolrefid' => 3
        ]);

        AdmissionCutoff::create([
            'round' => 2,
            'branch' => 'Civil Engineering',
            'opening' => 130,
            'closing' => 260,
            'ref_student_category_id' => 2,
            'seatpoolrefid' => 1
        ]);

        // Round 3
        AdmissionCutoff::create([
            'round' => 3,
            'branch' => 'Computer Science',
            'opening' => 120,
            'closing' => 220,
            'ref_student_category_id' => 1,
            'seatpoolrefid' => 1
        ]);

        AdmissionCutoff::create([
            'round' => 3,
            'branch' => 'Mechanical Engineering',
            'opening' => 170,
            'closing' => 340,
            'ref_student_category_id' => 2,
            'seatpoolrefid' => 2
        ]);

        AdmissionCutoff::create([
            'round' => 3,
            'branch' => 'Electrical Engineering',
            'opening' => 100,
            'closing' => 240,
            'ref_student_category_id' => 1,
            'seatpoolrefid' => 3
        ]);

        AdmissionCutoff::create([
            'round' => 3,
            'branch' => 'Civil Engineering',
            'opening' => 140,
            'closing' => 270,
            'ref_student_category_id' => 2,
            'seatpoolrefid' => 1
        ]);

        // Round 4
        AdmissionCutoff::create([
            'round' => 4,
            'branch' => 'Computer Science',
            'opening' => 130,
            'closing' => 230,
            'ref_student_category_id' => 1,
            'seatpoolrefid' => 1
        ]);

        AdmissionCutoff::create([
            'round' => 4,
            'branch' => 'Mechanical Engineering',
            'opening' => 180,
            'closing' => 360,
            'ref_student_category_id' => 2,
            'seatpoolrefid' => 2
        ]);

        AdmissionCutoff::create([
            'round' => 4,
            'branch' => 'Electrical Engineering',
            'opening' => 110,
            'closing' => 250,
            'ref_student_category_id' => 1,
            'seatpoolrefid' => 3
        ]);

        AdmissionCutoff::create([
            'round' => 4,
            'branch' => 'Civil Engineering',
            'opening' => 150,
            'closing' => 280,
            'ref_student_category_id' => 2,
            'seatpoolrefid' => 1
        ]);

        // Additional data for diversity
        AdmissionCutoff::create([
            'round' => 1,
            'branch' => 'Information Technology',
            'opening' => 140,
            'closing' => 240,
            'ref_student_category_id' => 2,
            'seatpoolrefid' => 2
        ]);

        AdmissionCutoff::create([
            'round' => 2,
            'branch' => 'Electronics & Communication',
            'opening' => 160,
            'closing' => 260,
            'ref_student_category_id' => 1,
            'seatpoolrefid' => 2
        ]);

        AdmissionCutoff::create([
            'round' => 3,
            'branch' => 'Biotechnology',
            'opening' => 180,
            'closing' => 280,
            'ref_student_category_id' => 1,
            'seatpoolrefid' => 2
        ]);

     
    }
}

