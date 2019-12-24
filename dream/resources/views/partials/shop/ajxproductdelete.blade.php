<input id="delete" type="hidden" name="_token" value="{{csrf_token()}}">
<script type="text/javascript">
  function del (spcn){
    $.ajax({
            type: "POST",
            url: '/shopmanage/{{$shop->id}}/product/private/destroy',
            data: {
              spcn: spcn,
              _token:$('#delete').val(),
               
            },
            dataType: 'html',
            success: function(response){

            }
  });
  }
</script>