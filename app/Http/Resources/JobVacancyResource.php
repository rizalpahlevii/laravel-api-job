<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/** @mixin \App\Models\JobVacancy */
class JobVacancyResource extends JsonResource
{
    /**
     * @param Request $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'description' => $this->description,
            'location' => $this->location,
            'salary' => $this->salary,
            'job_desks' => $this->job_desks,
            'requirements' => $this->requirements,
            'benefits' => $this->benefits,
            'job_category_id' => $this->job_category_id,
            'company_id' => $this->company_id,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,


            'company' => new CompanyResource($this->whenLoaded('company')),
            'job_category' => new JobCategoryResource($this->whenLoaded('jobCategory')),

        ];
    }
}
