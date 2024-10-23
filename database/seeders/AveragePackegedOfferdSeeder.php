<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\AveragePackegeOfferd;

class AveragePackegedOfferdSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       $averagepackegedoffer = [
        [
            'college_info_id' => 19,
            'branch'  => 'Civil Engineering',
            'avgctc'  => '12.85',
        
        ],
        [
            'college_info_id' => 19,
            'branch'  => 'Computer Science and Engineering',
            'avgctc'  => '25.18',
            
        ],
        [
            'college_info_id' => 19,
            'branch'  => 'Electrical Engineering',
            'avgctc'  => '19.05',
            
        ],
        [
            'college_info_id' => 19,
            'branch'  => 'Electronics and Communication Engineering',
            'avgctc'  => '22.85',
            
        ],
        [
            'college_info_id' => 19,
            'branch'  => 'Mechanical Engineering',
            'avgctc'  => '12.57',
            
        ],
        [
            'college_info_id' => 20,
            'branch'  => 'Metallurgical and Materials Engineering',
            'avgctc'  => '13.41',
            
        ],
       
        // 2

        [
            'college_info_id' => 20,
            'branch'  => '*Average Gross Salary',
            'avgctc'  => 'Rs. 16.66 lakhs per annum',
            
        ],
        
        

];

foreach( $averagepackegedoffer as  $averagepackegedoffer){
   
    AveragePackegeOfferd::create($averagepackegedoffer);

}
    }
}
