$(function() {

    
    $('#add-button').on("click", function(e){
        e.preventDefault();

        var data = {
            'bankName' :$('#bank').val(),
            'balance' : $('#balance').val(),
        };
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        console.log(data);
        $.ajax({
            url: 'Bank/Add',
            type: 'post',
            data: data,
            dataType: 'JSON',
            success: function (response) {
                console.log(response);
            }
        });
    })
    
    
  });