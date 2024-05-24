<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index()
    {
        $employees = Employee::all();
        return response()->json(['employees' => $employees]);
    }

    public function create()
    {
        // Not applicable for JSON API
    }

    public function store(Request $request)
    {
        $employee = Employee::create($request->all());
        return response()->json(['message' => 'Employee created successfully', 'employee' => $employee]);
    }

    public function show(Employee $employee)
    {
        return response()->json(['employee' => $employee]);
    }

    public function edit(Employee $employee)
    {
        // Not applicable for JSON API
    }

    public function update(Request $request, Employee $employee)
    {
        $employee->update($request->all());
        return response()->json(['message' => 'Employee updated successfully', 'employee' => $employee]);
    }

    public function destroy(Employee $employee)
    {
        $employee->delete();
        return response()->json(['message' => 'Employee deleted successfully']);
    }
}
