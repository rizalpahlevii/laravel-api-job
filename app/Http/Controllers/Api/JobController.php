<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\JobVacancyResource;
use App\Models\JobVacancy;

class JobController extends Controller
{
    public function index()
    {
        $jobs = JobVacancy::with('company', 'jobCategory')->get();
        $jobs = JobVacancyResource::collection($jobs);
        return response()->json($jobs);
    }

    public function show($id)
    {
        $job = JobVacancy::with('company', 'jobCategory')->find($id);
        $job = new JobVacancyResource($job);
        return response()->json($job);
    }
}
