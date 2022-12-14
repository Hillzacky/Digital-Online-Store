<?php

namespace App\Http\Controllers\Dashboard;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Http\Requests\StoreRoles;

class Roles extends Controller
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

         // Roles //
         $Roles = Role::Paginate(10);
         return view('Dashboard.Roles.index',compact('Roles')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // GET dashboardRoles create
        return view('Dashboard.Roles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
        'name' => 'required|unique:roles|max:255',
        'guard_name' => 'required',
        ]);
        $guard_name = 'web';  
        Role::create([
            'name' => $request->name,  
            'guard_name' => $guard_name, 
        ]);
        
        Permission::create([
            'name' => $request->name,  
            'guard_name' => $guard_name,       
        ]);
        return redirect()->route('Roles.index')

                        ->with('success','Role Store successfully.');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Role Delete
        $Role = Role::findOrFail($id);
        $Permission = Permission::where('name', '=', $Role->name)->firstOrFail();
        $Role->delete();
        $Permission->delete();
        return back()->with('Delete','Role deleted successfully');
    }
}
