<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Collegedetails;
class CollegeDetailsSeedrs extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      $collegedetails = [
        [
'image' =>  ' https://img.collegepravesh.com/2016/06/IIT-Bhubaneswar-Logo.png',
'title' =>  'Indian Institute of Technology, Bhubaneswar',
'description' =>  'ndian Institute of Technology, Argul Campus, Jatani, Khordha, Bhubaneswar, Odisha - 752050'

        ],

      ];
        
        foreach ($collegedetails as $collegedetail) {
            CollegeDetails::create($collegedetail);
        }
    }
}
