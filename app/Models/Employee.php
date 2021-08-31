<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    protected $fillable = [
        'first_name',
        'middle_name',
        'last_name',
        'address',
        'country_id',
        'state_id',
        'city_id',
        'zip_code',
        'department_id',
        'birthdate',
        'date_added'       
    ];

    protected $casts = [
        'birthdate' => 'datetime:Y-m-d',
        'date_added' => 'datetime:Y-m-d',
    ];

    public function country () {
        return $this->belongsTo(Country::class);
    }
    public function state() {
        return $this->belongsTo(State::class);
    }
    public function city() {
        return $this->belongsTo(City::class);
    }
    public function department() {
        return $this->belongsTO(Department::class);
    }
}
