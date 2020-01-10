@if($total_row > 0)
    @foreach($contatos as $contato)
            <tr>
                <td>
                    <a href="{{route ('contatos.show' , $contato->id) }}" class="text-light">
                        {{ $contato->nome }}
                    </a>
                </td>
                <td>
                    <a href="{{route ('contatos.show' , $contato->id) }}" class="text-light">
                        {{ $contato->email }}
                    </a>
                </td>
                <td>
                    <a href="{{route ('contatos.show' , $contato->id) }}" class="text-light">
                        {{ $contato->tel1 }}
                    </a>
                </td>
            </tr>
    @endforeach
@else
    <tr>
        <td colspan="5">Sem resultados :( </td>
    </tr>
@endif
