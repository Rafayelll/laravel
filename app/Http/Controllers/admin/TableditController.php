<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use DB;

class TableditController extends Controller
{
    function index()
    {
    	$data = DB::table('homes')->get();
    	return view('table_edit', compact('data'));
    }

    function action(Request $request)
    {
    	if($request->ajax())
    	{
    		if($request->action == 'edit')
    		{
    			$data = array(
    				'nkar1'	=>	$request->nkar1,
                    'nkar2'		=>	$request->nkar2,
                    'nkar3'	=>	$request->nkar3,
                    'vernagir'		=>	$request->vernagir,
                    'nkar'	=>	$request->nkar,
    				'text'		=>	$request->text
    			);
    			DB::table('homes')
    				->where('id', $request->id)
    				->update($data);
    		}
    		if($request->action == 'delete')
    		{
    			DB::table('homes')
    				->where('id', $request->id)
    				->delete();
    		}
    		return response()->json($request);
    	}
    }
}
