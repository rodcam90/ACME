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
                    ->select('*')
                    ->get();

      //aquí puedes pasar la información que necesites dentro de un array yo uso compac porque me gusta :-)  
     return View::make('reports.index', compact('data') );
    }

}
