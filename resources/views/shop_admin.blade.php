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
   <a href="patver_update"><h1>Ստացվատ պատվերները դիտեք այստեղ</h1></a>
    <form action="" class="add_form">
 <h1>shop admin</h1>
 <div class="form-group">
  <label for="nkar">nkar:</label>
  <input type="text" class="form-control" id="nkar">
</div>
<div class="form-group">
  <label for="vernagir">vernagir:</label>
  <input type="text" class="form-control" id="vernagir">
</div>
<div class="form-group">
  <label for="gin">gin:</label>
  <input type="number" class="form-control" id="gin">
</div>
    <div class="form-group">
  <label for="text">text:</label>
  <input type="text" class="form-control" id="text">
</div>



    
    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
<!-- {{csrf_token()}} -->
    <button type="submit" class="btn btn-primary add_button">add</button>

    </form>   

<a href="shop_update"><h1>թարմացնել կամ ջնջել</h1></a>
<a href="home_admin"><h1>հոմե էջի ադմինկա</h1></a>
<a href="com_edit"><h1>քեմենթնրի  ադմինկա</h1></a>


    <script src="{{asset('js/shop.js')}}"></script>
   
</body>
</html>

