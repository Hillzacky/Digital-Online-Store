<?php

namespace App\Http\Controllers\Dashboard;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCategory;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\User; 
use App\Category;
use Auth;
use File;
use Validator;  
  
class Categories extends Controller
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
          // GET Categories
          $Categories = Category::simplePaginate(10);
          return view('Dashboard.Categories.index',compact('Categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // GET Categories create
        return view('Dashboard.Categories.create');
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
        'parent_id' => 'required|max:255',
        'order' => 'required',
        'Title_en' => 'required',
        'color' => 'required',
        ]);

        Category::create([
            'parent_id' => $request->parent_id,  
            'order' => $request->order,   
            'Title_ar' => $request->Title_ar,  
            'Title_en' => $request->Title_en, 
            'Title_fr' => $request->Title_fr, 
            'color' => $request->color, 
        ]);
        return redirect()->route('Categories.index')

                        ->with('success','Category Store successfully.');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $slug
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        //To Get  Category 
        $Category = Category::where('slug', '=', $slug)->firstOrFail();
        return view('Dashboard.Categories.edit',compact('Category'));
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
        // GET Post
        $Category = Category::where('slug', '=', $slug)->firstOrFail();
        // GET validate
        $data = $request->validate([
         'Title_en' => 'required',
        ]);
        $Category->parent_id = $request->input('parent_id');
        $Category->order = $request->input('order');
        $Category->Title_ar = $request->input('Title_ar');
        $Category->Title_en = $request->input('Title_en');
        $Category->Title_fr = $request->input('Title_fr');
        $Category->color = $request->input('color');
        $Category->save();
        return redirect()->route('Categories.index')

                        ->with('success','Category Updated successfully.');
    }

    /**
     * Remove the specified resource trom storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Category Delete
        $Category = Category::findOrFail($id);
        $Category->delete();
        return back()->with('Delete','Category deleted successfully');
    }
}
