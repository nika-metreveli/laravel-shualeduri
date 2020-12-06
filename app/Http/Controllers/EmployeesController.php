<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeesController extends Controller
{
    public function addEmployee() {
        Employee::create([
            'name' => 'John',
            'lastname' => 'Doe',
            'personal_id' => '00000000',
            'salary' => 0
        ]);
        return 'Employee added';
    }

    public function delete(Request $request)
    {
      Employee::where('personal_id', $request->personal_id)->delete();
  
      return 'Employee deleted';
    }
    
    public function showEmployees() {
        $emps = Employee::all();
        return view('showemps')->withemployees($emps)->withtitle('Employees');
    }
}
