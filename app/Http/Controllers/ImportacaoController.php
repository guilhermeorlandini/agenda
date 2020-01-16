<?php

namespace App\Http\Controllers;

use App\Contato;
use Illuminate\Http\Request;
use App\Notifications\CreateUserNotification;
use Illuminate\Support\Facades\Notification;

class ImportacaoController extends Controller
{
    public function importacao()
    {
        return view('importacao.importacao');
    }

    public function importacaoVExpenses()
    {
        return view('importacao.vexpenses.importacaoVExpenses');
    }
    public function postContatos(Request $request)
    {
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $tel = $_POST['tel1'];
        $erro = [];

        if (isset($_POST['checkbox'])) {
            $checkboxs = $_POST['checkbox'];
            foreach ($checkboxs as $checkbox) {
                if (
                    !Contato::where([
                        'nome' => $nome[$checkbox],
                        'user_id' => auth()->id()
                    ])->first()
                ) {
                    $contatos = [
                        'nome' => $nome[$checkbox],
                        'email' => $email[$checkbox],
                        'tel1' => $tel[$checkbox]
                    ];
                    $contatos['user_id'] = auth()->id();
                    Contato::create($contatos);
                } else {
                    $erro[] = $nome[$checkbox];
                }
            }

            if (count($erro)) {
                $erros = implode(', ' , $erro);
                return back()
                    ->with('danger', "Não foi possível prosseguir: $erros já existe(m) na agenda.");
            } else {
                return redirect()->route('contatos.index')
                    ->with('success', 'Membro(s) Importado(s) com sucesso! :)');
            }
        } else {
            return back()
                ->with('warning', 'Você não selecionou nenhum membro :(');
        }
    }
}
