<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\JobCategoryResource;
use App\Models\JobCategory;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = JobCategory::all();
        $categories = JobCategoryResource::collection($categories);
        return response()->json($categories);
    }

    public function show($id)
    {
        $category = JobCategory::find($id);
        $category = new JobCategoryResource($category);
        return response()->json($category);
    }
}
