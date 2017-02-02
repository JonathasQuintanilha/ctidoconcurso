<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Curso;
use App\CategoriaCurso;

class PagesController extends Controller
{
    public function Home()
    {
    	return view('home');
    }

    public function Sobrenos()
    {
    	return view('sobrenos');
    }

    public function Contato()
    {
    	return view('contato');
    }

    public function Professores()
    {   

        return view('professores');
    }

        public function Materiais()
    {
        return view('materiais');
    }

    public function Cursos()
    {
        $cursos = Curso::paginate(10);
        $categorias = CategoriaCurso::all();
    	return view('cursos')->with(compact('cursos','categorias'));
    }

        public function Detalhes($id)
    {   

        $curso = Curso::find($id);
        $materias = $curso->materia;
        $categoria = $curso->categoria;
        return view('detalhes')->with(compact('curso', 'materias','categoria'));
    }
}
