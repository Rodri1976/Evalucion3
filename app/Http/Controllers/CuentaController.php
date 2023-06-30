<?php

namespace App\Http\Controllers;

use App\Models\Cuenta;
use App\Models\Imagene;
use App\Models\Perfile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Gate;


/**
 * Class CuentaController
 * @package App\Http\Controllers
 */
class CuentaController extends Controller
{
    
    public function autenticar(Request $request)
    {
    $user = $request->user;
    $password = $request->password;

    if (Auth::attempt(['user' => $user,'password' => $password])) {
        $usuario = Auth::user();

        if($usuario->perfil_id == 1){
            return redirect()->route('imagenes.index');
        }else if($usuario->perfil_id == 2){
            return redirect()->route('index3');
           
        }
    }

    return back()->withErrors([
        'user'=>'Credenciales Incorrectas',
    ])->onlyInput('user');
    }



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cuentas = Cuenta::paginate();

        return view('cuenta.index', compact('cuentas'))
            ->with('i', (request()->input('page', 1) - 1) * $cuentas->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cuenta = new Cuenta();

        $perfiles=Perfile::pluck('nombre','id');

        return view('cuenta.create', compact('cuenta','perfiles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Cuenta::$rules);

        $cuenta = Cuenta::create($request->all());

        return redirect()->route('cuentas.index')
            ->with('success', 'Cuenta created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cuenta = Cuenta::find($id);

        return view('cuenta.show', compact('cuenta'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cuenta = Cuenta::find($id);

        $perfiles=Perfile::pluck('nombre','id');

        return view('cuenta.edit', compact('cuenta','perfiles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Cuenta $cuenta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cuenta $cuenta)
    {
        request()->validate(Cuenta::$rules);

        $cuenta->update($request->all());

        return redirect()->route('cuentas.index')
            ->with('success', 'Cuenta updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $cuenta = Cuenta::find($id)->delete();

        return redirect()->route('cuentas.index')
            ->with('success', 'Cuenta deleted successfully');
    }


        public function autenticarartista() {
        $imagenes = Imagene::paginate();
        return view('imagene.index3', compact('imagenes'))
        ->with('i', (request()->input('page', 1) - 1) * $imagenes->perPage());
        
    }

    //public function autenticaradmin() {
        //$imagenes=Imagene::all();
        //return view('imagene.index', compact('imagenes'));
    //}









}






