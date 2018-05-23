<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Country;
use App\Project;
use App\Employee;
use App\Employee_r;

class ProjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $countries = Country::all();
        $employees = Employee::all();
        

        return view('projects.create_project')
        ->with('countries', $countries)
        ->with('employees', $employees);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $req)
    {
    
        $project = new Project();

        $project->name = $req->input('name');
        $project->company_id = 1;
        $project->country_id = $req->input('country_id');
        $project->date = $req->input('date');
        $project->description = $req->input('description');

        // dd($project);

        $project->save();

        if ($project) {

        foreach ($req->id_employee as $key => $v) {
            $data = array(
                'id_project' => $project->id_project,
                'id_employee' => $req->id_employee [$key],
            );
            Employee_r::insert($data);
        }

        return redirect()->back();
        return redirect('projects.risks.create_risk')->with('project', $project);

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
        
        $project = Project::find($id);
        
        return view ('projects.project_details')->with('project', $project);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
