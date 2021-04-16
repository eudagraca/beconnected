<?php

namespace App\Http\Controllers;

use App\Company;
use App\Concurso;
use App\ImageDetails;
use App\Image;
use App\Provincia;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ImagesController extends Controller
{
    protected $request;
    private $repository;
    public function __construct(Request $request, Company $empresa)
    {
        $this->request = $request;
        $this->repository = $empresa;
    }
    public function UploadSubmit(Request $request, $id)
    {
        $name = $request->name;
        $descriton = $request->descrition;
        $price = $request->price;
        if (!$empresa = $this->repository->find($id))
            return redirect()->back();

        $this->validate($request, [
        'name' => 'required',
        'photos'=>'required',
        'photos.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:11048'
        ]);

        
        foreach ($request->photos as $photo) {
            $filename = $photo->store('photos');

        $data = $empresa->id; }
        ;
            $items= Image::create([
                'name' => $name,
                'descrition' => $descriton,
                'price' => $price,
                'company_id' => $empresa->id]);
            foreach ($request->photos as $photo) {
                $filename = $photo->store('photos');
                $data = [];
                $data['photos'] = $filename;
                $data['company_id'] = $empresa->id;
                ImageDetails::create([
                    'src' => $filename,
                    'Image_id' => $items->id,
            ]);
        }
            return redirect()->back(); 
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
     * @param  \App\Image  $Image
     * @return \Illuminate\Http\Response
     */
    public function show(Image $Image)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Image  $Image
     * @return \Illuminate\Http\Response
     */
    public function edit(Image $Image)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Image  $Image
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Image $Image)
    {
        
    }

    public function editPhoto(Request $request, $id)
    {
        
        $iddetalhe =DB::table('image_details')->where('id', $id)->find($id);
        $detalhe=$iddetalhe->image_id;

        if(!$Image = Image::where('id', $detalhe)->find($detalhe)){
            return redirect()->back();
       }
        return view('company.editPhoto', compact(['Image', 'iddetalhe']));
    }


    public function updatephoto(Request $request, $id)
    {
        $iddetalhe = ImageDetails::where('id', $id)->find($id);
        $detalhe=$iddetalhe->image_id; 

        $src=$request->src;
        if($company = ImageDetails::where('id', $id)->find($id));
            if($request->photos && Storage::exists($company->src)) {
                Storage::delete($company->src);
                $logopath = $request->file('photos')->store('photos');
                $dataphoto['src'] = $logopath;
                $company->update($dataphoto);  
            } 
        if(!$Image = Image::where('id', $detalhe)->find($detalhe)){
            return redirect()->back();
       }

        $data = $request->only(
            'name', 'price', 'descrition');
        $Image->update($data);

        $provincia = Provincia::all();
            $id =  Auth::user()->id;
            $id_company=Auth::user()->company->id;
            $imagesedit = DB::table('images')
            ->join('image_details', function ($join) use ($id_company) {
                $join->on('images.id', '=', 'image_details.image_id')
                    ->where('images.company_id', '=', $id_company);
            })
            ->get();
            $users = User::where('id', '!=', Auth::id())->get();
            $Concurso = Concurso::all();
            $MeuConcurso = DB::table('concursos')
                    ->where('company_id', '=', $id_company)->get();

            return view('auth.profile.company', ['image'=> $imagesedit, 'provincias_list' => $provincia, 'MeuConcurso'=>$MeuConcurso, 'Concurso'=>$Concurso, 'users'=>$users] )->with('company', Auth::user()->company, ['image'=> $Image]);
        
        /* return redirect()->back()->back(); */
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Image  $Image
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $iddetalhe = DB::table('image_details')->where('id', $id)->find($id);
        $detalhe=$iddetalhe->image_id; 
       
        $Image = Image::find($detalhe);
            if(!$Image)
            return redirect()->back();

        $Image->delete();

       return redirect()->back();
    }
}
