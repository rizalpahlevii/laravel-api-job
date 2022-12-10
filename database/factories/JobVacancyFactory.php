<?php

namespace Database\Factories;

use App\Models\Company;
use App\Models\JobCategory;
use App\Models\JobVacancy;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class JobVacancyFactory extends Factory
{
    public function configure()
    {
        return $this->afterCreating(function (JobVacancy $jobVacancy) {
            if (!$jobVacancy->company_id) {
                $company = Company::factory()->create();
                $jobVacancy->company()->associate($company);
            }

            if (!$jobVacancy->job_category_id) {
                $jobCategory = JobCategory::factory()->create();
                $jobVacancy->jobCategory()->associate($jobCategory);
            }
        });
    }

    public function definition()
    {
        return [
            'title' => $this->faker->word(),
            'description' => $this->faker->text(),
            'location' => $this->faker->word(),
            'salary' => $this->faker->word(),
            'job_desks' => $this->faker->words(),
            'requirements' => $this->faker->words(),
            'benefits' => $this->faker->words(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
