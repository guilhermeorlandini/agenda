<p><strong>Telefone : {{$contato->tel1}}</strong></p>
@if($contato->email)
    <p><strong>E-mail : {{$contato->email}}</strong></p>
@endif
@if($contato->tel2)
    <p><strong>Telefone2 : {{$contato->tel2}}</strong></p>
@endif
@if($contato->endereco1)
    <p><strong>Endereço : {{$contato->endereco1}}</strong></p>  
    <p><strong>CEP : {{$contato->cep1}}</strong></p>
    <p><strong>Cidade : {{$contato->cidade1}}</strong></p>
@endif
@if($contato->endereco2)
    <p><strong>Endereço : {{$contato->endereco2}}</strong></p>  
    <p><strong>CEP : {{$contato->cep2}}</strong></p>
    <p><strong>Cidade : {{$contato->cidade2}}</strong></p>
 @endif