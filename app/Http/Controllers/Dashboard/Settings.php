<?php

namespace App\Http\Controllers\Dashboard;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\User; 
use Option;
use App\ImageUpload;
use Auth;
use File;
use Validator; 

class Settings extends Controller
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
        $Settings = Option::all();
        return view('Dashboard.Settings.index',compact('Settings')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // GET dashboardRoles create
        return view('Dashboard.Settings.create');
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
        'key' => 'required|unique:options|max:255',
        'value' => 'required',
        ]);
  
        Option::create([
            'key' => $request->key,  
            'value' => $request->value,  
        ]);
        return redirect()->route('Settings.index')

                        ->with('success','Client Store successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //To Get All Option 
        $Option = Option::where('id', '=', $id)->firstOrFail();
        return view('Dashboard.Settings.edit',compact('Option'));
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
        //To Get All Option 
        $Option = Option::where('id', '=', $id)->firstOrFail();
        $Option->key = $request->input('key');
        $Option->value = $request->input('value');
        $Option->save();
        return redirect()->route('Settings.index')

                        ->with('success','Settings Updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
      public function destroy($id)
    {
        // Option Delete
        $Option = Option::findOrFail($id);
        $Option->delete();
        return back()->with('Delete','Option deleted successfully');
    }
}
