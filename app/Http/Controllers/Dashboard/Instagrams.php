<?php

namespace App\Http\Controllers\Dashboard;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreInstagram;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\User; 
use App\Instagram;
use App\ImageUpload;
use Auth;
use File;
use Validator; 

class Instagrams extends Controller
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
        // GET Instagrams
        $Instagrams = Instagram::simplePaginate(10);
        return view('Dashboard.Instagrams.index',compact('Instagrams'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // GET Instagram create
        return view('Dashboard.Instagrams.create');
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
        Instagram::create([  
            'Title_ar' => $request->Title_ar,  
            'Title_en' => $request->Title_en, 
            'Title_fr' => $request->Title_fr,
            'body_ar' => $request->body_ar,  
            'body_en' => $request->body_en,
            'body_fr' => $request->body_fr,
            'ImageUpload_id' => $ImageUpload
        ]);

            return redirect()->route('Instagrams.index')

                        ->with('success','City Store successfully.');
    }

   /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $slug
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        //To Get All Instagram 
        $Instagram = Instagram::where('slug', '=', $slug)->firstOrFail();
        $ImageUpload = ImageUpload::max('id') + 1;
        return view('Dashboard.Instagrams.edit',compact('Instagram','ImageUpload'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $slug
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $slug)
    {
        // GET Instagram
        $Instagram = Instagram::where('slug', '=', $slug)->firstOrFail();

        $request->validate([
        'Title_en' => 'required',
        'body_en' => 'required',
        ]);

        $Instagram->Title_ar = $request->input('Title_ar');
        $Instagram->Title_en = $request->input('Title_en');
        $Instagram->Title_fr = $request->input('Title_fr');
        $Instagram->body_ar = $request->input('body_ar');
        $Instagram->body_en = $request->input('body_en');
        $Instagram->body_fr = $request->input('body_fr');
        $Instagram->ImageUpload_id = $request->input('ImageUpload_id');
        $Instagram->save();
        return redirect()->route('Instagrams.index')

                        ->with('success','City Updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Instagram Delete
        $Instagram = Instagram::findOrFail($id);
        $Instagram->delete();
        return back()->with('Delete','City deleted successfully');
    }
}
