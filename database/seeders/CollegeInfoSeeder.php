<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\CollegeInfo;
class CollegeInfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $colleges = [
            
            [
                'title' => 'Indian Institute of Technology, Bhubaneswar',
                'image' => 'https://img.collegepravesh.com/2016/06/IIT-Bhubaneswar-Logo.png',
                'description' => 'Indian Institute of Technology, Argul Campus, Jatani, Khordha, Bhubaneswar, Odisha - 752050',
                // 'also_known_as' => 'IIT BBS',
                'institute_name' => 'Indian Institute of Technology, Bhubaneswar',
                'also_known_as' => 'IIT BBS',
                'institute_type' => 'Government',
                 'established' => '2008',
                'location' => 'Bhubaneswar, Odisha',
                'websitetitle'  => 'Visit IIT Bhubaneswar Website',
                'websitelink'  =>   'http://www.iitbbs.ac.in/'
            ],

            // 

            [
                'title' => 'Indian Institute of Technology, Bombay',
                'image' => 'https://img.collegepravesh.com/2015/09/IIT-Bombay-Logo.png',
                'description' => 'Indian Institute of Technology, Powai, Mumbai, Maharashtra - 400076, Bhubaneswar, Odisha - 752050',
                // 'alsoknownastitle' => ' IITB, IIT Bombay and IIT Mumbai.',
                'institute_name' => 'Indian Institute of Technology, Bombay',
                'also_known_as' => 'IITB',
                'institute_type' => 'Government',
                 'established' => '1958',
                'location' => 'Mumbai, Maharashtra',
                'websitetitle'  => 'Visit IIT Bombay Website',
                'websitelink'  =>   'https://www.iitb.ac.in/'
            ],
            
            // ... add other entries here
        ];

        foreach ($colleges as $college) {
            CollegeInfo::create($college);
        }
    }
}
