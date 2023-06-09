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
@include('jarang.header_kisat')
        <div class="kentron">
    <div class="tvyalneri_lracum">
    <h1>Լռացրեք ձեր տվյալները</h1>
    <form action="" class="add_form">
 
 
    <div class="form-group">
 
  <!-- <input type="hidden" class="form-control" id="hamar"> -->
  <input type="hidden" id="hamar" name="hamar" value="{{$post->id}}">
</div>

<div class="form-group">
  <label for="anun">Անուն</label>
  <input type="text" class="form-control" id="anun">
</div>
  <div class="form-group">
  <label for="azganun">Ազգանուն</label>
  <input type="text" class="form-control" id="azganun">
</div>
<div class="form-group">
  <label for="qanak">Ապրանքի քանակը</label>
  <input type="number" class="form-control" id="qanak">
</div>
<div class="form-group">
  <label for="heraxos">Հեռախոսահամար</label>
  <input type="number" class="form-control" id="heraxos">
</div>



    <!-- <input type="text" placeholder="name">
    <input type="number" placeholder="length">
    <input type="number" placeholder="size"> -->
    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
<!-- {{csrf_token()}} -->
    <button type="submit" class="btn btn-primary add_button">add</button>

    </form>  


     <script src="{{asset('js/patver.js')}}"></script>
    </div>

</div>

</body>
</html>