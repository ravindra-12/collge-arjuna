<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\NearbyCollege;

class NearbyColleges extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

$nearbycolleges = [

    [
        'college_info_id' => 19,
        'title'  => 'NISER Bhubaneswar',
        'description'    =>  'Bhubaneswar, Odisha',
        'image'    =>  'https://img.collegepravesh.com/2013/06/NIT-Hamirpur-Logo.jpg'
       
      ],
      [
        'college_info_id' => 19,
        'title'  => 'IIIT Bhubaneswar',
        'description'    =>  'Bhubaneswar, Odisha',
        'image'    =>  'https://img.collegepravesh.com/2016/05/IIIT_Bhubaneswar_Logo.png'
       
      ],

      [
        'college_info_id' => 19,
        'title'  => 'IIIT Bhubaneswar',
        'description'    =>  'Bhubaneswar, Odisha',
        'image'    =>  'https://img.collegepravesh.com/2016/05/IIIT_Bhubaneswar_Logo.png'
       
      ],
      [
        'college_info_id' => 19,
        'title'  => 'ICT-IOC Bhubaneswar',
        'description'    =>  'Bhubaneswar, Odisha',
        'image'    =>  'https://img.collegepravesh.com/2018/05/ICT-Mumbai-Logo.png'
       
      ],
      [
        'college_info_id' => 19,
        'title'  => 'IISER Berhampur',
        'description'    =>  'Berhampur, Odisha',
        'image'    =>  'https://img.collegepravesh.com/2016/02/IISER-Berhampur-Logo.png'
       
      ],

   // 2

   [
    'college_info_id' => 20,
    'title'  => 'ICT Mumbai',
    'description'    =>  'Mumbai, Maharashtra',
    'image'    =>  'https://img.collegepravesh.com/2018/05/ICT-Mumbai-Logo.png'
   
  ],
  [
    'college_info_id' => 20,
    'title'  => 'SPCE Mumbai',
    'description'    =>  'Mumbai, Maharashtra',
    'image'    =>  'https://img.collegepravesh.com/2017/05/SPCE-Mumbai-Logo.png'
   
  ],
  [
    'college_info_id' => 20,
    'title'  => 'KJSCE Mumbai',
    'description'    =>  'Mumbai, Maharashtra',
    'image'    =>  'https://img.collegepravesh.com/2018/11/KJSCE-Somaiya-Logo.png'
   
  ],
  [
    'college_info_id' => 20,
    'title'  => 'SPIT Mumbai',
    'description'    =>  'Mumbai, Maharashtra',
    'image'    =>  'https://img.collegepravesh.com/2018/11/SPIT-Mumbai-Logo.png'
   
  ],

    ];


foreach($nearbycolleges as $nearbycolleges){

    NearbyCollege::create($nearbycolleges);

}

    }
}
