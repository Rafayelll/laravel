<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>


@include('jarang.header')

<br>
<div class="linki_nkarneri_div">
<img class="linki_nkar" src="{{$post->nkar1}}" alt="">
<img class="linki_nkar" src="{{$post->nkar2}}" alt="">
<img class="linki_nkarr" src="{{$post->nkar3}}" alt="">
</div>
<div class="nkaragrucyun">
<h1 class ="vernagir">{{$post->vernagir}}</h1>
<img class="posti_nkarner" src="{{$post->nkar}}" alt="">
 <p class="text">{{$post->text}}</p>
 <br>
 <br>
 <br>
</div>

@include('jarang.footer')
</body>
</html>