$('#busca').click(function(){
    $('#aguarde').show();
    $("body").css("cursor", "progress");
    token = $('[name="token"]').val();
    $.ajax({
        url:"https://api.vexpenses.com/v2/team-members",
        type: 'GET',
        dataType: 'json',
        contentType: "application/json",
        headers: {"Authorization": token},
        success:function(result){
            $('#aguarde').hide();
            $('.select').show();
            $('.token').hide();
            $("body").css("cursor", "default");
            $('#tableVex').show();
            $('#tableVexRow').html('');
            result.data.forEach(
                function(usuario, posicao){
                    if(!usuario.phone1){
                        usuario.phone1 = ''
                    }
                    $('#tableVexRow').append(`
                            <tr>
                                <td>
                                <input type="checkbox" name="checkbox[]" value="${posicao}">
                                </td>
                                <td>
                                    <input type="hidden" name="nome[]" value="${usuario.name}">
                                        ${usuario.name}
                                </td>
                                <td>
                                    <input type="hidden" name="email[]" value="${usuario.email}">
                                        ${usuario.email}
                                </td>
                                <td>
                                    <input type="hidden" name="tel1[]" value="${usuario.phone1}">
                                        ${usuario.phone1}
                                </td>
                            </tr>`
                    );
                }
            );
        },
        error:function(){
            $('#aguarde').hide();
            $("body").css("cursor", "default");
            alert('Token Inválido!');
        }
    });
})


// CHECKS BOXES
$('.checkAll').click(function(){
    $('[type="checkbox"]').prop('checked', true);
});

$('.uncheckAll').click(function(){
    $('[type="checkbox"]').prop('checked', false);
});