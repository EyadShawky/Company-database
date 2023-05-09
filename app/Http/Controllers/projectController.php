<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Project;
use Illuminate\Http\Request;

class projectController extends Controller
{
    public function index(){
        $projects = Project::all();
        return view('project.index',[
            'projects' => $projects
        ]);
    }

    public function create(){
        return view('project.create',[
            'departments' => Department::all(),
        ]);
    }

    public function store(Request $request){

        $inputs = $request->all();

        $data  = validator($inputs, [
            'name' => 'required|string|max:15',
            'locations' => 'required|string|max:255',
            'Sex' => 'required|string|max:6',
            'number' => 'required|integer',
            'salary' => 'required|numeric',
            'department_id' => 'required|string|max:30'
        ]);

        $projects = new Project();
        $projects->name = $request['name'];
        $projects->locations = $request['locations'];
        $projects->number = $request['number'];
        $projects->department_id = $request['department_id'];
        $projects->save();

        return redirect(url('/project'));
    }
}
