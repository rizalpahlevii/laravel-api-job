<?php

namespace Tests\Feature;

use App\Models\Company;
use Tests\TestCase;

class CompanyTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_populate_companies(): void
    {
        $response = $this->get('/api/companies');
        $response->assertOk();
    }

    public function test_view_company()
    {
        $company = Company::factory()->create();
        $response = $this->get('/api/companies/' . $company->id);
        $response->assertOk();
    }
}
