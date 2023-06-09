<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\Shop;
use App\Models\Patver;
class ShopController extends Controller
{
  public function index(){
      return view ('shop');
  }
  public function tesnel(){
    return view ('shop_admin');
  }
  public function create(Request $request)
  {
  
  Shop::create([
      'nkar'=>$request->nkar,
      'vernagir'=>$request->vernagir,
      'gin'=>$request->gin,
     
      'text'=>$request->text
  ]);
  
  return response()->json([
      'status'=>'lava sax jishta grat'
  ]);
  
      }

      public function model(){
        $shop=Shop::get();
      
        return view('shop',['shops'=>$shop]);
        // return view('link');
        
       
}

// public function modell(){
//     return view('shop_patver');
// }
public function link(Shop $post){
    return view('shop_patver',compact('post'));
}
public function indexx(){
    return view('shop_patver');
}
}
