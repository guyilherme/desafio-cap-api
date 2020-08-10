<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\ApiControllerTrait;
use Illuminate\Http\Request;

class UserController extends Controller
{
    use ApiControllerTrait;

    protected $relationships = ["conta"];
    protected $model;
    protected $rules = [
        'name' => 'required|min:3',
        'email' => 'required|unique:users',
    ];
  
    protected $messages = [
        'required' => ':attribute é obrigatório',
        'min' => ':attribute precisa de pelo menos :min caracteres'
    ];
  
    public function __construct(User $model)
    {
      $this->model = $model;
    }
}
