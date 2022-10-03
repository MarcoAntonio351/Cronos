<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Leads as ControllersLeads;
use Illuminate\Http\Request;

use App\Models\leads;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;



class LeadsController extends Controller
{
    public function getLeadsNumber(Request $request){
        $leads = Leads::count();
        return $leads;
    }
    public function getAllLeadsByName(Request $request){
        $leads = Leads::orderBy('name')->get();
        return $leads;
    }

    public function cadastrarleads(Request $request){
        //cria regras para validar os dados recebidos

        $validacao = Validator::make($request->all(), [
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'organization',
            'gender',
        ]);
        if($validacao->fails()){
            return response()->json([
                'status' => 'ERRO',
                'titulo' => 'Erro de validação',
                'message' => $validacao->messages(),
            ], 400);
        }else{
            try {
                $leads = new Leads();
                //preenche tomaticamente os campos no objeto produto 
                $leads->fill($request->all());//troquei por all
                $leads->user_id = Auth::user()->id;
                //salva no BD
                $leads->save();
                return response()->json([
                    'status' => 'SUCESSO',
                    'titulo' => 'Cadastro de lead',
                    'message' => 'Lead cadastrado com sucesso!',
                ], 200);
            } catch (\Throwable $th) {
                return response()->json([
                    'status' => 'ERRO',
                    'titulo' => 'Erro ao cadastrar lead',
                    'message' => $th->getMessage(),
                ], 400);
            }
        }
    }
}
