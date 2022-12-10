<?php

namespace Tests\Feature;

use App\Models\JobVacancy;
use Tests\TestCase;

class JobTest extends TestCase
{
    public function test_populate_jobs(): void
    {
        $response = $this->get('/api/jobs');
        $response->assertOk();
    }

    public function test_view_job()
    {
        $job = JobVacancy::factory()->create();
        $response = $this->get('/api/jobs/' . $job->id);
        $response->assertOk();
    }
}
