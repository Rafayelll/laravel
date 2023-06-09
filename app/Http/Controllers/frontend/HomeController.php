<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\Home;
use Illuminate\Support\Facades\URL;

use App\Http\Requests\HomeRequest;

class HomeController extends Controller
{
    public function index()
    {
    //  return view(view'index');
    return view('home_admin'); 
 
    }
    public function create(HomeRequest $request)
{

Home::create([
    'nkar1'=>$request->nkar1,
    'nkar2'=>$request->nkar2,
    'nkar3'=>$request->nkar3,
    'vernagir'=>$request->vernagir,
    'nkar'=>$request->nkar,
    'text'=>$request->text
]);

return response()->json([
    'status'=>'lava sax jishta grat'
]);

    }
    public function model(){
        $home=Home::get();
      
        return view('home',['homes'=>$home]);
        // return view('link');
        
       
}
public function link(Home $post)
{
//  return view(view'index');
// $home = Home::find(4);
// $home=Home::get();
// return view('link',['homes'=>$home]);

return view('link',compact('post'));


}
}
