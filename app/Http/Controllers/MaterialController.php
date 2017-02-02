<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use File;
use Storage;
use App\Material;
use App\Aula;

class MaterialController extends Controller
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
        //
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
        
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $path = storage_path() . '/app/' . $slug;

        if (file_exists($path)) {
            
        $type = File::mimeType($path);

        return response(Storage::get($slug), 200, ['Content-Type' => $type]);
        
        }

        return response()->json(['Status Code' => '404 Not Found'], 404);
        // $pathToFile = storage_path('app\\'.$slug);
        // return response()->download($pathToFile, $slug);

    }
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $material = Material::find($id);
      $aulaid = $material->aula_id;
      Storage::delete($material->link);
      $material->delete();

      return redirect()->route('aula.edit', $aulaid)->with(['success' => 'Material EXCLUÍDO com sucesso!']);


    }
}
