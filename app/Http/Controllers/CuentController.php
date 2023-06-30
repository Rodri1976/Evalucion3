<?php

namespace App\Http\Controllers;

use App\Models\Cuenta;
use App\Models\Perfile;
use Illuminate\Http\Request;

/**
 * Class CuentaController
 * @package App\Http\Controllers
 */
class CuentController extends Controller
{
    
    public function verlogin(){

        return view('home.ingreso');

    }



    public function autenticar(Request $request)
    {
    $user = $request->user;
    $password = $request->password;

    if (Auth::attempt(['user' -> $user,'password' -> $password])) {
        $usuario = Auth::user();

        if($usuario->perfil_id == 1){
            return redirect()->route('imagene.index');
        }elseif ($usuario->perfil_id == 2) {
            return redirect()->route('imagene2.index',['user'->$user]);
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
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      
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
       
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
       
    }
}
