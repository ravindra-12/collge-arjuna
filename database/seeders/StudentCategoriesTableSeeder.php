<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\StudentCategory;

class StudentCategoriesTableSeeder extends Seeder
{
    public function run()
    {
        StudentCategory::create(['id' => 1, 'category_name' => 'General']);
        StudentCategory::create(['id' => 2, 'category_name' => 'OBC']);
        StudentCategory::create(['id' => 3, 'category_name' => 'SC']);
        StudentCategory::create(['id' => 4, 'category_name' => 'ST']);
    }
}
