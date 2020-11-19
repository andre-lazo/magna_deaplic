<?php

namespace App\Http\Controllers;

use App\Models\Alicuota;
use Illuminate\Http\Request;
use App\Models\Residencia;
use App\Models\User;
class AlicuotaController extends Controller
{
    public function __construct(){
         
        $this->middleware('auth');
     }
    public function index()
    {
        $alicuota=Alicuota::all();
        $residencia=Residencia::all();
        $usuario=User::all();
        return \view('alicuotas.index',['alicuotas'=>$alicuota,'residencias'=>$residencia,'usuarios'=>$usuario]);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Alicuota  $alicuota
     * @return \Illuminate\Http\Response
     */
    public function show(Alicuota $alicuota)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Alicuota  $alicuota
     * @return \Illuminate\Http\Response
     */
    public function edit(Alicuota $alicuota)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Alicuota  $alicuota
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Alicuota $alicuota)
    {
        //
    }

    /**
     * Remove the specified resource from storage.  
     *
     * @param  \App\Models\Alicuota  $alicuota
     * @return \Illuminate\Http\Response
     */
    public function destroy(Alicuota $alicuota)
    {
        //
    }
}
