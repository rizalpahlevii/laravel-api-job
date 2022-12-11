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
            'link' => $this->link,
            'job_category' => $this->job_category,
            'company' => $this->company,
            'company_logo_url' => $this->company_logo_url,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
