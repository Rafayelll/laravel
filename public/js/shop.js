

  $('.add_form').submit(function(e){
    e.preventDefault();
    
    
    
    let nkar= $('#nkar').val();
    let vernagir= $('#vernagir').val();
    let gin= $('#gin').val();
    let text= $('#text').val();
    // console.log(nkar1,nkar2,nkar3,vernagir,nkar,text);
    
    
    $.ajax({
       'url':'/add_shop',
       'type':'Post',
       
    data:{
        nkar:nkar,
        vernagir:vernagir,
        gin:gin,
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