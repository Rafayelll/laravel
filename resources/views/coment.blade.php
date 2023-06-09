<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="{{asset('css/post.css')}}">

   <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>

<!-- Popper JS -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
@include('jarang.header')
   <div class="kentron">
   <div class="kentonakan">

     <form action="" class="add_form">
 <!-- <h1></h1> -->
 <span>Թողեք  մեկնաբանուցյուն</span>
 <hr>
 <div class="form-group">
  <label for="anun">Անուն</label>
  <input type="text" class="form-control" id="anun">
</div>
<div class="form-group">
  <label for="azganun">Ազգանուն</label>
  <input type="text" class="form-control" id="azganun">
</div>
<div class="form-group">

  <label for="coment">Կոմենտ</label>
  <!-- <input type="text" class="form-control" id="coment"> -->
  <textarea class="com" id="coment" name="coment" rows="4" cols="50"></textarea>

</div>
   

    <!-- <input type="text" placeholder="name">
    <input type="number" placeholder="length">
    <input type="number" placeholder="size"> -->
    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
<!-- {{csrf_token()}} -->
    <button type="submit" class="btn btn-primary add_button">add</button>

    </form>  
        </div>
         @foreach ($users as $user)
         <div class="comm">
        <h1>{{ $user->anun }}   {{ $user->azganun }}</h1>
     <p>{{ $user->coment }}</p>
     <hr>
     </div>


    @endforeach
   
       </div>
       
       @include('jarang.footer')
       <script src="{{asset('js/coment.js')}}"></script>
   </body>
</html>