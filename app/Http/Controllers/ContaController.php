<?php

namespace App\Http\Controllers;

use App\Conta;
use App\Http\Controllers\ApiControllerTrait;
use Illuminate\Http\Request;

class ContaController extends Controller
{
    use ApiControllerTrait;

    protected $relationships = ["user"];
    protected $model;
    protected $rules = [
        'numero' => 'required',
        'valor' => 'required',
    ];
  
    protected $messages = [
        'required' => ':attribute é obrigatório',
    ];
  
    public function __construct(Conta $model)
    {
      $this->model = $model;
    }

    public function deposito(Request $request, $id)
    {
        $result = $this->model->findOrFail($id);
        $result->increment('valor', $request->valor);
  
        return response()->json($result);
    }

    public function saque(Request $request, $id)
    {
        $result = $this->model->findOrFail($id);
        if ($request->valor <= $result->valor) {
            $result->decrement('valor', $request->valor);
            return response()->json($result);
        }
        return abort(500, 'Saque não autorizado');
    }
}
