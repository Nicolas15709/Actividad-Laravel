<?php

namespace App\Http\Controllers;

use App\Models\Pruebas;
use Illuminate\Http\Request;
use Illuminate\view\view;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class PruebasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pruebas = DB::table('Pruebas')->get();
        return view('Pruebas.index', ['Pruebas'=> $pruebas]);
    }


    public function login(Request $request)
    {
       
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);


        $credentials = $request->only('username', 'password');
        if (auth()->attempt($credentials)) {
            return redirect()->route("{{ route('Principal1') }}");
        }

        return redirect()->back()->with('error', 'Credenciales incorrectas. Por favor, inténtelo de nuevo.');
    
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|max:255',
            'descripcion' => 'required',
        ]);
    
        Pruebas::create($request->all());
    
        return redirect()->route('prueba.index')
            ->with('success', '¡Cuenta creada exitosamente!');
    }
    

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pruebas  $pruebas
     * @return \Illuminate\Http\Response
     */
    public function show(Pruebas $pruebas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pruebas  $pruebas
     * @return \Illuminate\Http\Response
     */
    public function edit(Pruebas $pruebas)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pruebas  $pruebas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pruebas $pruebas)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pruebas  $pruebas
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pruebas $pruebas)
    {
        //
    }
}
