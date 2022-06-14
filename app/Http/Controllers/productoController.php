<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Http\compact;
use App\Models\productos;

class productoController extends Controller
{
    
    public function index()
    {
        $datos['productos']=productos::paginate(15);
       return view('productos.index',$datos);
       

    }

    
    public function create()
    {
        
        return view('productos.create');
       

    }
    public function store(Request $request)
    {
        $datosproductos=request()->except('_token');
        productos::insert($datosproductos);
        return redirect('productos');

    }
    public function show($id)
    {
        //
    }

   
    public function edit($id)
    {
        $productos=productos::findOrFail($id);
       return view('productos.edit',compact('productos'));
       
    }
    public function update(Request $request, $id)
    {
        $productos=request()->except(['_token','_method']);
        productos::where('id','=',$id)->update($productos);
        return redirect('productos');
    }
    
    public function destroy($id)
    {
        $datosproductos=productos::findOrFail($id);
        productos::destroy($id);
        return redirect('productos');
    }
}
