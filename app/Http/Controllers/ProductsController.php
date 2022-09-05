<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;
use Illuminate\Support\Facades\Validator;


class ProductsController extends Controller
{
    public function getAllOrderByName(Request $request){
        $produtos = Products::orderBy('nome')->get();
        return $produtos;
    }

    public function cadastrar(Request $request){
        //cria regras para validar os dados recebidos
        $validacao = $request->validate([
            'name' => 'required',
            'value' => 'required|numeric|gt:0',
            // 'quantify' => 'required|numeric|gt:0',
            // 'provider' => 'required',
            // 'description' => 'required',
        ]);
        if($validacao->fails()){
            return response()->json([
                'status' => 'ERRO',
                'titulo' => 'Erro de validação',
                'message' => $validacao->messages(),
            ], 400);
        }else{
            try {
                $produto = new Products();
                //preenche tomaticamente os campos no objeto produto 
                $produto->fill($request->all());//troquei por all
                //salva no BD
                $produto->save();
                return response()->json([
                    'status' => 'SUCESSO',
                    'titulo' => 'Cadastro de produto',
                    'message' => 'Produto cadastrado com sucesso!',
                ], 200);
            } catch (\Throwable $th) {
                return response()->json([
                    'status' => 'ERRO',
                    'titulo' => 'Erro ao cadastrar produto',
                    'message' => $th->getMessage(),
                ], 400);
            }
        }
    }
}
