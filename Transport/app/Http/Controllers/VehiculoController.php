<?php

namespace App\Http\Controllers;
use App\Http\Requests\VehiculoFormRequest;
use App\Propietario;
use App\Conductor;
use App\Vehiculo;
use Illuminate\Http\Request;

class VehiculoController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request){
            $query = trim($request->get('search'));
            $vehiculos = Vehiculo::where('placa','LIKE','%'. $query .'%')
            ->orderBy('id','asc')
            ->paginate(5);
            return view('vehiculos.index',['vehiculos'=>$vehiculos,'search'=>$query]);
        }
            //$Vehiculos = Vehiculo::all();
        //    $Vehiculos = Vehiculo::paginate(5);            
          //  return view ('Vehiculos.index', ['Vehiculos'=>$Vehiculos]);
                
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    	$propietarios = Propietario::all();
        $conductores = Conductor::all();
        return view('vehiculos.create',compact('conductores'),compact('propietarios'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $vehiculo = new Vehiculo();
        $vehiculo->placa = request('placa');
        $vehiculo->color = request('color');
        $vehiculo->marca = request('marca');
        $vehiculo->tipo = request('tipo');
        $vehiculo->conductor = request('conductor');
        $vehiculo->propietario = request('propietario');
        $vehiculo->save();
        return redirect('/vehiculos');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('vehiculos.show',['vehiculo'=> Vehiculo::findOrFail($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('vehiculos.edit',['vehiculo'=> Vehiculo::findOrFail($id)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(VehiculoFormRequest $request, $id)
    {
        $vehiculo = Vehiculo::findOrFail($id);

        $vehiculo->placa = $request->get('placa');        
        $vehiculo->color = $request->get('color');
        
        
        $vehiculo->update();
        
        return redirect('/vehiculos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $vehiculo = Vehiculo::findOrFail($id);
        $vehiculo->delete();
        return redirect('/vehiculos');
    }

    public function countVehiculo(){
        return $vehiculos = Vehiculo::all()->count();
    }

}
