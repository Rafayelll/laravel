<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="{{asset('css/post.css')}}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @include('jarang.header')
    
    
   
    <div class="kentron">
    
 


<h2 style="text-align:center">Հագուստների լայն տեսականի</h2>
@foreach ($shops as $shop)
<div class="cardd">
  <img class="producti_nkar" src="{{$shop->nkar}}" alt="Denim Jeans" style="width:100%">
  <h1>{{$shop->vernagir}}</h1>
  <p class="price">{{$shop->gin}} դրամ</p>
  <p>{{$shop->text}}</p>
  
  <a href= "{{ url('shop_vajarq/'.$shop->id) }}" ><p><button>Add to Cart</button></p> </a >
</div>

 @endforeach


<h1 class="taki_git">-</h1>


    </div>
    @include('jarang.footer')
</body>
</html>