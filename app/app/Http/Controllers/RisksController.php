<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Stage;
use App\Category;
use App\Group;
use App\Project;
use App\Employee;
use App\Employee_r;
use App\Mitigation;
use App\Prevention;
use App\Risk;


class RisksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $req)
    {

        // dd($req->all());

        $risk = new Risk();

        $risk->id_project = $req->input('id_project');
        $risk->name = $req->input('name');
        $risk->id_employee = $req->input('id_employee');
        $risk->id_category = $req->input('id_category');
        $risk->id_group = $req->input('id_group');
        $risk->id_stage = $req->input('id_stage');
        $risk->probability = $req->input('probability');
        $risk->impact = $req->input('impact');

        $risk->save();

        if ($risk) {

        foreach ($req->nameprevention as $key => $v){
            $data1 = array(
                'id_risk' => $risk->id_risk,
                'name' => $req->nameprevention [$key],
                'date' => $req->dateprevention [$key],
            );
            Prevention::insert($data1);
        }

        foreach ($req->namemitigation as $key => $v){
            $data2 = array(
                'id_risk' => $risk->id_risk,
                'name' => $req->namemitigation [$key],
                'date' => $req->datemitigation [$key],
            );
            Mitigation::insert($data2);
        }
        return redirect()->route('project.show', ['id' => $risk->id_project]);
        
        // return \Redirect::route('project.show', $risk);
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id_project)
    {   

        $employees = Employee_r::getByProject($id_project);
        $stages = Stage::all();
        $categories = Category::all();
        $groups = Group::all();


        return view('projects.risks.create_risk')
        ->with('stages', $stages)
        ->with('employees', $employees)
        ->with('categories', $categories)
        ->with('groups', $groups)
        ->with('id_project', $id_project);

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
        //
    }
}
