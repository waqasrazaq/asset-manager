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

    /**
     * [Validates the user input and save it into database]
     * @param Request $request http request object
     */
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

    /**
     * [Fetch asset information from databse and pass it to update view]
     * @param int $id ID of the asset
     */
    public function update($id) {
        $assets = Asset::find($id);
        
        return view('update', ['assets'=>$assets]);
    }

    /**
     * [Validates the user input and update specific asset in database]
     * @param Request $request http request object
     * @param int $id ID of the asset
     */
    public function edit(Request $request, $id) {        
        
        $this->validate($request, [
            'label' => 'required',
            'description' => 'required',
            'type' => 'required',
            'status' => 'required',
            'owner' => 'required'
        ]);

        $data = array(
            'label' => $request->input('label'),
            'description' => $request->input('description'),
            'type' => $request->input('type'),
            'status' => $request->input('status'),
            'owner' => $request->input('owner')
        );

        Asset::where('id', $id)->update($data);
        return redirect('/')->with('info', 'Asset Updated Successfully');
    }

    /**
     * [Fetch asset information from databse and pass it to read view]
     * @param int $id ID of the asset
     */
    public function read($id) {
        $assets = Asset::find($id);
        
        return view('read', ['assets'=>$assets]);
    }

    /**
     * [Delete an asset from databse associated by passed id]
     * @param int $id ID of the asset
     */
    public function delete($id) {
        $assets = Asset::where('id', $id)->delete();
        
        return redirect('/')->with('info', 'Asset Deleted Successfully');
    }
}
