<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Memo;
use App\Http\Resources\Memo as MemoResource;

class MemoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $memos = Memo::paginate(10);
        //

        return MemoResource::collection($memos); 
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $memo = $request->isMethod('put')? 
        Memo:: findOrFail($request->memo_id): new Memo;

        $memo->id = $request->input('memo_id');
        $memo->from = $request->input('from');
        $memo->title = $request->input('title');
        $memo->body = $request->input('body');

        if($memo->save()){
            return new MemoResource($memo);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $memo = Memo::findOrFail($id);
        //
        return new MemoResource($memo);
    }

 
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $memo = Memo::findOrFail($id);
        
        if($memo->delete()){
        return new MemoResource($memo);
    }
    }
}
