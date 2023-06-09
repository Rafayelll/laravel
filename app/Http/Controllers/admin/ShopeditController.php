<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use DB;

class ShopeditController extends Controller
{
    function index()
    {
    	$data = DB::table('shops')->get();
    	return view('shop_edit', compact('data'));
    }

    function action(Request $request)
    {
    	if($request->ajax())
    	{
    		if($request->action == 'edit')
    		{
    			$data = array(
    				'nkar'	=>	$request->nkar,
					'vernagir'		=>	$request->vernagir,
					'gin'		=>	$request->gin,
					'text'		=>	$request->text
    			);
    			DB::table('shops')
    				->where('id', $request->id)
    				->update($data);
    		}
    		if($request->action == 'delete')
    		{
    			DB::table('shops')
    				->where('id', $request->id)
    				->delete();
    		}
    		return response()->json($request);
    	}
    }
}
