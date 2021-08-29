<?php

namespace App\Http\Controllers\Api;

use App\Models\Employee;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\EmployeeStoreRequest;

class EmployeeController extends Controller
{
    public function index()
    {
        //
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
    public function edit($id)
    {
        //
    }
    public function update(Request $request, $id)
    {
        //
    }
    public function destroy($id)
    {
        //
    }
}
