<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $category = [

            // 1
            [
                'CategoryID' => 1,
                'CategoryName' =>   'Schoolarship'
            ],
            [
                'CategoryID' => 2,
                'CategoryName' =>   'Exams'
            ],
           
    
            ];
    
            foreach( $category as  $category){
                Category::create( $category);
               
            }
    }
}
