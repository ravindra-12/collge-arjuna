<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ExploreMoreCollege;
class ExploreMoreColleges extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $exploremorecolleges = [

            [
                'college_info_id' => 19,
                'title' => 'MU Jaipur – Info, Ranking, Cutoff & Placements 2024',
                'image' => 'https://img.collegepravesh.com/2024/05/MU-Jaipur-310x165.jpg',
                'link'  => ''
            ],
            [
                'college_info_id' => 19,
                'title' => 'BPIT Delhi – Info, Ranking, Cutoff & Placements 2024',
                'image' => 'https://img.collegepravesh.com/2017/02/BPIT-Delhi-310x165.jpg',
                'link'  => ''
            ],
            [
                'college_info_id' => 19,
                'title' => 'MSIT Delhi – Info, Ranking, Cutoff & Placements 2024',
                'image' => 'https://img.collegepravesh.com/2017/02/MSIT-Delhi-310x165.jpg',
                'link'  => ''
            ],



            // 2

            [
                'college_info_id' => 20,
                'title' => 'MU Jaipur – Info, Ranking, Cutoff & Placements 2024',
                'image' => 'https://img.collegepravesh.com/2024/05/MU-Jaipur-310x165.jpg',
                'link'  => ''
            ],
            [
                'college_info_id' => 20,
                'title' => 'BPIT Delhi – Info, Ranking, Cutoff & Placements 2024',
                'image' => 'https://img.collegepravesh.com/2017/02/BPIT-Delhi-310x165.jpg',
                'link'  => ''
            ],
            [
                'college_info_id' => 20,
                'title' => 'MSIT Delhi – Info, Ranking, Cutoff & Placements 2024',
                'image' => 'https://img.collegepravesh.com/2017/02/MSIT-Delhi-310x165.jpg',
                'link'  => ''
            ],
          
            ];


            foreach($exploremorecolleges as $exploremorecolleges){

                ExploreMoreCollege::create($exploremorecolleges) ;  
            }
    }
}
