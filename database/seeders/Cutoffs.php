<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Cutoffs extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cuttoff = [
            [
                'college_info_id' => 19,
                'title' => 'Cutoff 2023',
                'link' => 'https://www.collegepravesh.com/cutoff/iit-mandi-cutoff-2023/',

            ],
            [
                'college_info_id' => 19,
                'title' => 'Cutoff 2022',
                'link' => 'https://www.collegepravesh.com/cutoff/iit-mandi-cutoff-2023/',

            ],
            [
                'college_info_id' => 19,
                'title' => 'Cutoff 2021',
                'link' => 'https://www.collegepravesh.com/cutoff/iit-mandi-cutoff-2023/',

            ]
            ];
            foreach(  $cuttoff as   $cuttoff){

                \App\Models\Cutoff::create($cuttoff);
            }
    }

}
