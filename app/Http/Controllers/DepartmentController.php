<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Resources\Department as DepartmentResource;
use App\Department;
use App\Http\Requests;

class DepartmentController extends Controller
{
    public function index(){
        $departments = Department::paginate(15);

        return DepartmentResource::collection($departments);
    }
    public function store(Request $request){
        $department = $request->isMethod('put')? 
        Department::findOrFail($request->department_id):new Department;

        $department->id =  $request->input('department_id');
        $department->name = $request->input('name');
        $department->faculty = $request->input('faculty');

        if($department->save()){
            return new DepartmentResource($department);
        }

    }
    public function show($id){
        $department = Department::findOrFail($id);
        return new DepartmentResource($department);
    }

    public function destroy($id){
        $department = Department::findOrFail($id);
        
        if($department->delete()){
        return new DepartmentResource($department);
    }

    }
}
