<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Employee;
use Illuminate\Http\Request;

class employeeController extends Controller
{
    public function index(){
        $employees = Employee::all();
        return view('employee.index',[
            'employees' => $employees
        ]);
    }

    public function create(){
        return view('employee.create' , [
            'departments' => Department::all(),
            'employees' => Employee::all(),
        ]);
    }

    public function store(Request $request){

        $inputs = $request->all();

        $data  = validator($inputs, [
            'Fname' => 'required|string|max:15',
            'Mname' => 'required|string|max:15',
            'Lname' => 'required|string|max:15',
            'Address' => 'required|string|max:255',
            'Sex' => 'required|string|max:6',
            'Bdate' => 'required|date',
            'salary' => 'required|numeric',
            'department_id' => 'required|string|max:30',
            'super_ssn'=>'required|string|max:30'
        ]);

        $employee = new Employee();
        $employee->name = $request['Fname'] . ' ' . $request['Mname'] . ' ' . $request['Lname'];
        $employee->address = $request['Address'];
        $employee->sex = $request['Sex'];
        $employee->Bdate = $request['Bdate'];
        $employee->salary = $request['salary'];
        $employee->department_id = $request['department_id'];
        $employee->super_ssn = $request['super_ssn'];
        $employee->save();

        return redirect(url('/employees'));
    }

}
