<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Department;

class DepartmentController extends Controller
{
    public function getDepartment(){

    	return view('admin.department.create');

    }

    public function processDepartment(Request $request){

    	$this->validate($request, [
    		'department_name' => 'required',
    		'department_description' => 'required'
    	]);

    	$department = new Department;

    	$department->name = $request->department_name;
    	$department->description = $request->department_description;

    	$department->save();

    	return redirect()->route('department')->with(['success' => 'Department Successfully created.']);;

    }

    public function getAllDepartment(){

    	$departments = Department::all();

    	return view('admin.department.index', compact('departments'));

    }
}
