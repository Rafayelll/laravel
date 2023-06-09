$('.add_form').submit(function(e){
    // e.preventDefault();
   alert('հաջողուցյանբ ձեր պատվերը գրանցվեց մեզ մոտ');
    
    
    let hamar= $('#hamar').val();
    let anun= $('#anun').val();
    let azganun= $('#azganun').val();
    let qanak= $('#qanak').val();
    let heraxos= $('#heraxos').val();
    // console.log(hamar,anun,azganun,qanak,heraxos);
    
    
    $.ajax({
       'url':'/addav_baza',
       'type':'Post',
       
    data:{
        hamar:hamar,
        anun:anun,
        azganun:azganun,
        qanak:qanak,
        heraxos:heraxos 
        
    },
    success:function(e){
        console.log(e);
        
    }, 
     headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    },
    })
    })