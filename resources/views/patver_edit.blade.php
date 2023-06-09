<html>
  <head>
  <link rel="stylesheet" href="{{asset('css/post.css')}}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Live Table Edit Delete Mysql Data using Tabledit Plugin in Laravel</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>            
    <script src="https://markcell.github.io/jquery-tabledit/assets/js/tabledit.min.js"></script>
  </head>
  <body>
  @include('jarang.header_kisat')
    <div class="container">
      <br />
      <h3 align="center">Բոլոր պատվերները մեկ տեղում</h3>
      <br />
      <div class="panel panel-default">
        <div class="panel-heading">
         
        </div>
        <div class="panel-body">
          <div class="table-responsive">
            @csrf
            <table id="editable" class="table table-bordered table-striped">
              <thead>
                <tr>
                <th>ID</th>
                  
                  <th>hamar</th>
                  <th>anun</th>
                  <th>azganun</th>
                  <th>qanak</th>
                  <th>heraxos</th>

                </tr>
              </thead>
              <tbody>
                @foreach($data as $row)
                <tr>
               
                  <td> {{ $row->id }}</td>
                  <td>{{ $row->hamar }}</td>
                  <td>{{ $row->anun }}</td>
                  <td>{{ $row->azganun }}</td>
                  <td>{{ $row->qanak }}</td>
                  <td>{{ $row->heraxos }}</td>
                
                  
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    
  </body>
</html>

<script type="text/javascript">
$(document).ready(function(){
   
  $.ajaxSetup({
    headers:{
      'X-CSRF-Token' : $("input[name=_token]").val()
    }
  });

  $('#editable').Tabledit({
    url:'{{ route("patver_post.action") }}',
    dataType:"json",
    columns:{
      identifier:[0, 'id'],
      editable:[[1, 'hamar'], [2, 'anun'], [3, 'azganun'],[4,'qanak'],[5,'heraxos']]
    },
    restoreButton:false,
    onSuccess:function(data, textStatus, jqXHR)
    {
      if(data.action == 'delete')
      {
        $('#'+data.id).remove();
      }
    }
  });

});  
</script>
