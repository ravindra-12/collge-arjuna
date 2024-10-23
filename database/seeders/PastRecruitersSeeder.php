<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\PastRecruiter;

class PastRecruitersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      
        $pastrecuirter = [
            [
                'college_info_id' => 19,
                'title' =>   'Aakash Institute'
            ],
            [
                'college_info_id' => 19,
                'title' =>   'Accenture'
            ],
            [
                'college_info_id' => 19,
                'title' =>   'Adobe'
            ],
            [
                'college_info_id' => 19,
                'title' =>   'Affine Analytics'
            ],
            [
                'college_info_id' => 19,
                'title' =>   'Aindra'
            ],
            [
                'college_info_id' => 19,
                'title' =>   'Airvana'
            ],
            [
                'college_info_id' => 19,
                'title' =>   'Altair'
            ],
            [
                'college_info_id' => 19,
                'title' =>   'Altair Engineering'
            ],
            [
                'college_info_id' => 19,
                'title' =>   'Amazon'
            ],
            [
                'college_info_id' => 19,
                'title' =>   'Asteria Aerospace'
            ],
            [
                'college_info_id' => 19,
                'title' =>   'Avanti Learning Centre'
            ],
            [
                'college_info_id' => 19,
                'title' =>   'AVTEC'
            ],
            [
                'college_info_id' => 19,
                'title' =>   'Axiom Research Labs'
            ],
            [
                'college_info_id' => 19,
                'title' =>   'Axiom Bharat Seats Labs'
            ],
            [
                'college_info_id' => 19,
                'title' =>   'BPCL'
            ],
            [
                'college_info_id' => 19,
                'title' =>   'BSEC'
            ],
            [
                'college_info_id' => 19,
                'title' =>   'Capgemini'
            ],
            [
                'college_info_id' => 19,
                'title' =>   'CEWIT'
            ],
            [
                'college_info_id' => 19,
                'title' =>   'Coal India'
            ],
            [
                'college_info_id' => 19,
                'title' =>   'CEWIT'
            ],
            

            // 2
            [
                'college_info_id' => 20,
                'title' =>   'Amazon'
            ],
            [
                'college_info_id' => 20,
                'title' =>   'Asteria Aerospace'
            ],
            [
                'college_info_id' => 20,
                'title' =>   'Avanti Learning Centre'
            ],
            [
                'college_info_id' => 20,
                'title' =>   'AVTEC'
            ],
            [
                'college_info_id' => 20,
                'title' =>   'Axiom Research Labs'
            ],
            [
                'college_info_id' => 20,
                'title' =>   'Axiom Bharat Seats Labs'
            ],
            [
                'college_info_id' => 20,
                'title' =>   'BPCL'
            ],
            
            ];
    
            foreach( $pastrecuirter as  $pastrecuirter){
                PastRecruiter::create( $pastrecuirter);
               
            }


    }
}
