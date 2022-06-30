<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Renta;
use App\Models\Pelicula;
use App\Models\Cliente;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

class RentaadminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $rentas = DB::table('rentas')
            ->join('peliculas', 'rentas.pelicula_id', '=', 'peliculas.id')
            ->join('users', 'rentas.user_id', '=', 'users.id')
            ->select('rentas.*', 'peliculas.nombre', 'users.name')
            ->get();
 
        
        return view('Renta.indexadmin',compact('rentas'));
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Renta.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request,[ 'pelicula_id'=>'required', 'user_id'=>'required', 'f_registro'=>'required', 'f_entrega'=>'required', 'f_devolucion'=>'required']);
        Renta::create($request->all());
        return redirect()->route('renta.index')->with('success','Registro creado satisfactoriamente');
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
        $rentas=Renta::find($id);
        return view('renta.show',compact('rentas'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $renta=renta::find($id);
        return view('renta.edit',compact('renta'));
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
        $this->validate($request,[ 'pelicula_id'=>'required', 'user_id'=>'required', 'f_registro'=>'required', 'f_entrega'=>'required', 'f_devolucion'=>'required']);
        
        renta::find($id)->update($request->all());
        return redirect()->route('renta.index')->with('success','Registro creado satisfactoriamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
