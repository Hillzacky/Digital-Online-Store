<?php

namespace App\Http\Controllers\Dashboard;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreMenu;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\User; 
use App\menu_item;
use App\Menu;
use Auth;
use File;
use Validator;


class Menus extends Controller
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
        // GET Menus
       $Menus = Menu::simplePaginate(10); 
       return view('Dashboard.Menus.index',compact('Menus'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // GET dashboardRoles create
        return view('Dashboard.Menus.create');
    }

     /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {

        // GET validate
        $request->validate([
        'Title' => 'required|max:30',
        ]);
         Menu::create([  
            'Title' => $request->Title
        ]);

            return redirect()->route('Menus.index')

                        ->with('success','Menu Store successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
    public function destroy($id)
    {
        // Menu Delete
        $Menu = Menu::findOrFail($id);
        $Menu->delete();
        return back()->with('Delete','Menu deleted successfully');
    }
}
