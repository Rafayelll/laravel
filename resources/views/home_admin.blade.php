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
   
    <form action="" class="add_form">
 <h1>home admin</h1>
 <div class="form-group">
  <label for="nkar1">nkar1:</label>
  <input type="text" class="form-control" id="nkar1">
</div>
<div class="form-group">
  <label for="nkar2">nkar2:</label>
  <input type="text" class="form-control" id="nkar2">
</div>
<div class="form-group">
  <label for="nkar3">nkar3:</label>
  <input type="text" class="form-control" id="nkar3">
</div>
    <div class="form-group">
  <label for="vernagir">vernagir:</label>
  <input type="text" class="form-control" id="vernagir">
</div>
<div class="form-group">
  <label for="nkar">nkar:</label>
  <input type="text" class="form-control" id="nkar">
</div>
<div class="form-group">
  <label for="text">text:</label>
  <input type="text" class="form-control" id="text">
</div> 


    <!-- <input type="text" placeholder="name">
    <input type="number" placeholder="length">
    <input type="number" placeholder="size"> -->
    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
<!-- {{csrf_token()}} -->
    <button type="submit" class="btn btn-primary add_button">add</button>

    </form>   
    <a href="shop_admin"><h1>Շոփ եջի ադմինկա</h1></a>
    <a href="com_edit"><h1>քոմենթների ադմինկա</h1></a>
<a href="update"><h1>update</h1></a>

    <script src="{{asset('js/post.js')}}"></script>
   
</body>
</html>

