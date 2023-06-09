
$('.add_form').submit(function(e){
    e.preventDefault();




    let name= $('#name').val();
    let length= $('#length').val();
    let size= $('#size').val();



    $.ajax({
        'url':'/add_post',
        'type':'Post',
        data:{
            name,
            length,
            size 
        },
        success:function(e){
            console.log(e);
            
        }, 
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
    })
})
//-----------------------------------------------------
// function openNav() {
//     document.getElementById("myNav").style.height = "100%";
//   }
  
//   function closeNav() {
//     document.getElementById("myNav").style.height = "0%";
//   }
 




















  $('.add_form').submit(function(e){
    e.preventDefault();
    
    
    
    let nkar1= $('#nkar1').val();
    let nkar2= $('#nkar2').val();
    let nkar3= $('#nkar3').val();
    let vernagir= $('#vernagir').val();
    let nkar= $('#nkar').val();
    let text= $('#text').val();
    // console.log(nkar1,nkar2,nkar3,vernagir,nkar,text);
    
    
    $.ajax({
       'url':'/add_home',
       'type':'Post',
       
    data:{
        nkar1:nkar1,
        nkar2:nkar2,
        nkar3:nkar3,
        vernagir:vernagir,
        nkar:nkar,
        text:text 
        
    },
    success:function(e){
        console.log(e);
        
    }, 
     headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    },
    })
    })
    //-----------------------------------------------------

   