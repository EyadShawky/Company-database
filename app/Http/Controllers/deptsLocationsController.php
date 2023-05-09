<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\dept_locations;
use Illuminate\Http\Request;

class deptsLocationsController extends Controller
{
    public function index(){
        $dept_locations = dept_locations::all();
        return view('depts.index',[
            'dept_locations' => $dept_locations
        ]);
    }

    public function create(){
        return view('depts.create' , [
            'departments' => Department::all(),
        ]);
    }

    public function store(Request $request){

        $inputs = $request->all();

        $data  = validator($inputs, [
            'd_location' => 'required|string|max:15',
            'department_id' => 'required|string|max:30'
        ]);

        $dept_locations = new dept_locations();
        $dept_locations->d_location = $request['d_location'];
        $dept_locations->department_id = $request['department_id'];
        $dept_locations->save();

        return redirect(url('/depts-locations'));
    }
}
