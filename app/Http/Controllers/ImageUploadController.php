<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//ImageUploadController.php
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\User; 
use Auth; 
use File;
use Validator; 
use App\ImageUpload;
use App\Audio;

class ImageUploadController extends Controller
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
    
	public function fileCreate()
    {
        return view('Dashboard/imageupload');
    }
	
    public function fileStore(Request $request)
    {
        $image = $request->file('file');
        $uniqid = uniqid();
        $imageName = $uniqid.$image->getClientOriginalName();
        $image->move(public_path('images'),$imageName);
        $imageUpload = new ImageUpload();
        $images = 'images/';
        $imageUpload->filename = $images.$imageName;
        $imageUpload->save();
        return response()->json(['success'=>$imageName]);
    }

    public function AudioStore(Request $request)
    {
        $Audio = $request->file('file');
        $uniqid = uniqid();
        $AudioName = $uniqid.$Audio->getClientOriginalName();
        $Audio->move(public_path('Packages'),$AudioName);
        $AudioUpload = new Audio();
        $Audios = 'Packages/';
        $AudioUpload->filename = $Audios.$AudioName;
        $AudioUpload->save();
        return response()->json(['success'=>$AudioName]);
    }
	
    public function fileDestroy(Request $request)
    {
        $filename =  $request->get('filename');
        ImageUpload::where('filename',$filename)->delete();
        $path=public_path().'/images/'.$filename;
        if (file_exists($path)) {
            unlink($path);
        }
        return $filename;  
    }
	

	

	
}
