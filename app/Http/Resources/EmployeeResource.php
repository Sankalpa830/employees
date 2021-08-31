<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class EmployeeResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id'         =>  $this->id,
            'first_name' => $this->first_name,
            'middle_name'=> $this->middle_name,
            'last_name'=> $this->last_name,
            'address'=> $this->address,
            'country'=> $this->country,
            'state'=> $this->state,
            'city'=> $this->city,
            'zip_code'=> $this->zip_code,
            'department'=> $this->department,
            'birthdate'=> $this->birthdate,
            'date_added'=> $this->date_added  
        ];
    }
}
