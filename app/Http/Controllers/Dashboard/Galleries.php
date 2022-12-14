<?php

namespace App\Http\Controllers\Dashboard;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreGallery;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\User; 
use App\Gallery;
use App\ImageUpload;
use Auth;
use File;
use Validator; 

class Galleries extends Controller
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
         // GET Galleries
        $Galleries = Gallery::simplePaginate(10);
        return view('Dashboard.Galleries.index',compact('Galleries'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // GET dashboardRoles create
        return view('Dashboard.Galleries.create');
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

        Gallery::create([   
            'Title_en' => $request->Title_en, 
            'Title_ar' => $request->Title_ar, 
            'body_en' => $request->body_en,
            'Title_fr' => $request->Title_fr,
            'body_ar' => $request->body_ar,
            'body_fr' => $request->body_fr,
            'ImageUpload_id' => $ImageUpload
        ]);

            return redirect()->route('Galleries.index')

                        ->with('success','Team Store successfully.');
    }

   /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $slug
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        //To Get All Gallery 
        $Gallery = Gallery::where('slug', '=', $slug)->firstOrFail();
        $ImageUpload = ImageUpload::max('id') + 1;
        return view('Dashboard.Galleries.edit',compact('Gallery','ImageUpload'));
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
        // GET Gallery
        $Gallery = Gallery::where('slug', '=', $slug)->firstOrFail();
        $request->validate([
        'Title_en' => 'required',
        'body_en' => 'required',
        ]);

        $Gallery->Title_ar = $request->input('Title_ar');
        $Gallery->Title_en = $request->input('Title_en');
        $Gallery->Title_fr = $request->input('Title_fr');
        $Gallery->body_ar = $request->input('body_ar');
        $Gallery->body_en = $request->input('body_en');
        $Gallery->body_fr = $request->input('body_fr');
        $Gallery->ImageUpload_id = $request->input('ImageUpload_id');
        $Gallery->save();
        return redirect()->route('Galleries.index')

                        ->with('success','Team Updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Gallery Delete
        $Gallery = Gallery::findOrFail($id);
        $Gallery->delete();
        return back()->with('Delete','Team deleted successfully');
    }
}
