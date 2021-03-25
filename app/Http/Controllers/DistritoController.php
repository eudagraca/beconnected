<?php

namespace App\Http\Controllers;

use App\Distrito;
use App\Provincia;
use Illuminate\Http\Request;

class DistritoController extends Controller
{
    private $provinciaModel;

    public function __construct(Provincia $provincia)
    {
        $this->provinciaModel = $provincia;
    }
    
    public function index()
    {
        return view('empresa.distritos', [
            'provincias' => Provincia::all()
        ]);

        $provincias = $this->provinciaModel->lists('nome', 'id' );
        return view('distrito', compact('provincias'));
    }


    public function getDistritos(Request $request, $provincia )
    {

        if ($request->ajax()) {
            echo json_encode(Distrito::where('provincia_id', $provincia)->get());
        }else{
            return redirect('/home');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * @param  \App\Distrito  $distrito
     * @return \Illuminate\Http\Response
     */
    public function show(Distrito $distrito)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Distrito  $distrito
     * @return \Illuminate\Http\Response
     */
    public function edit(Distrito $distrito)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Distrito  $distrito
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Distrito $distrito)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Distrito  $distrito
     * @return \Illuminate\Http\Response
     */
    public function destroy(Distrito $distrito)
    {
        //
    }
}
