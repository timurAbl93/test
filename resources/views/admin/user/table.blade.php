<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="/bootstrap-3.3.7-dist/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="/bootstrap-3.3.7-dist/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script src="/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
<table class="table table table-condensed">
    <thead>
        <tr class="active">
            <th>icon</th>
            <th>date</th>
            <th>name</th>
            <th>phone</th>
            <th>email</th>
        </tr>
    </thead>
    <tbody class="table-hover">
        @foreach ($data as $item)
        <tr data-id ="{{ $item->id}}" class="submit">
            <td></td>          
            <td class="date">{{ $item->date}}</td>          
            <td class="name">{{ $item->name}}</td>          
            <td class="phone">{{ $item->phone}}</td>          
            <td class="email">{{ $item->email}}</td>          
        </tr>
        @endforeach
        
    </tbody>
</table>

<script type="text/javascript">
    $(document).ready(function(){
        $('tr.submit').click(function(event){
            
            $('#result-table tbody').html('');
            var id ;
            id = $(this).attr('data-id');
     
            $.ajax({
                
                url: '/admin/user/table/show',
                type: 'GET',
                
                data:
                {
                    id: id,
                },
                success: function(data){
                    
                    for (var key in data[0])
                    {
                        $('#result-table tbody').append("<tr>" + "<td>" + key + 
                                                        "</td>" + '<td>' + data[0][key] +
                                                        '</td>' + "</tr>");     
                    }    
                }
            });
            
        });
    });
    
   
</script>

<table border="1" width="50%" cellpadding="5" id='result-table' class="table">
    
    <tbody></tbody>   
</table>