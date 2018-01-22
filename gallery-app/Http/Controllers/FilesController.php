<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\File;

class FilesController extends Controller
{

	 public function create(){
    	return view('importantfiles.create');
	}

	public function store(Request $request){
    	$this->validate($request,[
    		'name' => 'required',
    	]);

    	// Get filename with extension
    	$filenameWithExt = $request->file('file')->getClientOriginalName();

    	// Get just the filename
    	$filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);

    	// Get extensions
    	$extension = $request->file('file')->getClientOriginalExtension();

    	//Create new filename
    	$filenameToStore = $filename.'_'.time().'.'.$extension;

    	// Upload file
    	$path = $request->file('file')->storeAs('public/file_list/', $filenameToStore);

    	//Upload File
    	$file = new File;
    	$file->name = $request->input('name');
    	$file->note = $request->input('note');
    	$file->size = $request->file('file')->getClientSize();
    	$file->file = $filenameToStore;

    	$file->save();

    	return redirect('/create')->with('success', 'file Uploaded');
    }
}