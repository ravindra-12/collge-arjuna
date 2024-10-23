<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Placement;

class PlacementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       $Placement = [
        [

               'college_info_id' => 19,
               'year' =>  '2012',
               'image'  => 'https://img.collegepravesh.com/2023/03/IIT-Bhubaneswar-Placement-Statistics-2023.png'
        ],
        // 2

     [

            'college_info_id' => 20,
            'year' =>  '2012',
            'image'  => 'https://img.collegepravesh.com/2023/03/IIT-Bombay-Placement-Statistics-2023.png'
     ],

    ];

    foreach( $Placement as  $Placement){

        Placement::create($Placement);

    }

    }
}
