<?php

namespace App\Http\Controllers;

use App\Models\employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function read()
    {
        $employees = employee::all();
        return view('employees.read', compact('employees'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'employeeId' => 'required',
            'designation' => 'required',
        ]);

        employee::create([
            'name' => $request->name,
            'employeeId' => $request->employeeId,
            'designation' => $request->designation
        ]);

        return redirect('/employees/read')->with('success', 'Employee created successfully');;
    }

    public function edit($id)
    {
        $employee = employee::find($id);
        return view('employees.edit', compact('employee'));
    }

    public function update(Request $request, $id)
    {
        $employee = employee::find($id);

        $employee->update([
            'name' => $request->name,
            'employeeId' => $request->employeeId,
            'designation' => $request->designation
        ]);

        return redirect('/employees/read')->with('success', 'Employee updated successfully');
    }

    public function destroy($id)
    {
        $employee = employee::find($id);

        $employee->delete();

        return redirect('/employees/read')->with('success', 'Employee deleted successfully');
    }
}
