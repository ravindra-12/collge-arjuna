<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\CollegeInfo;
use App\Models\Connectivity;

class ConnectivitySeeder extends Seeder
{
    public function run()
    {
        $connectivities = 
            [
              
                    [
                        'college_info_id' => 19, 
                        'icon' => 'https://cdn-icons-png.flaticon.com/128/0/614.png',
                        'title' => 'Biju Patnaik International Airport, Bhubaneswar',
                        'km' => '26 km'
                    ],
                    [
                        'college_info_id' => 19,
                        'icon' => 'https://cdn-icons-png.flaticon.com/128/0/614.png',
                        'title' => 'Khurda Road Junction',
                        'km' => '6 km'
                    ],
            
                    [
                        'college_info_id' => 19,
                        'icon' => 'https://cdn-icons-png.flaticon.com/128/0/614.png',
                        'title' => 'Bhubaneswar Railway Station',
                        'km' => '28 km'
                    ],
                
            // 2

            [
                'college_info_id' => 20,
                'icon' => 'https://cdn-icons-png.flaticon.com/128/0/614.png',
                'title' => 'Chhatrapati Shivaji Maharaj International Airport, Mumbai',
                'km' => '9 km'
            ],
            [
                'college_info_id' => 20,
                'icon' => 'https://cdn-icons-png.flaticon.com/128/0/614.png',
                'title' => 'Kanjurmarg Railway Station',
                'km' => '4 km'
            ],
            [
                'college_info_id' => 20,
                'icon' => 'https://cdn-icons-png.flaticon.com/128/0/614.png',
                'title' => 'Mumbai Central Railway Station',
                'km' => '27 km'
            ],
            [
                'college_info_id' => 20,
                'icon' => 'https://cdn-icons-png.flaticon.com/128/0/614.png',
                'title' => 'Chhatrapati Shivaji Terminus',
                'km' => '30 km'
            ],
        


            // Add more connectivity data similarly
        ];

        foreach ($connectivities as $collegeData) {
          Connectivity::create($collegeData);
        }
    }
}
