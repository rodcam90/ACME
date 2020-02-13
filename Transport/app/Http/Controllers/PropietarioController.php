<?php

namespace App\Http\Controllers;
use App\Http\Requests\PropietarioFormRequest;
use App\Propietario;
use Illuminate\Http\Request;

class PropietarioController extends Controller
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
            $propietarios = Propietario::where('nombre','LIKE','%'. $query .'%')
            ->orderBy('id','asc')
            ->paginate(5);
            return view('propietarios.index',['propietarios'=>$propietarios,'search'=>$query]);
        }
            //$Propietarios = Propietario::all();
        //    $Propietarios = Propietario::paginate(5);            
          //  return view ('propietarios.index', ['Propietarios'=>$Propietarios]);
                
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('propietarios.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $propietario = new Propietario();
        $propietario->cedula = request('cedula');
        $propietario->nombre = request('nombre');
        $propietario->apellido = request('apellido');
        $propietario->direccion = request('direccion');
        $propietario->telefono = request('telefono');
        $propietario->save();
        return redirect('/propietarios');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('propietarios.show',['propietario'=> Propietario::findOrFail($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('propietarios.edit',['propietario'=> Propietario::findOrFail($id)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PropietarioFormRequest $request, $id)
    {
        $propietario = Propietario::findOrFail($id);

        $propietario->cedula = $request->get('cedula');        
        $propietario->nombre = $request->get('nombre');
        $propietario->apellido = $request->get('apellido');
        $propietario->direccion = $request->get('direccion');
        $propietario->telefono = $request->get('telefono');

        $propietario->update();
        
        return redirect('/propietarios');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $propietario = Propietario::findOrFail($id);
        $propietario->delete();
        return redirect('/propietarios');
    }

    public function countPropietario(){
        return $Propietarios = Propietario::all()->count();
    }

}
