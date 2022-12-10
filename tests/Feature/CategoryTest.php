<?php

namespace Tests\Feature;

use App\Models\JobCategory;
use Tests\TestCase;

class CategoryTest extends TestCase
{
    public function test_populate_categories(): void
    {
        $response = $this->get('/api/categories');
        $response->assertOk();
    }

    public function test_view_category()
    {
        $category = JobCategory::factory()->create();
        $response = $this->get('/api/categories/' . $category->id);
        $response->assertOk();
    }
}
