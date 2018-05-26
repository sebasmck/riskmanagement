<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Country;
use App\Project;
use App\Employee;
use App\Employee_r;
use App\Risk;
use Auth;

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
        $id_company = Auth()->user()->id_company;

        $countries = Country::getByCompany($id_company);
        
        $employees = Employee::getByCompany($id_company);
        
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
        $employee_r = 

        $project->name = $req->input('name');
        $project->company_id = Auth()->user()->id_company;
        $project->country_id = $req->input('country_id');
        $project->date = $req->input('date');
        $project->description = $req->input('description');

        // dd($project);

        $project->save();

        if ($project) {


        foreach ($req->id_employee as $key => $v) {

            $employee = Employee::find($req->id_employee [$key]);  
            
            $data = array(
                'id_project' => $project->id_project,
                'name' => $employee->name,
                'position' => $employee->position,
                'email' => $employee->email,
                'phone' => $employee->phone,
            );
            Employee_r::insert($data);
        }
        
        return redirect()->route('home');
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
        $risks = Risk::where('id_project', '=', $id)->get();

        return view ('projects.project_details')->with('project', $project)->with('risks', $risks);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // require project id to bring all variables 

        return view('projects.matrix.main_matrix');
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
