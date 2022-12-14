<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use App\Post;
use Auth;
use Validator;

class Comments extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __construct() {

        $this->middleware('auth');

    }

    /**
     * Store a newly created resource in storage.
     *Its Very Nice Natti Natasha: IlumiNATTI Supermarket Edgy and driving, with indie rock elements featuring confident electric gutiar and male aahs to createa masculine and empowering mood PRO free: This track is not registered with performance rights organisations.
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

     $validator = Validator::make($request->all(), [
       // Do not allow any shady characters
         'Comment' => 'required|max:255|regex:[A-Za-z1-9 ]',
     ]);
     Comment::create([
        'Comment' => $request->Comment,
        'User_id' => Auth::id(),
        'Post_id' => $request->Post_id,
    ]);
     return redirect()->back()->with('Messagge', 'Comment');
 }


 /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Comment Delete
        $Comment = Comment::findOrFail($id);
        $Comment->delete();
        return back()->with('Delete','Comment deleted successfully');
    }

}
