<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\TopRecruiter;

class TopRecruitersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       $toprecuirter = [

        // 1
        [
            'college_info_id' => 19,
            'title' =>   'AIRA Matrix'
        ],
        [
            'college_info_id' => 19,
            'title' =>   'Amazon'
        ],
        [
            'college_info_id' => 19,
            'title' =>   'Analog Devices'
        ],
        [
            'college_info_id' => 19,
            'title' =>   'Applied Materials'
        ],
        [
            'college_info_id' => 19,
            'title' =>   'ARM'
        ],
        [
            'college_info_id' => 19,
            'title' =>   'BEL'
        ],
        [
            'college_info_id' => 19,
            'title' =>   'C-DAC'
        ],
        [
            'college_info_id' => 19,
            'title' =>   'C-DAC'
        ],
        [
            'college_info_id' => 19,
            'title' =>   'Caterpillar'
        ],
        [
            'college_info_id' => 19,
            'title' =>   'Ceremorphic'
        ],
        [
            'college_info_id' => 19,
            'title' =>   'D.E. Shaw'
        ],
        [
            'college_info_id' => 19,
            'title' =>   'Flipkart'
        ],
        [
            'college_info_id' => 19,
            'title' =>   'GAIL'
        ],
        [
            'college_info_id' => 19,
            'title' =>   'Goldman Sachs'
        ],
        [
            'college_info_id' => 19,
            'title' =>   'Google'
        ],
        [
            'college_info_id' => 19,
            'title' =>   'Jaguar Land Rover'
        ],
        [
            'college_info_id' => 19,
            'title' =>   'JSW'
        ],


        // 2
        [
            'college_info_id' => 20,
            'title' =>   'Flipkart'
        ],
        [
            'college_info_id' => 20,
            'title' =>   'GAIL'
        ],
        [
            'college_info_id' => 20,
            'title' =>   'Goldman Sachs'
        ],
        [
            'college_info_id' => 20,
            'title' =>   'Google'
        ],
        [
            'college_info_id' => 20,
            'title' =>   'Jaguar Land Rover'
        ],
        [
            'college_info_id' => 20,
            'title' =>   'Applied Materials'
        ],
        [
            'college_info_id' => 20,
            'title' =>   'ARM'
        ],
        [
            'college_info_id' => 20,
            'title' =>   'BEL'
        ],
        [
            'college_info_id' => 20,
            'title' =>   'C-DAC'
        ],
       
        [
            'college_info_id' => 20,
            'title' =>   'Caterpillar'
        ],
        [
            'college_info_id' => 20,
            'title' =>   'Ceremorphic'
        ],

        ];

        foreach( $toprecuirter as  $toprecuirter){
            TopRecruiter::create( $toprecuirter);
           
        }

    }
}
