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
}
