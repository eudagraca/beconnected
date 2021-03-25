<?php

namespace App\Http\Controllers;

use App\Company;
use App\Image_Details;
use App\Images;
use Illuminate\Http\Request;
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

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Images  $images
     * @return \Illuminate\Http\Response
     */
    public function destroy(Images $images)
    {
        //
    }
}
