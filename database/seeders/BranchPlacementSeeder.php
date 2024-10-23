<?php

namespace Database\Seeders;

use App\Models\BranchPlacement;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BranchPlacementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       $branchplacement = [
[
    'college_info_id' => 19,
    'branch'  => 'Civil Engineering',
    'placed'  => '68.57%',

],
[
    'college_info_id' => 19,
    'branch'  => 'Computer Science and Engineering',
    'placed'  => '96.72%',
    
],
[
    'college_info_id' => 19,
    'branch'  => 'Electrical Engineering',
    'placed'  => '85.25%',
    
],
[
    'college_info_id' => 19,
    'branch'  => 'Electronics and Communication Engineering',
    'placed'  => '85.25%',
    
],
[
    'college_info_id' => 19,
    'branch'  => 'Electronics and Communication Engineering',
    'placed'  => '86.96%',
    
],
[
    'college_info_id' => 19,
    'branch'  => 'Mechanical Engineering',
    'placed'  => '85.45%',
    
],
[
    'college_info_id' => 19,
    'branch'  => 'Metallurgical and Materials Engineering',
    'placed'  => '59.09%',
    
],


// 2 
[
    'college_info_id' => 20,
    'branch'  => 'Aerospace Engineering',
    'placed'  => '85.42%',
    
],
[
    'college_info_id' => 20,
    'branch'  => 'Chemical Engineering',
    'placed'  => '84.00%',
    
],
[
    'college_info_id' => 20,
    'branch'  => 'Civil Engineering',
    'placed'  => '83.33%',
    
],
[
    'college_info_id' => 20,
    'branch'  => 'Computer Science and Engineering',
    'placed'  => '97.71%',
    
],
[
    'college_info_id' => 20,
    'branch'  => 'Electrical Engineering',
    'placed'  => '86.67%',
    
],
[
    'college_info_id' => 20,
    'branch'  => 'Engineering Physics',
    'placed'  => '84.00%',
    
],
[
    'college_info_id' => 20,
    'branch'  => 'Mechanical Engineering',
    'placed'  => '89.60%',
    
],
[
    'college_info_id' => 20,
    'branch'  => 'Metallurgical Engineering and Materials Science',
    'placed'  => '85.51%',
    
],
[
    'college_info_id' => 20,
    'branch'  => 'Overall (B.Tech.)',
    'placed'  => '88.07%',
    
],


       ];

       foreach($branchplacement as $branchplacement){

        BranchPlacement::create($branchplacement);

       }
    }
}
