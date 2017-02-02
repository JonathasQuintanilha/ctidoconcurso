<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use \Auth;
use App\Curso;
use App\Materia;
use App\Aula;
use App\Material;
use Carbon\Carbon;




class CursoController extends Controller
{   


    public function __construct()
        {
            $this->middleware('auth');
        }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
            $cursos = Curso::paginate(5);
            return view('curso.index')->with(compact('cursos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cursos = Curso::all();
        return view('curso.create')->with(compact('cursos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dadoscurso = $request->only('nome', 'inicio', 'termino');
        $c = Curso::create($dadoscurso);
        $dadosmaterias = $request->get('materia');
        $cm = count($dadosmaterias);

        for ($i=0; $i < $cm ; $i++) {
        $m = Materia::create(['nome' => $dadosmaterias[$i], 'curso_id' => $c->id]);

        }


        return redirect()->route('curso.edit', $c->id )->with(['success' => 'Curso adicionado com sucesso!']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $curso = Curso::find($id);     
        return view('curso.edit')->with(compact('curso'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

       
        ////////////
        ////////////
        

        $dadosmaterias = $request->get('materia');


        $cm = count($dadosmaterias);
        $curso = Curso::find($id);

        if ($cm < 1) {

            $input = $request->only('nome', 'inicio', 'termino');
            $curso->fill($input);
            $curso->save(); 

           return redirect()->route('curso.edit', $curso->id )->with(['success' => 'Curso Editado com sucesso!']);
       } else {
            
        for ($i=0; $i < $cm ; $i++) {
            $m = Materia::create(['nome' => $dadosmaterias[$i], 'curso_id' => $curso->id]);
        }
        
        return redirect()->route('curso.edit', $curso->id )->with(['success' => 'Matéria adicionada!']);

        }
       

        
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $curso = Curso::find($id);
        $curso->delete();
        return redirect()->route('curso.index')->with(['success' => 'Excluido com sucesso!']);
    }
}
