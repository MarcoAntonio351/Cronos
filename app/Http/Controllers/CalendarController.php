<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Calendar;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth; 


class CalendarController extends Controller
{
    
    public function cadastrar(Request $request){
        //cria regras para validar os dados recebidos

        $validacao = Validator::make($request->all(), [
            'title' => 'required',
            'date' => 'required',
        ]);
        if($validacao->fails()){
            return response()->json([
                'status' => 'ERRO',
                'titulo' => 'Erro de validação',
                'message' => $validacao->messages(),
            ], 400);
        }else{
            try {
                $event = new Events();
                //preenche tomaticamente os campos no objeto produto 
                $event->fill($request->all());//troquei por all
                $event->user_id = Auth::user()->id;
                //salva no BD
                $event->save();
                return response()->json([
                    'status' => 'SUCESSO',
                    'titulo' => 'Cadastro de produto',
                    'message' => 'evento cadastrado com sucesso!',
                ], 200);
            } catch (\Throwable $th) {
                return response()->json([
                    'status' => 'ERRO',
                    'titulo' => 'Erro ao cadastrar evento',
                    'message' => $th->getMessage(),
                ], 400);
            }
        }
    }
}