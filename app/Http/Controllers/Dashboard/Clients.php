<?php

namespace App\Http\Controllers\Dashboard;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreClient;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\ImageUpload;
use App\User; 
use App\Client;
use Auth;
use File;
use Validator;
use App\Instagram;

class Clients extends Controller
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
        // GET Clients
        $Clients = Client::simplePaginate(10);
        return view('Dashboard.Clients.index',compact('Clients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // GET dashboardRoles create
        return view('Dashboard.Clients.create');
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
        'Title_en' => 'required',
        'body_en' => 'required',
        ]); 

        $ImageUpload = ImageUpload::max('id');
        Client::create([  
            'Title_ar' => $request->Title_ar,  
            'Title_en' => $request->Title_en, 
            'Title_fr' => $request->Title_fr,
            'body_ar' => $request->body_ar,  
            'body_en' => $request->body_en,
            'body_fr' => $request->body_fr,
            'ImageUpload_id' => $ImageUpload
        ]);
            return redirect()->route('Clients.index')
                        ->with('success','Speakers Store successfully.');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $slug
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        //To Get All Speakers 
        $Client = Client::where('slug', '=', $slug)->firstOrFail();
        //To Get All ImageUpload 
        $ImageUpload = ImageUpload::max('id') + 1;
        // GET Cities
        $Cities = Instagram::all();
        return view('Dashboard.Clients.edit',compact('Client','ImageUpload','Cities'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $Title_en
     * @return \Illuminate\Http\Response
     */
    
    public function update(Request $request, $slug)
    {
        // GET Client
        $Client = Client::where('slug', '=', $slug)->firstOrFail();
        // GET request
        $request->validate([
        'Title_en' => 'required',
        'body_en' => 'required',
        ]);

        $Client->Title_ar = $request->input('Title_ar');
        $Client->Title_en = $request->input('Title_en');
        $Client->Title_fr = $request->input('Title_fr');
        $Client->body_ar = $request->input('body_ar');
        $Client->body_en = $request->input('body_en');
        $Client->body_fr = $request->input('body_fr');
        $Client->ImageUpload_id = $request->input('ImageUpload_id');
        $Client->save();
        return redirect()->route('Clients.index')

                        ->with('success','Speakers Updated successfully.');
    }

    /**
     * Remove the specified resource trom storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Client Delete
        $Client = Client::findOrFail($id);
        $Client->delete();
        return back()->with('Delete','Speakers deleted successfully');
    }
}
