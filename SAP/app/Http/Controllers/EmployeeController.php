<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
{
    public function index()
    {
        return view('admin.employees');
    }
    public function store(Request $request){
        $request->validate([
        'position'=> 'required',
        'last_name'=> 'required',
        'first_name'=> 'required',
        'middle_name'=> 'nullable',
        'suffix'=> 'nullable',
        'date_hired'=>'nullable',
        'birthday'=> 'required',
        'birthplace'=>'nullable',
        'civil_status'=> 'required',
        'gender'=> 'required',
        'mobile_number'=> 'required',
        ]);
       Employee::create($request->all());
       return response()->json(['Successfully added an employee.']);       
    }
}
