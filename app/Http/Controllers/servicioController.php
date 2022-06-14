<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\compact;
use App\Models\servicios;

class servicioController extends Controller
{    
    public function index()
    {
        $datos['servicios']=servicios::paginate(15);
       return view('servicios.index',$datos);

    }
    public function create()
    {
        
        return view('servicios.create');

    }
    public function store(Request $request)
    {
        $datosservicio=request()->except('_token');
        servicios::insert($datosservicio);
        return redirect('servicios');
        


    }
    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $servicios=servicios::findOrFail($id);
        return view('servicios.edit',compact('servicios'));
    }

    public function update(Request $request, $id)
    {
        $servicios=request()->except(['_token','_method']);
        servicios::where('id','=',$id)->update($servicios);
        return redirect('servicios');
    }

    public function destroy($id)
    {
        $servicios=servicios::findOrFail($id);
        servicios::destroy($id);
        return redirect('servicios');
    }
}
