<?php

namespace App\Http\Controllers\Dashboard;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\User; 
use App\AdSense;
use Auth; 
use File;
use Validator; 
use App\ImageUpload;

class Media extends Controller
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

       // GET 
       $Medias = ImageUpload::simplePaginate(100); 
       return view('Dashboard.Media.index',compact('Medias'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Media Delete
        $Media = ImageUpload::findOrFail($id);
        File::delete($Media->filename);
        $Media->delete();
        return back()->with('Delete','Media deleted successfully');
    }
}
