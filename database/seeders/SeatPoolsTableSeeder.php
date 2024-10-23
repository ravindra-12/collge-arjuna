<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\SeatPool;

class SeatPoolsTableSeeder extends Seeder
{
    public function run()
    {
        SeatPool::create(['id' => 1, 'seatpool_name' => 'Female']);
        SeatPool::create(['id' => 2, 'seatpool_name' => 'Gender Neutral']);
        SeatPool::create(['id' => 3, 'seatpool_name' => 'Both']);
        
    }
}