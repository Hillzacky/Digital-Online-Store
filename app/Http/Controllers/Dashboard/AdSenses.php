<?php
namespace App\Http\Controllers\Dashboard;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreAdSense;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\User; 
use App\AdSense;
use Auth; 
use File;
use Validator; 

class AdSenses extends Controller
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
          // GET AdSenses
          $AdSenses = AdSense::simplePaginate(10);
          return view('Dashboard.AdSense.index',compact('AdSenses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // GET AdSense create
        return view('Dashboard.AdSense.create');
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
        'Location' => 'required|max:255',
        'name' => 'required|max:30',
        'Display' => 'required|max:30',
        'url' =>'required|unique:ad_senses|max:30',
        'code' => 'required|unique:ad_senses|max:200',
        ]);
        AdSense::create([
            'Location' => $request->Location,  
            'name' => $request->name,   
            'Display' => $request->Display,  
            'Type' => $request->Type, 
            'Active' => $request->Active, 
            'url' => $request->url,
            'code' => $request->code
        ]);
        return redirect()->route('AdSense.index')

                        ->with('success','AdSense Store successfully.');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $name
     * @return \Illuminate\Http\Response
     */
    public function edit($name)
    {
        //To Get AdSense 
        $AdSense = AdSense::where('name', '=', $name)->firstOrFail();
        return view('Dashboard.AdSense.edit',compact('AdSense'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $name)
    {
        // GET AdSense
        $AdSense = AdSense::where('name', '=', $name)->firstOrFail();
        // GET validate
        $data = $request->validate([
        'Location' => 'required|max:255',
        'name' => 'required|max:30',
        'Display' => 'required|max:30',
        'url' =>'required|unique:ad_senses|max:30',
        'code' => 'required|unique:ad_senses|max:200',
        ]);
        $AdSense->Location  = $request->input('Location');
        $AdSense->name = $request->input('name');
        $AdSense->Display = $request->input('Display');
        $AdSense->Type = $request->input('Type');
        $AdSense->Active = $request->input('Active');
        $AdSense->url = $request->input('url');
        $AdSense->code = $request->input('code');
        $AdSense->save();
        return redirect()->route('AdSense.index')

                        ->with('success','AdSense Updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         // AdSense AdSense
        $AdSense = AdSense::findOrFail($id);
        $AdSense->delete();
        return back()->with('Delete','AdSense deleted successfully');
    }
}
