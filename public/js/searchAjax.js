
// Ajax Search
$(document).ready(function(){
    
    searchContatos();
   
    function searchContatos(query = '')
    {
     $.ajax({
      url:"/contatos/action/search",
      method:'GET',
      data:{query:query},
      dataType:'json',
      success:function(data)
      {
       $('tbody').html(data.table_data);
       $('#total_records').text(data.total_data);
      }
     })
    }
        // BUSCAR CONTATO
        $(document).on('keyup', '#search', function(){
            var query = $(this).val();
                searchContatos(query);
        });
});

// Ajax Order
$(document).ready(function(){
    
  orderContatos();
 
  function orderContatos(order = '')
  {
   $.ajax({
    url:"/contatos/action/order",
    method:'GET',
    data:{order:order},
    dataType:'json',
    success:function(data)
    {
     $('tbody').html(data.table_data);
     $('#total_records').text(data.total_data);
    }
   })
  }
// Ordenar Contato
$("select.order").change(function(){
    var order = $(this).children("option:selected").val();
        orderContatos(order);
    });
});
