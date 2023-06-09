<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use DB;

class PatvereditController extends Controller
{
    function index()
    {
    	$data = DB::table('patvers')->get();
    	return view('patver_edit', compact('data'));
    }

    function action(Request $request)
    {
    	if($request->ajax())
    	{
    		if($request->action == 'edit')
    		{
    			$data = array(
    				'hamar'	=>	$request->hamar,
					'anun'		=>	$request->anun,
					'azganun'		=>	$request->azganun,
					'qanak'		=>	$request->qanak,
					'heraxos'		=>	$request->heraxos
    			);
    			DB::table('patvers')
    				->where('id', $request->id)
    				->update($data);
    		}
    		if($request->action == 'delete')
    		{
    			DB::table('patvers')
    				->where('id', $request->id)
    				->delete();
    		}
    		return response()->json($request);
    	}
    }
}
