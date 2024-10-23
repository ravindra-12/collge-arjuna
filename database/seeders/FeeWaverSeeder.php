<?php

namespace Database\Seeders;
use App\Models\FeeWavers;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FeeWaverSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $FeeWavers = [
            [
                'college_info_id' => 19,
                'title' => '100% Tuition Fee waiver for SC/ST/PH students.'
            ],
            [
                'college_info_id' => 19,
                'title' => 'Full remission of the Tuition Fee for General and OBC students whose family income is less than Rs.1 lakh per annum.'
            ],
            [
                'college_info_id' => 19,
                'title' => 'Remission of 2/3rd of the Tuition Fee for General and OBC students whose family income is between Rs.1 lakh to Rs.5 lakh per annum.'
            ],


            // 2

            [
                'college_info_id' => 20,
                'title' => '100% Tuition Fee waiver for SC/ST/PH students.'
            ],
            [
                'college_info_id' => 20,
                'title' => 'Full remission of the Tuition Fee for General and OBC students whose family income is less than Rs.1 lakh per annum.'
            ],
            [
                'college_info_id' => 20,
                'title' => 'Remission of 2/3rd of the Tuition Fee for General and OBC students whose family income is between Rs.1 lakh to Rs.5 lakh per annum.'
            ],
            
        ];

      foreach ($FeeWavers as $FeeWavers) {
        FeeWavers::create($FeeWavers);
      }
    }
}
