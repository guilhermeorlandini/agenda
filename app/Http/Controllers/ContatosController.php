<?php

namespace App\Http\Controllers;

use App\Contato;
use Illuminate\Http\Request;
use App\Http\Requests\StoreContato;
use DB;

class ContatosController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $contatos = Contato::where('user_id', auth()->id())->get();
        return view('contatos.index', compact('contatos'));
    }


    public function create()
    {
        return view('contatos.create');
    }


    public function store(StoreContato $request)
    {
        $contatos = $request->all();
        $contatos['user_id'] = auth()->id();
        Contato::create($contatos);

        return redirect()->route('contatos.index')
            ->with('success', 'Contato criado com sucesso! :)');
    }


    public function show($id)
    {
        $contato = Contato::find($id);
        return view('contatos.show')
            ->with('contato', $contato);
    }

    public function edit($id)
    {
        $contato = Contato::find($id);
        return view('contatos.edit')
            ->with('contato', $contato);
    }


    public function update(StoreContato $request, $id)
    {
        $contatos = $request->all();
        $contatos['user_id'] = auth()->id();


        $contato = Contato::find($id);
        $contato->update($contatos);

        return redirect()->route('contatos.index')
            ->with('success', 'Contato editado com sucesso! :)');
    }


    public function destroy($id)
    {
        $contato = Contato::find($id)->delete();
        return redirect()->route('contatos.index')
            ->with('warning', 'Contato excluído com sucesso!');
    }

    public function action(Request $request)
    {
        $orderBy = $request->get('order');
        switch ($orderBy) {
            case 1:
                    $order = 'nome';
                    $ascOrDesc = 'asc';
                break;
            case 2:
                    $order = 'nome';
                    $ascOrDesc = 'desc';
                break;
            case 3:
                    $order = 'created_at';
                    $ascOrDesc = 'asc';
                break;
            case 4:
                    $order = 'created_at';
                    $ascOrDesc = 'desc';
                break;
            default:
                    $order = 'nome';
                    $ascOrDesc = 'asc';
        }
        $data = [];
        if ($request->ajax()) {
            $query = $request->get('query');
            if ($query != '') {
                $contatos = Contato::where('user_id', auth()->id())
                    ->where(function ($q) use ($query) {
                        $q->where('nome', 'like', '%' . $query . '%')
                        ->orWhere('tel1', 'like', '%' . $query . '%')
                        ->orWhere('email', 'like', '%' . $query . '%');
                    })
                    ->orderBy($order, $ascOrDesc)
                    ->get();
            } else {
                $contatos = Contato::where('user_id', auth()->id())
                    ->orderBy($order, $ascOrDesc)
                    ->get();
            }
            $total_row = $contatos->count();

            $data = [
                'table_data'  => view(
                    'partials.rowIndex',
                    compact('total_row', 'contatos')
                )->render(),
                'total_data'  => $total_row
            ];
        }
        echo json_encode($data);
    }
}
