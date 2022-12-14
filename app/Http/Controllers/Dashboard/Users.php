<?php

namespace App\Http\Controllers\Dashboard;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreRoles;
use App\Http\Requests\StoreUsers;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\User;   
use Auth;
use File;
use Validator;
use App\ImageUpload;


class Users extends Controller
{
    /**
     * Show the middleware dashboard Super-Admin.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function __construct()
    {
        $this->middleware(['auth','role_or_permission:Super-Admin|edit articles']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       // GET Users
       $Users = User::simplePaginate(10); 
       return view('Dashboard.Users.index',compact('Users')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    { 
        // GET Roles
        $Roles = Role::all();
        // GET dashboardRoles create
        return view('Dashboard.Users.create',compact('Roles'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */ 
    public function store(Request $request)
    {
       $validator = Validator::make($request->all(), [
       // Do not allow any shady characters
           'name' => 'required|max:30|regex:[A-Za-z1-9 ]',
           'email' => 'required|max:100',
           'password' => 'required|confirmed|min:6',
       ]);

        $ImageUpload = ImageUpload::max('id');
        $user = User::create([
            'name' => $request->name,    
            'email' => $request->email,  
            'Phone' => $request->Phone,   
            'ImageUpload_id' => $ImageUpload, 
            'password' => Hash::make($request->password) 

        ]);
           $Roles = $request['roles']; //Retrieving the roles field
         //Checking if a role was selected
        if (isset($Roles)) {

            foreach ($Roles as $role) {
            $role_r = Role::where('id', '=', $role)->firstOrFail();            
            $user->assignRole($role_r); //Assigning role to user
            }
        }   


            return redirect()->route('Users.index')

                        ->with('success','User Store successfully.');

    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    { 
         //To Get All User 
        $User = User::where('slug', '=', $slug)->firstOrFail();
        // GET Roles
        $Roles = Role::all();
         // ImageUpload
        $ImageUpload = ImageUpload::max('id') + 1;
        return view('Dashboard.Users.edit',compact('User','Roles','ImageUpload'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $slug)
    {
        // GET User
       $User = User::where('slug', '=', $slug)->firstOrFail();
        // GET validate
         $validator = Validator::make($request->all(), [
        // Do not allow any shady characters
           'password' => 'required|confirmed|min:6',
       ]);
        $User->name = $request->input('name');
        $User->email = $request->input('email');
        $User->Phone = $request->input('Phone');
        $User->ImageUpload_id = $request->input('ImageUpload_id');
        $User->password = Hash::make($request->password);
        $Roles = $request['roles']; //Retreive all roles
          if (isset($Roles)) {        
            $User->roles()->sync($Roles);  //If one or more role is selected associate user to roles          
        }        
        else {
            $User->roles()->detach(); //If no role is selected remove exisiting role associated to a user
        }
        $User->save();
        return redirect()->route('Users.index')

                        ->with('success','User Updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // User Delete
        $User = User::findOrFail($id);
        $User->delete();
        return back()->with('Delete','User deleted successfully');
    }
}
