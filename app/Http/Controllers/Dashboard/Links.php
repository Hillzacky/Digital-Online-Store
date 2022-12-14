<?php

namespace App\Http\Controllers\Dashboard;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreLink;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\User; 
use App\menu_item;
use App\Menu;
use Auth;
use File;
use Validator;

class Links extends Controller
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
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        // GET dashboardRoles create
        return view('Dashboard.Links.create');
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
        'Title_en' => 'required|max:30',
        'menu_id' => 'required',
        'order' => 'required|max:30',
        'url' => 'required|max:150'
        ]);
         menu_item::create([  
            'menu_id' => $request->menu_id,  
            'order' => $request->order, 
            'Title_en' => $request->Title_en,
            'Title_ar' => $request->Title_ar,  
            'Title_fr' => $request->Title_fr,
            'url' => $request->url,
            'target' => $request->target
        ]);

            return redirect()->route('Menus.index')

                        ->with('success','Link Store successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
    public function destroy($id)
    {
        // menu_item Delete
        $menu_item = menu_item::findOrFail($id);
        $menu_item->delete();
        return back()->with('Delete','Link deleted successfully');
    }
}
