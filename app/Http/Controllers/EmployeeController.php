<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $employees = Employee::all();
        return view('employees.index', compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('employees.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'date_birth' => 'required|date',
            'email' => 'required|email|unique:employees,email',
            'phone_number' => 'required|string|max:20',
            'salary' => 'required|numeric|min:0',
            'type_staff' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $employee = new Employee();
        $employee->name = $request->name;
        $employee->date_birth = $request->date_birth;
        $employee->email = $request->email;
        $employee->phone_number = $request->phone_number;
        $employee->salary = $request->salary;
        $employee->type_staff = $request->type_staff;
        $employee->status = 1;
        $employee->registerby = $request->registerby;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('uploads/employees'), $imageName);
            $employee->image = $imageName;
        }

        $employee->save();

        return redirect()->route('employees.index')->with('success', 'Employee created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $employee = Employee::findOrFail($id);
        return view('employees.show', compact('employee'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $employee = Employee::findOrFail($id);
        return view('employees.edit', compact('employee'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'date_birth' => 'required|date',
            'email' => 'required|email|unique:employees,email,' . $id,
            'phone_number' => 'required|string|max:20',
            'salary' => 'required|numeric|min:0',
            'type_staff' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $employee = Employee::findOrFail($id);
        $employee->name = $request->name;
        $employee->date_birth = $request->date_birth;
        $employee->email = $request->email;
        $employee->phone_number = $request->phone_number;
        $employee->salary = $request->salary;
        $employee->type_staff = $request->type_staff;

        if ($request->hasFile('image')) {
            // Eliminar imagen anterior si existe
            if ($employee->image && file_exists(public_path('uploads/employees/' . $employee->image))) {
                unlink(public_path('uploads/employees/' . $employee->image));
            }

            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('uploads/employees'), $imageName);
            $employee->image = $imageName;
        }

        $employee->save();

        return redirect()->route('employees.index')->with('success', 'Employee updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $employee = Employee::findOrFail($id);
        
        // Eliminar imagen si existe
        if ($employee->image && file_exists(public_path('uploads/employees/' . $employee->image))) {
            unlink(public_path('uploads/employees/' . $employee->image));
        }
        
        $employee->delete();

        return redirect()->route('employees.index')->with('eliminar', 'ok');
    }

    /**
     * Change status of employee
     */
    public function changestatusemployee(Request $request)
    {
        $employee = Employee::find($request->employee_id);
        if ($employee) {
            $employee->status = $request->status;
            $employee->save();
            return response()->json(['success' => 'Status changed successfully.']);
        }
        return response()->json(['error' => 'Employee not found.']);
    }
}