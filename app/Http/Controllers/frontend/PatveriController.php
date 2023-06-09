<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;

// use App\Http\Controllers\ShopController;
use App\Models\Shop;
use App\Models\Patver;
use Illuminate\Http\Request;

class PatveriController extends Controller
{
   public function index(){
       return view('shop_patver');
   }
   public function create(Request $request)
    {
 
    Patver::create([
        'hamar'=>$request->hamar,
        'anun'=>$request->anun,
        'azganun'=>$request->azganun,
        'qanak'=>$request->qanak,
        'heraxos'=>$request->heraxos
      
    ]);
    
    return response()->json([
        'status'=>'lava sax jishta grat'
    ]);
    
        
   }
}
