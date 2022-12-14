<?php

namespace App\Http\Controllers\Dashboard;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StorePost;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\ImageUpload;
use App\User; 
use App\Client; 
use App\Post; 
use App\Category;
use App\Instagram;
use Auth;
use File;
use Validator;

class Posts extends Controller
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

      // GET Posts
      $Posts = Post::latest()->with('Category')->with('User')->simplePaginate(10);
      return view('Dashboard.Posts.index',compact('Posts'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // GET Users
        $Users = User::all();
        // GET Categores
        $Categores = Category::all();
        return view('Dashboard.Posts.create',compact('Users','Categores'));
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
        'author_id' => 'required',
        'category_id' => 'required',
        'Title_en' => 'required',
        'body_en' => 'required',
        ]);

        $ImageUpload = ImageUpload::max('id');
        Post::create([
            'author_id' => $request->author_id,  
            'category_id' => $request->category_id,   
            'Title_ar' => $request->Title_ar,  
            'Title_en' => $request->Title_en, 
            'Title_fr' => $request->Title_fr,
            'body_ar' => $request->body_ar,  
            'body_en' => $request->body_en,
            'body_fr' => $request->body_fr, 
            'Downloud' => $request->Downloud,
            'featured' => $request->featured,
            'ImageUpload_id' => $ImageUpload
        ]);

            return redirect()->route('Posts.index')

                        ->with('success','Downloads Store successfully.');
    }
     /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $slug
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        //To Get All Post 
        $Post = Post::where('slug', '=', $slug)->firstOrFail();
        // Users
        $Users = User::all();
        // Categores
        $Categores = Category::all();
        // ImageUpload
        $ImageUpload = ImageUpload::max('id') + 1;
        return view('Dashboard.Posts.edit',compact('Post','Users','Categores','ImageUpload'));
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
        $Post = Post::where('slug', '=', $slug)->firstOrFail();
        // GET validate
        $data = $request->validate([
        'author_id' => 'required',
        'category_id' => 'required',
        'Title_en' => 'required',
        'body_en' => 'required',
        ]);

        $Post->author_id = $request->input('author_id');
        $Post->category_id = $request->input('category_id');
        $Post->Title_ar = $request->input('Title_ar');
        $Post->Title_en = $request->input('Title_en');
        $Post->Title_fr = $request->input('Title_fr');
        $Post->body_ar = $request->input('body_ar');
        $Post->body_en = $request->input('body_en');
        $Post->body_fr = $request->input('body_fr');
        $Post->Downloud = $request->input('Downloud');
        $Post->ImageUpload_id = $request->input('ImageUpload_id');
        $Post->save();
        return redirect()->route('Posts.index')

                        ->with('success','Downloud Updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Post Delete
        $Post = Post::findOrFail($id);
        $Post->delete();
        return back()->with('Delete','Downloud deleted successfully');
    }
}
