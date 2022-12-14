<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\ImageUpload;
use App\User; 
use App\Category;
use App\Gallery;
use App\Post;
use Auth;
use File;
use Validator; 

class HomeController extends Controller
{
      /** 
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
    	$Categories =  Category::all();
        $Downloads =  Post::oldest()->simplePaginate(15);
        $Teams =  Gallery::oldest()->paginate(10);
        return view('Pages/home',compact('Downloads','Categories','Teams'));
    }

     /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function Contact()
    {
        return view('Pages/Contact');
    }

}
