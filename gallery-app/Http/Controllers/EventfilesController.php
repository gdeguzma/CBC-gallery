<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\File;

class EventfilesController extends Controller
{
    public function eventscreate(){
        return view('eventmaterials.create');
    }

    public function store(Request $request){
    	$this->validate($request,[
    		'name' => 'required',
    	]);
    	// Get filename with extension
    	$filenameWithExt = $request->file('eventfiles')->getClientOriginalName();

    	// Get just the filename
    	$filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);

    	// Get extensions
    	$extension = $request->file('eventfiles')->getClientOriginalExtension();

    	//Create new filename
    	$filenameToStore = $filename.'_'.time().'.'.$extension;

    	$path = $request->file('eventfiles')->storeAs('public/eventfile_list/', $filenameToStore);

    	//Upload File
    	$eventfile = new File;
    	$eventfile->name = $request->input('name');
    	$eventfile->note = $request->input('note');
    	$eventfile->size = $request->file('eventfiles')->getClientSize();
    	$eventfile->eventfiles = $filenameToStore;

    	$eventfile->save();

    	return redirect('/eventscreate')->with('success', 'file Uploaded');
    }
}
