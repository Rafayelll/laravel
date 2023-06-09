<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use DB;

class CommeditController extends Controller
{
    function index()
    {
    	$data = DB::table('coments')->get();
    	return view('comm_edit', compact('data'));
    }

    function action(Request $request)
    {
    	if($request->ajax())
    	{
    		if($request->action == 'edit')
    		{
    			$data = array(
    				'anun'	=>	$request->anun,
					'azganun'		=>	$request->azganun,
					'coment'		=>	$request->coment
    			);
    			DB::table('coments')
    				->where('id', $request->id)
    				->update($data);
    		}
    		if($request->action == 'delete')
    		{
    			DB::table('coments')
    				->where('id', $request->id)
    				->delete();
    		}
    		return response()->json($request);
    	}
    }
}
