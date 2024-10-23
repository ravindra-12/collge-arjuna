<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\MedianPackageOffered;

class MedianPackageOffere extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      
        $medianpackage = [

            [
              'college_info_id' => 19,
              'branch'  => 'Civil Engineering',
              'ctc'    =>  '10.57'
            ],
            [
                'college_info_id' => 19,
                'branch'  => 'Computer Science and Engineering',
                'ctc'    =>  '20.31'
              ],
              [
                'college_info_id' => 19,
                'branch'  => 'Electrical Engineering',
                'ctc'    =>  '15.00'
              ],
              [
                'college_info_id' => 19,
                'branch'  => 'Electronics and Communication Engineering',
                'ctc'    =>  '18.00'
              ],
              [
                'college_info_id' => 19,
                'branch'  => 'Mechanical Engineering',
                'ctc'    =>  '12.00'
              ],
              [
                'college_info_id' => 19,
                'branch'  => 'Metallurgical and Materials Engineering',
                'ctc'    =>  '12.50'
              ],

              // 2
[
                'college_info_id' => 20,
                'branch'  => 'Rs. 20.00 Lakhs per Annum',
                'ctc'    =>  ''
              ],

            ];

            foreach($medianpackage as $medianpackage){

                MedianPackageOffered::create($medianpackage);
            

            }

    }
}
