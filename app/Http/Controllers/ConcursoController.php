<?php

namespace App\Http\Controllers;

use App\Company;
use App\Concurso;
use Illuminate\Http\Request;

class ConcursoController extends Controller
{
    protected $request;
    private $repository;
    public function __construct(Request $request, Company $empresa)
    {
        $this->request = $request;
        $this->repository = $empresa;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request, $id)
    {
        if (!$empresa = $this->repository->find($id))
            return redirect()->back();

        $this->validate($request, [
        'company_name' => 'required',
        'Descricao'=>'required',
        'Validade' => 'required'
        ]);
        $data = $request->only('company_name', 'phone', 'Referencia', 'address', 'segment_area', 'distrito_id', 'provincia_id', 'Descricao', 'Validade');
        $data['company_id'] = $empresa->id;
        if(!$data){
            return redirect()->back()->with('status', 'Erro ao actualizar!');
    }
    $company = Concurso::create($data);
    return redirect()->back()->with('success', 'sucesso');
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
     * @param  \App\Concurso  $concurso
     * @return \Illuminate\Http\Response
     */
    public function show(Concurso $concurso)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Concurso  $concurso
     * @return \Illuminate\Http\Response
     */
    public function edit(Concurso $concurso)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Concurso  $concurso
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Concurso $concurso, $id)
    {
        if(!$Concurso = Concurso::find($id));
            $data=$request->all();
                
            $Concurso->update($data);
            return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Concurso  $concurso
     * @return \Illuminate\Http\Response
     */
    public function destroy(Concurso $concurso, $id)
    {
       
        $Concurso = Concurso::find($id);
            if(!$Concurso)
            return redirect()->back();

        $Concurso->delete();

       return redirect()->back();
    }
}
