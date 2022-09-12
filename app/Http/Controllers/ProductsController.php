<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;
use Illuminate\Support\Facades\Validator;
use Auth;


class ProductsController extends Controller
{
    public function getAllOrderByName(Request $request){
        $produtos = Products::orderBy('name')->get();
        return $produtos;
    }

    public function cadastrar(Request $request){
        //cria regras para validar os dados recebidos

        $validacao = Validator::make($request->all(), [
            'name' => 'required',
            'value' => 'required',
            'quantify' => 'required',
            'provider' => 'required',
            'description' => 'required',
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
                $produto->user_id = Auth::user()->id;
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
