<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Outfitters;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;



class OutfittersController extends Controller
{
    public function getAllOutfittersByName(Request $request){
        $outfitter = Outfitters::orderBy('name')->get();
        return $outfitter;
    }

    public function cadastrar(Request $request){
        //cria regras para validar os dados recebidos

        $validacao = Validator::make($request->all(), [
            'name' => 'required',
            'email',
            'phone',
            'productf',
            'adress',
        ]);
        if($validacao->fails()){
            return response()->json([
                'status' => 'ERRO',
                'titulo' => 'Erro de validação',
                'message' => $validacao->messages(),
            ], 400);
        }else{
            try {
                $outfitter = new Outfitters();
                //preenche tomaticamente os campos no objeto produto 
                $outfitter->fill($request->all());//troquei por all
                $outfitter->user_id = Auth::user()->id;
                //salva no BD
                $outfitter->save();
                return response()->json([
                    'status' => 'SUCESSO',
                    'titulo' => 'Cadastro de fornecedor',
                    'message' => 'Fornecedor cadastrado com sucesso!',
                ], 200);
            } catch (\Throwable $th) {
                return response()->json([
                    'status' => 'ERRO',
                    'titulo' => 'Erro ao cadastrar fornecedor',
                    'message' => $th->getMessage(),
                ], 400);
            }
        }
    }
    public function delete(Request $request){
        try {
            $outfitters = Outfitters::findOrFail($request->id);
            $outfitters->delete();
            return response()->json([
                'status' => 'SUCESSO',
                'titulo' => 'Remoção de produto',
                'message' => 'Produto removido coaam sucesso!',
            ], 200);
        } catch (\Throwable $th) {
            return response()->json([
                'status' => 'ERRO',
                'titulo' => 'Erro ao remover produto',
                'message' => $th->getMessage(),
            ], 400);
        }   
    }
}
