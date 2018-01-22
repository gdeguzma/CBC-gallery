<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Photo;

class DownloadController extends Controller
{
    
    public function downfunc(){
    	$downloads=DB::table('Photos')->get();
    	return view('download.viewfile',compact('downloads'));
    }

    public function download($id){
    	$photo = Photo::find($id);
    	return response()->download(public_path('storage\photos\4\\'.$photo->photo));
    	// return response()->download(public_path('storage/photos/'.$photo->album_id.'/'.$photo->photo));
    }
 
    public function getdownload(){
    	$filedownload = DB::table('files')->get();
    	return view('importantfiles.create')->with('filedownload',$filedownload);
    }

    public function getevents(){
        $eventsdownload=DB::table('eventfiles')->get();
        return view('eventmaterials.create')->with('eventsdownload',$eventsdownload);
    }
}
