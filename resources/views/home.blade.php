<link rel="stylesheet" href="{{asset('css/post.css')}}">

@include('jarang.header')
<div class="kentron">
<div class="slideshow-container">
@foreach ($homes as $home)
<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img class="tertvox_nkar" src="{{$home->nkar1}}" width="100%" height="300">
  <div class="text">Caption Text</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img class="tertvox_nkar" src="{{$home->nkar2}}" width="100%" height="300">
  <div class="text">Caption Two</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img class="tertvox_nkar" src="{{$home->nkar3}}" width="100%" height="300">
  <div class="text">Caption Three</div>
</div>
@endforeach
<a class="prev" onclick="plusSlides(-1)">❮</a>
<a class="next" onclick="plusSlides(1)">❯</a>

</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 

</div>

<script>
let slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>




<br>




@foreach ($homes as $home)

    <div class="content">
     <h1 class ="vernagir">{{$home->vernagir}}</h1>
     <img class="posti_nkarner" src="{{$home->nkar}}" alt="">
   <p class="text">{{substr($home->text,0,790)}}...
   <a href= "{{ url('link/'.$home->id) }}" >Read More </a >
     
      </p>
</div>
@endforeach



 



         <script src="{{asset('js/post.js')}}"></script>
  


  <br>
  <br>
  <br>
  <br>

</div>
@include('jarang.footer')

</body>
</html>
