<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\School;
use App\Http\Resources\School as SchoolResource;

class SchoolController extends Controller
{
    public function index(){
        $schools= School::paginate(10);
        return SchoolResource::collection($schools);
    }

    public function show($id){
        $school = School::findOrFail($id);

        return new SchoolResource($school);
    }

    public function store(Request $request){
        $school = $request->isMethod('put')? 
        School::findOrFail($request->school_id):
        new School;

        $school->id = $request->input('school_id');
        $school->name = $request->input('name');

        if($school->save()){
            return new SchoolResource($school);
        }
    }

    public function destroy($id){
        $school = School::findOrFail($id);

        if($school->delete()){
            return new SchoolResource($school);
        }
    }
}
