<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Auth\Events\Registered;
use App\Company;

use App\Project;
use App\User;

use Auth;
use DB;

class HomeController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function managementPage(){
        return view ('management.management_menu');
    }


    public function index()
    {
        $id_company = auth()->user()->id_company;

        $projects = Project::getBbycompany($id_company);

        $user = Auth()->user();
        
        return view('home')->with('projects', $projects)->with('id_company', $id_company)->with('user', $user);
    }

    public function indexAdmin()
    {   
        $users = User::all();

        return view('admin.home')->with('users', $users);
    }

    // Clients awaiting for confirmation.

    public function awaiting()
    {
        return view('awaiting');
    }

    // Display Rules

    public function rules()
    {
        return view('usermenu.rules');
    }


    public function pollregistration(Request $req)
    {
        $this->validator($req->all())->validate();
        
        $polls = new PollsModel;
        $polls->id_User = $req->input('user_id');
        $polls->poll_name = $req->input('poll_name');
        $polls->status = 'pending';

        $polls->save();


        // $polls = $req->validate([
        //     'poll_name' => 'required|unique:user_poll|string|max:255'
        // ]);

        // $polls->create($polls);
        
        return back();
    }

    protected function validator(array $data)
    {   
        return Validator::make($data, [
            'poll_name' => 'required|unique:user_poll|string|max:255'
        ]);
    }

   
    // protected function create(array $data)
    // {
    //     return PollsModel::create([
    //         'id_User' => auth()->user()->id,
    //         'poll_name' =>$data['poll_name'],
    //         'status' => 'Pending Activation',
    //     ]);
    // }
}
