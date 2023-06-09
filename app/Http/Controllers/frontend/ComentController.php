<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Coment;
use Illuminate\Support\Facades\DB;

class ComentController extends Controller
{
public function index(){
    return view ('coment');
}
public function create(Request $request)
{

Coment::create([
    'anun'=>$request->anun,
    'azganun'=>$request->azganun,
    'coment'=>$request->coment
   
]);

return response()->json([
    'status'=>'lava sax jishta grat'
]);

    }
    public function model(){
        $users = DB::table('coments')->get();

        return view('coment', ['users' => $users]);
       
    }
}
