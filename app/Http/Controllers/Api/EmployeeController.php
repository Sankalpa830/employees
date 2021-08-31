<?php

namespace App\Http\Controllers\Api;

use App\Models\Employee;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\EmployeeResource;
use App\Http\Requests\EmployeeStoreRequest;
use App\Http\Resources\EmployeeSingleResource;

class EmployeeController extends Controller
{
    public function index()
    {
        $employees = Employee::all();
        
        return EmployeeResource::collection($employees);
    }
    public function create()
    {
        //
    }
    public function store(EmployeeStoreRequest $request)
    {
        $employee = Employee::create($request->validated());
        return response()->json($employee);
    }
    public function show(Employee $employee){
        return new EmployeeSingleResource($employee);
    }
    public function edit($id)
    {
        //
    }
    public function update(EmployeeStoreRequest $request, Employee $employee)
    {
        $employee->update($request->validated());
    }
    public function destroy(Employee $employee)
    {
        $employee->delete();
        return response()->json('Deleted Employee Sucessfully');
    }
}
