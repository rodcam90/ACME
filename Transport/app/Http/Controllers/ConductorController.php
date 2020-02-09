<?php

namespace App\Http\Controllers;
use App\Http\Requests\conductorFormRequest;
use App\Conductor;
use Illuminate\Http\Request;

class ConductorController extends Controller
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
            $conductores = Conductor::where('nombre','LIKE','%'. $query .'%')
            ->orderBy('id','asc')
            ->paginate(5);
            return view('conductores.index',['conductores'=>$conductores,'search'=>$query]);
        }
            //$conductores = conductor::all();
        //    $conductores = conductor::paginate(5);            
          //  return view ('conductores.index', ['conductores'=>$conductores]);
                
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('conductores.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $conductor = new Conductor();
        $conductor->cedula = request('cedula');
        $conductor->nombre = request('nombre');
        $conductor->apellido = request('apellido');
        $conductor->direccion = request('direccion');
        $conductor->telefono = request('telefono');
        $conductor->save();
        return redirect('/conductores');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('conductores.show',['conductor'=> Conductor::findOrFail($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('conductores.edit',['conductor'=> Conductor::findOrFail($id)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(conductorFormRequest $request, $id)
    {
        $conductor = Conductor::findOrFail($id);

        $conductor->cedula = $request->get('cedula');        
        $conductor->nombre = $request->get('nombre');
        $conductor->apellido = $request->get('apellido');
        $conductor->direccion = $request->get('direccion');
        $conductor->telefono = $request->get('telefono');
        $conductor->update();
        
        return redirect('/conductores');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $conductor = Conductor::findOrFail($id);
        $conductor->delete();
        return redirect('/conductores');
    }

    public function countconductor(){
        return $conductores = Conductor::all()->count();
    }

}
