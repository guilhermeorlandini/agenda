// CEP AJAX
$('.cep').click(function(){
    cep = $('[name="cep1"]').val();
    $.ajax({
        url:`https://viacep.com.br/ws/${cep}/json/unicode/`,
        dataType: 'jsonp',
        success:function(result){
            $('[name="endereco1"]').val(result['logradouro']);
            $('[name="cidade1"]').val(result['localidade']);
        },
        error:function(){
            alert('CEP Inválido!');
        }
    });
})

$('.cep2').click(function(){
    cep2 = $('[name="cep2"]').val();
    $.ajax({
        url:`https://viacep.com.br/ws/${cep2}/json/unicode/`,
        dataType: 'jsonp',
        success:function(result){
            $('[name="endereco2"]').val(result['logradouro']);
            $('[name="cidade2"]').val(result['localidade']);
        },
        error:function(){
            alert('CEP Inválido!');
        }
    });
})