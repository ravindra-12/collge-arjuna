<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\HostelFee;
class HostelFeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $hostelfees = [
            
            // Add more fee entries for other colleges


            // 6 data
            [
                'college_info_id' => 19,
                'type' => 'Hostel Caution Money (One Time, Refundable)',
                'amount' => '₹4,000'
            ],
            [
                'college_info_id' => 19,
                'type' => 'Mess Caution Money (One Time, Refundable)',
                'amount' => '₹3,000'
            ],
            [
                'college_info_id' => 19,
                'type' => 'One Time Fees',
                'amount' => '₹2,000'
            ],
            [
                'college_info_id' => 19,
                'type' => 'Hostel Seat Rent (per Semester)',
                'amount' => '₹500'
            ],
            [
                'college_info_id' => 19,
                'type' => 'Electricity & Water charges (per Semester)',
                'amount' => '₹1,500'
            ],
            [
                'college_info_id' => 19,
                'type' => 'Other fees (per Semester)',
                'amount' => '₹8,500'
            ],
            [
                'college_info_id' => 19,
                'type' => 'Mess Advance (per Semester)',
                'amount' => '₹14,000'
            ],
            [
                'college_info_id' => 19,
                'type' => 'Total',
                'amount' => '₹33,500'
            ],
            
// 2

[
    'college_info_id' => 20,
    'type' => 'Mess Caution Money (One Time, Refundable)',
    'amount' => '₹1,000'
],
[
    'college_info_id' => 20,
    'type' => 'Hostel Seat Rent (per Semester)',
    'amount' => '₹2,000'
],
[
    'college_info_id' => 20,
    'type' => 'Electricity & Water charges (per Semester)',
    'amount' => '₹3,000'
],
[
    'college_info_id' => 20,
    'type' => 'Other fees (per Semester)',
    'amount' => '₹4,550'
],
[
    'college_info_id' => 20,
    'type' => 'Mess Advance (per Semester)',
    'amount' => '₹22,000'
],
[
    'college_info_id' => 20,
    'type' => 'Total',
    'amount' => '₹32,550'
],
        ];

        foreach ($hostelfees as $hostelfees) {
            HostelFee::create($hostelfees);
        }
    }
}
