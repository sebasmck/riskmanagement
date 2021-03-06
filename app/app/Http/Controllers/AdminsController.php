<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Rep;
use App\PollsModel;
use DB;
use App\Company;

use App\Emails;



class AdminsController extends Controller
{


    public function assignRep(){

        $users = User::all();

        return view('admin.assign_rep')->with('users', $users);

    }


    // get program management page

    public function programManagement(){

        return view ('admin.program_management');

    }

    public function assignToUser(Request $req){

        $user = User::find($req->input('id'));

        $user->id_rep = $req->input('id_rep');
        $user->save();

        return redirect()->back();

    }

    public function addRep(){
        return view('admin.add_rep');
    }


    public function storeRep(Request $req){

        $rep = new Rep;

        $users = User::all();
        $reps = Rep::all();


        $rep->name = $req->input('name');
        $rep->email = $req->input('email');

        $rep->save();

        return view('admin.assign_rep')->with('users', $users)->with('reps', $reps);

    }

    
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $req)
    {
        $rep = new Rep;

        $rep->name = $req->input('name');
        $rep->email = $req->input('email');

        $rep->save();

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $user = User::find($id)->projects;
        $user = User::find($id);


        return view('admin.admin_detail')->with('user', $user);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
            
        DB::select("call aproval($id)");

        $user = User::find($id);

        $data = array('name' => $user->name,
                      'lastname' => $user->lastname,
                      'email' => $user->email,
                      'code' => $user->code);

        $user = User::find($id);
        $company = new Company;


        $company->name = $user->company;
        $company->save();

        $user->id_company = $company->id_company;
        $user->save();

        Emails::email_registration_user_approved($user->email, $data);

        return back();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $req, $iduser_poll)
    {
        $poll = PollsModel::find($iduser_poll);
        $poll->status = $req->input('status');

        return redirect()->back();

    }


    public function editStatus(Request $req){

        $poll = PollsModel::find($req->iduser_poll);

        $poll->status = $req->status;
        $poll->save();

        return response()->json($poll);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        
        $user->delete();

        return redirect()->back();

    }
}
