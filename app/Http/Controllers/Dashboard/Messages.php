<?php

namespace App\Http\Controllers\Dashboard;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreMessage;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\User; 
use App\Message;
use Auth;
use File;
use Validator;

class Messages extends Controller
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
        // GET Message
       $Messages = Message::simplePaginate(10); 
       return view('Dashboard.Messages.index',compact('Messages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // GET dashboardRoles create
        return view('Dashboard.Messages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
         Message::create([  
            'Subject' => $request->Subject,  
            'name' => $request->name, 
            'mail' => $request->mail,
            'Message' => $request->Message,  
            'User_id' => $request->User_id
        ]);

            return redirect()->route('Messages.index')

                        ->with('success','Message Store successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
    public function destroy($id)
    {
        // Message Delete
        $Message = Message::findOrFail($id);
        $Message->delete();
        return back()->with('Delete','Message deleted successfully');
    }
}
