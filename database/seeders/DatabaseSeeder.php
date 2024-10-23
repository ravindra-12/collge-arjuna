<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
           
            CollegeInfoSeeder::class,
            // CollegeOverviewSeeder::class,
            ConnectivitySeeder::class,
            // AlsoKnownAsSeeder::class,
            FeeSeeder::class,
            HostelFeeSeeder::class,
            FeeWaverSeeder::class,
            PlacementSeeder::class,
            BranchPlacementSeeder::class,
            MedianPackageOffere::class,
            AveragePackegedOfferdSeeder::class,
            TopRecruitersSeeder::class,
            PastRecruitersSeeder::class,
            // WebsitesSeeder::class,
            NearbyColleges::class,
            ExploreMoreColleges::class,
            // Cutoffs::class,
            SimilarColleges::class,
        ]);
    }
}

