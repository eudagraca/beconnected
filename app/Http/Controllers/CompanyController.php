<?php
namespace App\Http\Controllers;
use App\Company;
use App\Provincia;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CompanyController extends Controller
{

    protected $request;
    private $repository;

    public function __construct(Request $request, Company $company)
    {
        $this->request = $request;
        $this->repository = $company;

        $this->middleware(['auth', 'check.is.empresa'])->except([
             'index', 'show', 'search', 'store', 'index1', 'login', 'create', 'aboutus', 'autocomplete'
          ]);
    }

   

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /* $companies = Company::all();
        return view('home', compact('companies')); */

        $company = Company::all();
        $provincia = Provincia::all();
        return view('company.index', [
            'empresas' => $company, 'provincias_list' => $provincia,
        ]);
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

    public function login()
    {
        return view('company.loginCSS');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    /* public function show(Company $company, $id) */
    public function show(Request $request, $id)
    {
        $idCompany=$id->user_id;
        $Companyid=$id->id;
        $company = $this->repository->where('user_id', $idCompany)->first();
        if (!$company)
            return redirect()->back();
        $images = DB::table('Images')
            ->join('image__details', function ($join) use ($Companyid) {
                $join->on('Images.id', '=', 'image__details.Image_id')
                    ->where('Images.company_id', '=', $Companyid);
            })
            ->get();
        $users = User::where('id', '!=', Auth::id())->get();
        return view('company.show', ['image'=> $images, 'users'=>$users])->with('company', $id, ['image'=> $images]);
       /*  $company = $this->repository->where('id', $id)->first();
        $company->id;
        if (!$company)
            return redirect()->back();
        $images = DB::table('Images')
            ->join('image__details', function ($join) use ($id) {
                $join->on('Images.id', '=', 'image__details.Image_id')
                    ->where('Images.company_id', '=', $id);
            })
            ->get(); */

        $users = User::where('id', '!=', Auth::id())->get();

        return view('company.show', ['empresa' => $company, 'users'=>$users, 'image'=> $images]);

        /* return view('empresa.show', [
            'empresa' => $company, 'image'=> $images, $this->data
        ]);  */
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function edit(Company $company)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Company $company)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function destroy(Company $company)
    {
        //
    }

    public function search(Request $request)
    {  
       $consulta = Company::where(function($query) use($request) {
           if($request->has('ramo'))
               $filter = $request->ramo; 
               $idRamoi= $query->where('segment_area', "like", "%{$filter}%");

           if($request->has('distrito_id'))
               $distrito_id = $request->distrito_id;
               $query->where('distrito_id', '=', $distrito_id);
  
            if($request->has('provincia_id'))
               $provincia_id = $request->provincia_id;
               $query->where('provincia_id', "like", "%{$provincia_id}%"); 
      })
      ->paginate(20);

      $empresas = $this->repository->search($request->filter);
      return view('company.filter_company',[
       'empresas' => $consulta,
      ]);
   }
}
