<?php

namespace App\Http\Controllers\Auth;

use App\Company;
use App\Http\Controllers\Controller;
use App\Http\Requests\SaveCompanyRequest;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
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
        if ($request->role == 'company') {
            $role = Role::findByName($request->role);
            $user = User::create([
                'name' => $request->company_name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);
            $company = Company::create([
                'company_name' => $request->company_name,
                'phone' => $request->phone,
                'alternative_phone' => $request->alternative_phone,
                'classification' => $request->classification,
                'about_company' => $request->about_company,
                'main_services' => $request->main_services,
                'address' => $request->address,
                'province' => $request->province,
                'district' => $request->district,
                'license' => $request->license,
                'segment_area' => $request->segment_area,
                'user_id' => $user->id
            ]);
            $user->assignRole($role->name);
            return redirect(route('login'))->with('success', 'Seja bem vindo');
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
        if ($request->has('query')) {
            if ($request->query('query') == "company") {
                return view('auth.company_registration');
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
