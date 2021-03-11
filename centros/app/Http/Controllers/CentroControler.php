<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\colonias;
use App\Models\persona;
use RealRashid\SweetAlert\Facades\Alert;
use DB;
use SweetAlert;
use Auth;

class CentroControler extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /* $colonia = colonias::all(); */
       return view("centros.index");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $colonia = DB::SELECT('select * from colonia;');
        // return $colonia;

        $idUser = Auth::user()->id;

        $colonia = DB::SELECT('select

        users.name As "Usuario",
        users.id   As "idUsuario",
        escuela.nombre As "Escuela",
        escuela.id As "idEscuela",
        colonia.nombre As "Colonia",
        colonia.id As "idColonia"

        FROM `users`

    inner join escuela
    on users.escuela_id = escuela.id
    inner join colonia
    ON escuela.colonia_id = colonia.id
    WHERE users.id ='. $idUser);


        return $colonia;

       /*  $escuela = DB::SELECT('select * from escuela where') */

    }



    public function getEscuelas($idColonia){


        $escuelas = DB::SELECT("select * from escuela where colonia_id = '$idColonia'  ;");
        //return $escuelas;

      // return response()->json(['escuelas' => $escuelas, 'idEscuela' =>$idEscuela ],200);

      return $escuelas;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $personas = new persona();
        $personas->identidad = $request['identidad'];
        $personas->cantidad = $request['cantidad'];
        $personas->users_id = $request['idUser'];
        $personas->escuela_id = $request['escuela_id'];

        $personas -> save();

        return "Exito";
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
        //
    }
}
