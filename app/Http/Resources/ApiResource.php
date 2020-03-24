<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ApiResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        // return parent::toArray($request);
        return [
            [
                'Country' => $this['countrydata'][0]['info']['title'],
                'Code' => $this['countrydata'][0]['info']['code'],
                'total' => [
                    'total_cases' => $this['countrydata'][0]['total_cases'],
                    'total_recovered' => $this['countrydata'][0]['total_recovered'],
                    'total_unresolved' => $this['countrydata'][0]['total_unresolved'],
                    'total_deaths' => $this['countrydata'][0]['total_deaths'],
                    'total_active_cases' => $this['countrydata'][0]['total_active_cases'],
                    'total_serious_cases' => $this['countrydata'][0]['total_serious_cases'],
                ],
                'today' => [
                    'total_new_cases_today' => $this['countrydata'][0]['total_new_cases_today'],
                    'total_new_deaths_today' => $this['countrydata'][0]['total_new_deaths_today'],
                ],
                'credit' => [
                    'modified_by' => 'Sai Main',
                    'source' => 'thevirustracker'
                ]
            ],
        ];
    }
}
