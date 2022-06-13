<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\categorias;
use App\Models\productos;

class categoriaController extends Controller
{
    public function index(){
        $categorias = categorias::All();
        //dd($categorias);
        return view('categorias.index')->with('categorias',$categorias);
    }
    public function create()
    {
        return view('categorias.create');
    }
    public function insert(Request $request)
    {
        $categoria = new categorias();
        $categoria ->nombre = $request->get('nombre');
        $categoria ->descripcion = $request->get('descripcion');
        $categoria ->save();
        return redirect('/categorias');
    }
    public function edit($id){
        $categorias = categorias::find($id);
        //dd($categorias);
        return view('categorias.edit')->with('categorias',$categorias);
    }
    public function update(Request $request ,$id)
    {
        $categoria = categorias::find($id);
        $categoria ->nombre = $request->get('nombre');
        $categoria ->descripcion = $request->get('descripcion');
        $categoria ->save();
        return redirect('/categorias');
    }

    public function delete($id){
        $categoria = productos::all()->where('categoria_id',':',$id);
        //dd(count($categoria));
        if (count($categoria) == 0) {
            $categoria = categorias::find($id);
            $categoria->delete();
            return redirect('/categorias');
        }
        else{
            return view('categorias.alerta');
        }
    }

}
