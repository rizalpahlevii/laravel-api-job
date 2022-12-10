<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Company;
use App\Models\JobCategory;
use App\Models\JobVacancy;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run(): void
    {
        Company::factory()->count(10)->create();

        JobCategory::factory()->count(10)->create();

        foreach (Company::all() as $company) {
            JobVacancy::factory()->for($company)->for(JobCategory::inRandomOrder()->first())->count(10)->create();
        }
    }
}
