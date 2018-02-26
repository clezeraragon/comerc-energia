<?php

namespace ComercEnergia\Http\Controllers;

use ComercEnergia\Models\GestaoNumero;
use ComercEnergia\Util\Util;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class GestaoDeNumeroController extends Controller
{

    private $gestaoNumero;

    public function __construct(GestaoNumero $gestaoNumero)
    {
        $this->gestaoNumero = $gestaoNumero;
    }

    public function index()
    {
        return view('gestao-numero.index');
    }

    public function create()
    {
        return view('gestao-numero.create');
    }
    public function edit($id)
    {
        $results = $this->gestaoNumero->find($id);
        return view('gestao-numero.edit',compact('results'));
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $data['option_gestao_id'] = $data['option'];
        $data['valor'] = Util::formatMoeda($data['number']);
        $this->gestaoNumero->create($data);

        return redirect()->route('gestao.numero')->with('success', 'Registro Criado com sucesso!');
    }
    public function update(Request $request,$id)
    {
        $data = $request->all();
        $data['option_gestao_id'] = $data['option'];
        $data['valor'] = Util::formatMoeda($data['number']);
        $this->gestaoNumero->find($id)->update($data);

        return redirect()->route('gestao.numero')->with('success', 'Registro Atualizado com sucesso!');
    }

    public function delete($id)
    {
        $this->gestaoNumero->find($id)->delete();
        return redirect()->route('gestao.numero')->with('success', 'Registro Deletado com sucesso!');
    }


    public function datatablesAjax()
    {
        $results = $this->gestaoNumero->with('option_gestao_numero')->select('gestao_numero.*');

        return DataTables::of($results)
            ->addColumn('action', function ($results) {
                return '<a href="' . route('gestao.edit',$results->id) .
                         '" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-edit"></i> Edit</a>
                       <a href="' . route('gestao.delete',$results->id) .
                         '" class="btn btn-xs btn-danger"><i class="glyphicon glyphicon-remove"></i> Delete</a>';
            })
            ->editColumn('valor', function ($results) {
                return Util::formatViewValor($results->valor);
            })
            ->make(true);
    }

}
