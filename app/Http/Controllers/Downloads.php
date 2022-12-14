<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\User;
use App\Category;
use App\Gallery;
use App\Comment;
use Auth;

class Downloads extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // To Get Change The Downloads
        $Downloads =  Post::oldest()->simplepaginate(15);
        // To Get Change The Teams
        $Teams =  Gallery::oldest()->paginate(10);
        return view('Pages.Downloads.index',compact('Downloads','Teams'));
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $slug
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        // This query to get Downloads page //
        $Download = Post::where('slug', '=', $slug)->firstOrFail();
        //To Get Comments 
        $Comments = $Download->Comments; 
        // To Get Change The Teams
        $Teams =  Gallery::oldest()->paginate(10);
        // To Get Change The Language
        return view('Pages.Downloads.show',compact('Download','Comments','Teams'));
    }
}
