<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Asset;

/**
 * [Controls all the requests related to assets. For example listings, add new, update existing and delete an asset]
 */
class AssetsController extends Controller
{
	/**
	 * [Fetches the list of assets and return view for home page]
	 * @return []
	 */
    public function home() {
    	$assets = Asset::all();
    	
    	return view('home', ['assets'=>$assets]);
    }


    public function add(Request $request) {
    	$this->validate($request, [
    		'label' => 'required',
    		'description' => 'required',
    		'type' => 'required',
    		'status' => 'required',
    		'owner' => 'required'
    	]);
    	
    	$asset = new Asset;
    	$asset->label = $request->input('label');
    	$asset->description = $request->input('description');
    	$asset->type = $request->input('type');
    	$asset->status = $request->input('status');
    	$asset->owner = $request->input('owner');

    	$asset->save();
    	return redirect('/')->with('info', 'Asset Saved Successfully');
    }
}
