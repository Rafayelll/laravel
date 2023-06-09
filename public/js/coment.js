$('.add_form').submit(function(e){
    // e.preventDefault();
//    alert('հաջողուցյանբ ձեր պատվերը գրանցվեց մեզ մոտ');
    
    
    let anun= $('#anun').val();
    let azganun= $('#azganun').val();
    let coment= $('#coment').val();
   
    // console.log(hamar,anun,azganun,qanak,heraxos);
    
    
    $.ajax({
       'url':'/add_coment',
       'type':'Post',
       
    data:{
        
        anun:anun,
        azganun:azganun,
        coment:coment 
        
    },
    success:function(e){
        console.log(e);
        
    }, 
     headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    },
    })
    })