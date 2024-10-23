<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\SimilarCollege;

class SimilarColleges extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $similarcolleges = [

            [
                'college_info_id' => 19,
                'title' => 'IIT Hyderabad',
                'image' => 'https://img.collegepravesh.com/2013/06/IIT-HYDERABAD-LOGO.png',
                'description' => 'Hyderabad, Telangana',
                'link'  => ''
            ],
            [
                'college_info_id' => 19,
                'title' => 'IIT Jammu',
                'image' => 'https://img.collegepravesh.com/2016/06/IIT-Jammu-Logo.png',
                'description' => 'Jammu, Jammu and Kashmir',
                'link'  => ''
            ],
            [
                'college_info_id' => 19,
                'title' => 'IIT Dharwad',
                'image' => 'https://img.collegepravesh.com/2018/04/IIT-Dharwad-Logo.png',
                'description' => 'Dharwad, Karnataka',
                'link'  => ''
            ],
            [
                'college_info_id' => 19,
                'title' => 'IIT Guwahati',
                'image' => 'https://img.collegepravesh.com/2015/02/IIT-Guwahati-Logo.png',
                'description' => 'Guwahati, Assam',
                'link'  => ''
            ],


            // 2

            [
                'college_info_id' => 20,
                'title' => 'IIT Tirupati',
                'image' => 'https://img.collegepravesh.com/2015/10/IIT-Tirupati-Logo.jpg',
                'description' => 'Tirupati, Andhra Pradesh',
                'link'  => ''
            ],
            [
                'college_info_id' => 20,
                'title' => 'IIT Guwahati',
                'image' => 'https://img.collegepravesh.com/2015/02/IIT-Guwahati-Logo.png',
                'description' => 'Guwahati, Assam',
                'link'  => ''
            ],
            [
                'college_info_id' => 20,
                'title' => 'IIT Delhi',
                'image' => 'https://img.collegepravesh.com/2018/08/IIT-Delhi-Logo.png',
                'description' => 'New Delhi, Delhi',
                'link'  => ''
            ],
            [
                'college_info_id' => 20,
                'title' => 'IIT (ISM) Dhanbad',
                'image' => 'https://img.collegepravesh.com/2015/09/IITISM-Logo.jpg',
                'description' => 'Dhanbad, Jharkhand',
                'link'  => ''
            ],

            ];


            foreach($similarcolleges as $similarcolleges){

                SimilarCollege::create($similarcolleges) ;  
            }
    }
}
