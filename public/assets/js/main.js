$('#createUser').click(function(){

    var name = ($('#name').val()).trim(),
        email = ($('#email').val()).trim(),
        file = $('#file').val(),
        error = false;

    if (name == '')
    {
        $('#name').addClass('is-invalid');
        error = true;
    } else {
        $('#name').removeClass('is-invalid');
    }

    if (email == '')
    {
        $('#email').addClass('is-invalid');
        error = true;
    } else {
        $('#email').removeClass('is-invalid');
    }

    if (file == '')
    {
        $('#file').addClass('is-invalid');
        error = true;
    } else {
        $('#file').removeClass('is-invalid');
    }

    if (!error)
    {
        $.ajax({
            url: url + "user/getMail",
            type: 'GET',
            data: {
                email: $('#email').val()
            },
            success: function(result){
                
                if (result == 0)
                {
                    var file = $('#file').prop('files')[0];

                    form = new FormData();
                    form.append('file', file);
                    form.append('name', $('#name').val());
                    form.append('email', $('#email').val());
                    form.append('fileTs', $('#file').val());

                    $.ajax({
                        url: url + "user/create",
                        data: form,
                        processData: false,
                        contentType: false,
                        type: 'POST',
                        success: function (result) {
                           var data = JSON.parse(result);
                           
                           if (data.status)
                           {
                                swal({
                                    title: "Sucesso!",
                                    text: data.message,
                                    type: "success"
                                  }, function () {
                                    window.location.href = url+'user/create';
                                  });
                           }else {
                                swal('Erro!', data.message, "error");
                           }
                        }
                    });
                  
                } else {
                    swal("Erro!", "E-mail já cadastrado.", "error");
                }
    
            }
        });
    }
    
    
});

$('.votar').click(function(){
    var id = $(this).data('id');

    $.ajax({
        url: url + "vote/insert",
        type: 'POST',
        data: {
            id: id
        },
        success: function(result){
            var data = JSON.parse(result);
            
            if (data.status)
            {
                swal("Sucesso!", data.message, "success");
            }else {
                swal('Erro!', data.message, "error");
            }

        }
    });
    
});

