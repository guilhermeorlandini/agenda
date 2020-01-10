// Input Email //
$(document).ready(function () {
    $('#addInputEmail').click(function (event) {
        event.preventDefault();
        $('#inputEmail').show();
        $('#addInputEmail').hide();
    });
});
//


// Input Telefone Extra
$(document).ready(function () {
    $('#addInputTelefone').click(function (event) {
        event.preventDefault();
        $('#inputTelefone').show();
        $('#addInputTelefone').hide();
    });
});

// Input Endereço
$(document).ready(function () {
    $('#addInputEndereco').click(function (event) {
        event.preventDefault();
        $('.inputEnd').show();
        $('#addInputEnderecoExtra').show();
        $('#addInputEndereco').hide();
    });
});

// Input Endereço Extra
$(document).ready(function () {
    $('#addInputEnderecoExtra').click(function (event) {
        event.preventDefault();
        $('.inputEndEx').show();
        $('#addInputEnderecoExtra').hide();
    });
});

