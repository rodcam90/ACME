<?php

namespace App\Http\Controllers;
use App\Http\Requests\UserFormRequest;
use Illuminate\Http\Request;
use App\Vehiculo;
use App\Propietario;
use App\Conductor;
use DB;
use View;

class ReportController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data =DB::table('vehiculos')
                    ->join('conductors', 'conductors.id', '=', 'vehiculos.conductor')                    
                    ->join('propietarios','propietarios.id','=','vehiculos.propietario')
                    ->select('vehiculos.id','vehiculos.placa','vehiculos.tipo','conductors.nombre as co','propietarios.nombre as pro')
                    ->get();
        /*$data2 = DB::table('vehiculos')
                    ->join('propietarios','propietarios.id','=','vehiculos.propietario')
                    ->select('*')
                    ->get();*/

      //aquí puedes pasar la información que necesites dentro de un array yo uso compac porque me gusta :-)  
     return View::make('reports.index', compact('data') );
    }

}
