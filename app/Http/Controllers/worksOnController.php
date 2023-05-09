<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Project;
use App\Models\works_on;
use Illuminate\Http\Request;

class worksOnController extends Controller
{
    public function index(){
        $works_on = works_on::all();
        return view('worksOn.index',[
            'works_on' => $works_on
        ]);
    }

    public function create(){
        return view('worksOn.create' , [
            'employees' => Employee::all(),
            'projects' => Project::all(),
        ]);
    }

    public function store(Request $request){

        $inputs = $request->all();

        $data  = validator($inputs, [
            'whours' => 'required|decimal',
            'projects' => 'required|string|max:30',
            'employees' => 'required|string|max:30'
        ]);

        $works_on = new works_on();
        $works_on->whours = $request['whours'];
        $works_on->project_id = $request['project_id'];
        $works_on->employee_id = $request['employee_id'];
        $works_on->save();

        return redirect(url('/works-on'));
    }
}
