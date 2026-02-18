<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Employee;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of all employees.
     */
    public function index(): JsonResponse
    {
        $employees = Employee::orderBy('name')->get();

        return response()->json([
            'success' => true,
            'data' => $employees,
            'message' => 'Employees retrieved successfully.',
        ]);
    }

    /**
     * Store a newly created employee.
     */
    public function store(Request $request): JsonResponse
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:employees,email',
            'phone' => 'nullable|string|max:20',
            'position' => 'required|string|max:255',
            'department' => 'required|string|max:255',
            'avatar' => 'nullable|string',
            'join_date' => 'required|date',
            'is_active' => 'boolean',
        ]);

        $employee = Employee::create($validated);

        return response()->json([
            'success' => true,
            'data' => $employee,
            'message' => 'Employee created successfully.',
        ], 201);
    }

    /**
     * Display the specified employee.
     */
    public function show(Employee $employee): JsonResponse
    {
        return response()->json([
            'success' => true,
            'data' => $employee,
            'message' => 'Employee retrieved successfully.',
        ]);
    }

    /**
     * Update the specified employee.
     */
    public function update(Request $request, Employee $employee): JsonResponse
    {
        $validated = $request->validate([
            'name' => 'sometimes|required|string|max:255',
            'email' => 'sometimes|required|email|unique:employees,email,' . $employee->id,
            'phone' => 'nullable|string|max:20',
            'position' => 'sometimes|required|string|max:255',
            'department' => 'sometimes|required|string|max:255',
            'avatar' => 'nullable|string',
            'join_date' => 'sometimes|required|date',
            'is_active' => 'boolean',
        ]);

        $employee->update($validated);

        return response()->json([
            'success' => true,
            'data' => $employee,
            'message' => 'Employee updated successfully.',
        ]);
    }

    /**
     * Remove the specified employee.
     */
    public function destroy(Employee $employee): JsonResponse
    {
        $employee->delete();

        return response()->json([
            'success' => true,
            'message' => 'Employee deleted successfully.',
        ]);
    }
}
