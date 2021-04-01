<?php

namespace App\Http\Controllers;

use App\Company;
use App\Image_Details;
use App\Images;
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
        'photos.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:9048'
        ]);

        
        foreach ($request->photos as $photo) {
            $filename = $photo->store('photos');

        $data = $empresa->id; }
        ;


                $items= Images::create([
                    'name' => $name,
                    'descrition' => $descriton,
                    'price' => $price,
                    'company_id' => $empresa->id]);
                foreach ($request->photos as $photo) {
                    $filename = $photo->store('photos');
                    $data = [];
                    $data['photos'] = $filename;
                    $data['company_id'] = $empresa->id;
                    Image_Details::create([
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
     * @param  \App\Images  $images
     * @return \Illuminate\Http\Response
     */
    public function show(Images $images)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Images  $images
     * @return \Illuminate\Http\Response
     */
    public function edit(Images $images)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Images  $images
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Images $images)
    {

/*         if($request->hasfile('photos') && $request->photos->isValid()) {

            if ($request->photos && Storage::exists($images->image)) {
                Storage::delete($image->image);
            }
        $imagePath = $request->photos->store('photos');
        $data['image'] = $imagePath;
        } */
    }

    public function editPhoto(Request $request, $id)
    {
        $iddetalhe = Image_Details::where('id', $id)->find($id);
        $detalhe=$iddetalhe->Image_id; 
       
        if(!$images = Images::where('id', $detalhe)->find($detalhe)){
            return redirect()->back();
       }
        return view('company.editPhoto', compact(['images', 'iddetalhe']));
    }


    public function updatephoto(Request $request, $id)
    {
        /* $images = DB::table('Images')
            ->join('image__details', function ($join) use ($id) {
                $join->on('Images.id', '=', 'image__details.Image_id')
                    ->where('image__details.id', '=', $id);
            })
            ->get();

        if(!$images)
        return redirect()->back(); */

        $iddetalhe = Image_Details::where('id', $id)->find($id);
        $detalhe=$iddetalhe->Image_id; 

        $src=$request->src;
        if($company = Image_Details::where('id', $id)->find($id));
            if($request->photos && Storage::exists($company->src)) {
                Storage::delete($company->src);
                $logopath = $request->file('photos')->store('photos');
                $dataphoto['src'] = $logopath; 
                $company->update($dataphoto);   
            } 
            


       
       
        if(!$images = Images::where('id', $detalhe)->find($detalhe)){
            return redirect()->back();
       }

        /* if(!$companyid = Images::where('id', $id)->find($id)){
             return redirect()->back();
        }
        $photoid=$companyid->id; */

        $data = $request->only(
            'name', 'price', 'descrition');
        $images->update($data);

        $provincia = Provincia::all();
            $id =  Auth::user()->id;
            $id_company=Auth::user()->company->id;
            $imagesedit = DB::table('Images')
            ->join('image__details', function ($join) use ($id_company) {
                $join->on('Images.id', '=', 'image__details.Image_id')
                    ->where('Images.company_id', '=', $id_company);
            })
            ->get();
            $users = User::where('id', '!=', Auth::id())->get();

            return view('auth.profile.company', ['image'=> $imagesedit, 'provincias_list' => $provincia, 'users'=>$users] )->with('company', Auth::user()->company, ['image'=> $images]);
        
        /* return redirect()->back()->back(); */


        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Images  $images
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $iddetalhe = Image_Details::where('id', $id)->find($id);
        $detalhe=$iddetalhe->Image_id; 

 /*        if($company = Image_Details::where('id', $id)->find($id));
            if($company->src && Storage::exists($company->src)) {
                Storage::delete($company->src);
                
            }  */
       
        $images = Images::find($detalhe);
            if(!$images)
            return redirect()->back();

        $images->delete();

       return redirect()->back();
    }
}
