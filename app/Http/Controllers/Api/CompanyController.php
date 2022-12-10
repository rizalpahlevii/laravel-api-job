<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\CompanyResource;
use App\Models\Company;

class CompanyController extends Controller
{
    public function index()
    {
        $companies = Company::all();
        $companies = CompanyResource::collection($companies);
        return response()->json($companies);
    }

    public function show($id)
    {
        $company = Company::find($id);
        $company = new CompanyResource($company);
        return response()->json($company);
    }
}
