<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;
use App\Materia;
use App\Aula;

class MateriaController extends Controller
{   

    public function __construct()
    {
        $this->middleware('auth');
    }    

    public function index()
    {
        //
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $materia = Materia::find($id);
        //dd($materia->aula);
        return view('materia.edit')->with(compact('materia'));
    }

    ////
    ////
    ////
    ////

    public function update(Request $request, $id)
    

    {


        $dadosaulas = $request->get('aula'); // Pegar array de dados no name aula[]

        $ca = count($dadosaulas[0]); // Atribui a quantidade de um dos dos arrays do name aula[]

        $materia = Materia::find($id); // Busca a matéria específica

        $totalaulas = $materia->aula; // Busca todas as aulas relacionadas a esta matéria

        $countaulas = count($totalaulas); // Atribui a quantidade de aulas relacionadas a esta matéria

        $numerodaaula = ($countaulas === 0 ? $countaulas+1 : $countaulas); // Define o número que será atribuído 





         
        $input = $request->only('nome'); // pega o dado da request nome ( que vem do formulário de edição da matéria)
        $materia->fill($input);
        $materia->save(); 


        if ($ca > 0) {

                for ($i=0; $i < $ca ; $i++) {

                         $a = Aula::create(

                                [   
                                    'materia_id' => $materia->id,
                                    'nome' => 'Aula '.$numerodaaula, 
                                    'assunto' => $dadosaulas[0], 
                                    'data' => $dadosaulas[1] 
                                    
                                ]

                            );
                }


        }
         
        


        return redirect()->route('materia.edit', $materia->id )->with(['success' => 'Aula adicionada!']);

                
    }



    public function destroy(Request $request, $id) {
       
  

       $materia = Materia::find($id);
        $materia->delete();


        return redirect()->back()->with(['success' => 'Excluido com sucesso!']);
        
    }
}
