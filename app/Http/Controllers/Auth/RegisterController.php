<?php

namespace App\Http\Controllers\Auth;

use App\Company;
use App\Http\Controllers\Controller;
use App\Http\Requests\SaveCompanyRequest;
use App\Providers\RouteServiceProvider;
use App\Provincia;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['string'],
            // 'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            // 'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  Request  $data
     * @return \App\User
     */
    protected function create(SaveCompanyRequest $request)
    {

        $provincia = Provincia::all();
        if ($request->role == 'company') {
            $role = Role::findByName($request->role);
            $user = User::create([
                'name' => $request->company_name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);

             /* if($request->hasFile('logo') && $request->logo->isValid()) {
                //$logoPath = $request->logo->store('Company');
                $logoPath = $request->file('logo')->store('public/company');
                $data['logo'] = $logoPath;
                } */
                
            $data = $request->only(
                'company_name', 'phone','alternative_phone', 'classification',
                'about_company', 'main_services','address', 
                'license','segment_area', 'distrito_id', 'provincia_id');

            $data['user_id'] = $user->id;
            $logopath = $request->file('logo')->store('Company');
            $data['logo'] = $logopath;

            $logopat = $request->file('banner')->store('Company');
            $data['banner'] = $logopat;

            
            $company = Company::create($data);
/*             $company = Company::create([
                'company_name' => $request->company_name,
                'phone' => $request->phone,
                'alternative_phone' => $request->alternative_phone,
                'classification' => $request->classification,
                'about_company' => $request->about_company,
                'main_services' => $request->main_services,
                'address' => $request->address,
                'license' => $request->license,
                'segment_area' => $request->segment_area,
                'user_id' => $user->id,
                'logo' => $request->logo,
                'provincia_id' => $request->provincia_id,
                'distrito_id' => $request->distrito_id
            ]); */
            $user->assignRole($role->name);
            return  redirect(route('login'))->with('success', 'Seja bem vindo');
        } elseif ($request->role == 'user') {
            $role = Role::findByName($request->role);
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);
            $user->assignRole($role->name);
            return redirect(route('login'))->with('success', 'Seja bem vindo');
        }
    }

    protected function register(Request $request)
    {
        $provincia = Provincia::all();
        if ($request->has('query')) {
            if ($request->query('query') == "company") {
                return view('auth.company_registration',['provincias_list' => $provincia,]);
            } elseif ($request->query('query') == "user") {
                return view('auth.register');
            } elseif ($request->query('query') == "chooseAccount") {
                return view('auth.choose_accout_type');
            }
        } else {
            return redirect(route('home'));
        }
    }
}
