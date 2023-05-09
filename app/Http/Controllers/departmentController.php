<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Employee;
use Illuminate\Http\Request;

class departmentController extends Controller
{
    public function index(){
        $departments = Department::all();
        return view('department.index',[
            'departments' => $departments
        ]);
    }

    public function create(){
        return view('department.create' , [
            'employees' => Employee::all(),
        ]);
    }

    public function store(Request $request){

        $inputs = $request->all();

        $data  = validator($inputs, [
            'locations' => 'required|string|max:15',
            'name' => 'required|string|max:15',
            'number' => 'required|integer',
            'number_of_employess' => 'required|integer',
            'mgr_id'=>'required|integer'
        ]);

        $department = new Department();
        $department->locations = $request['locations'];
        $department->name = $request['name'];
        $department->number = $request['number'];
        $department->mgr_id = $request['mgr_id'];
        $department->number_of_employess = $request['number_of_employess'];
        $department->save();

        return redirect(url('/department'));
    }
}
