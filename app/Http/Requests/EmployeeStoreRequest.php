<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmployeeStoreRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'first_name' => ['required'],
            'middle_name'=> ['required'],
            'last_name'=> ['required'],
            'address'=> ['required'],
            'country_id'=> ['required'],
            'state_id'=> ['required'],
            'city_id'=> ['required'],
            'zip_code'=> ['required'],
            'department_id'=> ['required'],
            'birthdate'=> ['required'],
            'date_added'=> ['required']
        ];
    }
}
