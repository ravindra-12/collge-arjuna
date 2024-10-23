<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\CollegeInfo;
use App\Models\Fee;

class FeeSeeder extends Seeder
{
    public function run()
    {
        $fees = [
            [
                'college_info_id' => 19,
                'type' => 'Caution Money (One Time, Refundable)',
                'amount' => '₹5,000'
            ],
            [
                'college_info_id' => 19,
                'type' => 'One Time Fees',
                'amount' => '₹3,900'
            ],
            [
                'college_info_id' => 19,
                'type' => 'Tuition Fee (per Semester)',
                'amount' => '₹1,00,000'
            ],
            [
                'college_info_id' => 19,
                'type' => 'Other fees (per Semester)',
                'amount' => '₹4,500'
            ],
            [
                'college_info_id' => 19,
                'type' => 'Annual Fees',
                'amount' => '₹2,390'
            ],
            [
                'college_info_id' => 19,
                'type' => 'Total',
                'amount' => '₹1,15,790'
            ],
            
            // Add more fee entries for other colleges


// 2
[
    'college_info_id' => 20,
    'type' => 'Caution Money (One Time, Refundable)',
    'amount' => '₹2,000'
],
[
    'college_info_id' => 20,
    'type' => 'One Time Fees',
    'amount' => '₹7,600'
],
[
    'college_info_id' => 20,
    'type' => 'Tuition Fee (per Semester)',
    'amount' => '₹1,00,000'
],
[
    'college_info_id' => 20,
    'type' => 'Other fees (per Semester)',
    'amount' => '₹4,450'
],
[
    'college_info_id' => 20,
    'type' => 'Total',
    'amount' => '₹1,14,050'
],

            // 
        ];

        foreach ($fees as $fee) {
            Fee::create($fee);
        }
    }
}
