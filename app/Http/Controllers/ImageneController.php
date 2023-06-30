<?php

namespace App\Http\Controllers;

use App\Models\Imagene;
use App\Models\Cuenta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Redirect;

/**
 * Class ImageneController
 * @package App\Http\Controllers
 */
class ImageneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $imagenes = Imagene::paginate();

        return view('imagene.index',compact('imagenes'))

            ->with('i', (request()->input('page', 1) - 1) * $imagenes->perPage());

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $imagene = new Imagene();

        $cuentas=Cuenta::pluck('user','id');

        return view('imagene.create', compact('imagene','cuentas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //request()->validate(Imagene::$rules);

        //$imagene = Imagene::create($request->all());
        $imagene = request()->except('_token');

        if($request->hasFile('archivo')){

            $imagene['archivo']=$request->file('archivo')->store('uploads','public');
        
        }

        Imagene::insert($imagene);
        //$cuentas=Cuenta::all();
        //return redirect()->route('imagene.index');
            //->with('success', 'Imagene created successfully.');
          
           
            return Redirect::back();
         //return response()->json($imagene);
        // return Redirect::route('imagene.create');
         //return view('imagene.index2', compact('imagene','cuentas'));
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $imagene = Imagene::find($id);

        return view('imagene.show', compact('imagene'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $imagene = Imagene::find($id);

        $cuentas=Cuenta::pluck('user','id');

        return view('imagene.edit', compact('imagene','cuentas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Imagene $imagene
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //request()->validate(Imagene::$rules);

        //$imagene->update($request->all());

        //return redirect()->route('imagenes.index')
           // ->with('success', 'Imagene updated successfully');

        //request()->validate(Imagene::$rules);
        //$imagene = Imagene::create($request->all());
        $imagene = request()->except(['_token','_method']);
        //
        if($request->hasFile('archivo')){
           $imagene=Imagene::findOrFail($id);
           Storage::delete('public/'.$imagene->archivo);
           $imagene['archivo']=$request->file('archivo')->store('uploads','public');
        
        }
        //$imagene->update($request->all());
        //Imagene::update($imagene);

        Imagene::where('id','=',$id)->update($imagene);
        //Imagene::update($imagene);
        return Redirect::back();
        //$imagene=Imagene::findOrFail($id);
        //return view('imagene.edit',compact('imagene'));

        //return redirect()->route('imagene.index')
          //  ->with('success', 'Imagene updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $imagene = Imagene::find($id)->delete();

        return redirect()->route('imagenes.index')
            ->with('success', 'Imagene deleted successfully');
    }
}
