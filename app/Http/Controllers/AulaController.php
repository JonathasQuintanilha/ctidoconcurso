<?php
namespace App\Http\Controllers;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Aula;
use App\Materia;
use App\Material;
use App\User;

class AulaController extends Controller
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
		
	}
	/**
	* Show the form for creating a new resource.
	*
	* @return \Illuminate\Http\Response
	*/
	public function create()
	{
	}
	/**
	* Store a newly created resource in storage.
	*
	* @param  \Illuminate\Http\Request  $request
	* @return \Illuminate\Http\Response
	*/
	public function store(Request $request)
	{
		return('Estamos no controler das aulas');
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
		$aula = Aula::find($id);
		$aulaid = $aula->id;
		return view ('aula.edit')->with(compact('aula', 'aulaid'));
	}


	public function update(Request $request, $id)
	{
		// trata o array de uploads

		$files = $request->file('file');
		$names = $request->get('namefile');

		if(!empty($files)) {

			//foreach($files as $file){
			
			for ($i=0; $i < sizeof($files) ; $i++) {

			$ext = $files[$i]->getClientOriginalExtension();
			$filename =  str_random(40).'.'.$ext;

			$upload = \Storage::disk('local')->put($filename, file_get_contents($files[$i]));
			
				$m = Material::create(['aula_id' => $id, 'nome' => $names[$i], 'link' => $filename, 'type' => 'file' ]);
			}
		}


		$video = $request->get('video');
		$nomedevideo = $request->get('nomedevideo');

		if (!empty($video)) {

			for ($i=0; $i < sizeof($video) ; $i++) {

			$link[$i] = str_replace("watch?v=", "embed/", $video[$i]).'?rel=0';
			$link_nohttps[$i] = str_replace("https:", "", $link[$i]);

			$m = Material::create(['aula_id' => $id, 'nome' => $nomedevideo[$i], 'link' => $link_nohttps[$i], 'type' => 'video' ]);

			}
		}



		$slide = $request->get('slide');

		if (!empty($slide)) {

			for ($i=0; $i < sizeof($slide) ; $i++) {

			$m = Material::create(['aula_id' => $id, 'nome' => $names[$i], 'link' => $slide ]);

			}
		}

		return redirect()->route('aula.edit', $id)->with(['success' => 'Material adicionado com sucesso!']);



	}

	public function destroy($id)
	{
		//
	}
}