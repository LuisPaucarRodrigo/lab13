<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\productos;

class modificarproductoscontroller extends Controller
{
    public function index()
    {
        $productos = productos::ALL();
        return view('producto.productos')->with('producto',$productos);
    }
    public function create()
    {
        return view('producto.create');
    }
    public function insert(Request $request)
    {
        $producto = new productos();
        $producto -> nombre =  $request->nombre;
        $producto -> descripcion =  $request->descripcion;
        $producto -> stock =  $request->stock;
        $producto -> precio =  $request->precio;
        $producto -> imagen =  $request->imagen;
        $producto -> save();
        return redirect('/producto');
    }
    public function modify($id)
    {
        $productos = productos::find($id);
        return view('producto.editar')->with('producto',$productos);
    }
    public function update(request $request , $id)
    {
        $productos = productos::find($id);
        $productos -> nombre =  $request->nombre;
        $productos -> descripcion =  $request->descripcion;
        $productos -> stock =  $request->stock;
        $productos -> precio =  $request->precio;
        $productos -> save();
        return redirect('/producto');
    }
    public function delete( $id)
    {
        $productos = productos::find($id);
        $productos->delete();
        return redirect('/producto');
    }
}
