<?php

namespace App\Http\Controllers;

use App\Models\Dependent;
use App\Models\Employee;
use Illuminate\Http\Request;

class dependentController extends Controller
{
    public function index(){
        $dependents = Dependent::all();
        return view('dependent.index',[
            'dependents' => $dependents
        ]);
    }

    public function create(){
        return view('dependent.create' , [
            'employees' => Employee::all(),
        ]);
    }

    public function store(Request $request){

        $inputs = $request->all();

        $data  = validator($inputs, [
            'name' => 'required|string|max:60',
            'relationship' => 'required|string|max:255',
            'Sex' => 'required|string|max:6',
            'Birth_date' => 'required|date',
            'employee_id' => 'required|string|max:30'
        ]);

        $dependents = new Dependent();
        $dependents->name = $request['name'] ;
        $dependents->relationship = $request['relationship'];
        $dependents->Sex = $request['Sex'];
        $dependents->Birth_date = $request['Birth_date'];
        $dependents->employee_id = $request['employee_id'];
        $dependents->save();

        return redirect(url('/dependent'));
    }
}
