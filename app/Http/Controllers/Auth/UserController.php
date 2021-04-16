<?php

namespace App\Http\Controllers\Auth;

use App\Company;
use App\Concurso;
use App\Http\Controllers\Controller;
use App\Provincia;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function index(){
        if (Auth::user()->user) {
            $user = User::where('id', '!=', Auth::id())->get();
            $users = Auth::user();
            return view('auth.profile.user', compact('users'), ['user'=> $user]);
        } 
        return redirect()->back();
    }
    public function profile()
    {
        if(!Auth::user()){
            return redirect()->back();
        }
        if (is_null(Auth::user()->company)) {
            $user = User::where('id', '!=', Auth::id())->get();
            $users = Auth::user();
            return view('auth.profile.user', compact('users'), ['user'=> $user]);
        }elseif (Auth::user()->user) {
            $user = User::where('id', '!=', Auth::id())->get();
            $users = Auth::user();
            return view('auth.profile.user', compact('users'), ['user'=> $user]);
        }  else {

            $provincia = Provincia::all();
            $id =  Auth::user()->id;
            $id_company=Auth::user()->company->id;
            $images = DB::table('images')
            ->join('image_details', function ($join) use ($id_company) {
                $join->on('images.id', '=', 'image_details.Image_id')
                    ->where('images.company_id', '=', $id_company);
            })
            ->get();
            //dd($Empresaactual = $this->repository->where('user_id', '=', $id_company));
            $Concurso = Concurso::all();
            $MeuConcurso = DB::table('concursos')
                    ->where('company_id', '=', $id_company)->get();

                   /*  $idconcurso=Auth::id();
            dd($companyConcurso = Concurso::where('company_id','=', $idconcurso));
            dd($companyConcurso->id); */
            $users = User::where('id', '!=', Auth::id())->get();

            return view('auth.profile.company', ['image'=> $images, 'MeuConcurso'=>$MeuConcurso, 'Concurso'=>$Concurso, 'provincias_list' => $provincia, 'users'=>$users] )->with('company', Auth::user()->company);
        }
        return redirect()->back();
    }

    public function editadmin(Request $request, $id)
    {
        if (!$userid = User::find($id)) {
            return redirect()->back()->with('error', 'usuario nao encontrado');
        }
        $user = User::all();
        $users = Auth::user();
        return view('admin.edituser', compact('userid'), ['user'=> $user, 'users'=> $users]);
    }

    protected function edituser(Request $request, $id)
    {
        if ($request->role == 'super-admin') {
            $user = User::find($id);
        if($user){
            if($user->perfil && Storage::exists($user->perfil)) {
                Storage ::delete($user->perfil);

                $logopath = $request->file('perfil')->store('logo');
                $data['perfil'] = $logopath;
                $user->update($data);
                return redirect()->back();

            }
            $logopath = $request->file('perfil')->store('logo');
                $data['perfil'] = $logopath;
            $data = $request->only(
                'name', 'last_name','email');
            $data['password'] = Hash::make($request->password);
            $user->update($data);
            return redirect()->back()->with('success', 'sucesso');
        }
         return redirect()->back()->with('status', 'Erro ao actualizar!');
        }
    }

    protected function updateUser(Request $request, $id)
    {
        if ($request->role == 'user') {
            $user = User::find($id);
        if($user){
            $data = $request->only(
                'name', 'last_name','email');
            $data['password'] = Hash::make($request->password);
            //$data=$request->all();

            $user->update($data);
            return redirect()->back()->with('success', 'sucesso');
        }
         return redirect()->back()->with('status', 'Erro ao actualizar!');
        }
    }



    public function destroy(Concurso $concurso, $id)
    {
       
        $user = User::find($id);
            if(!$user)
            return redirect()->back();

        $user->delete();

       return redirect()->back();
    }

    public function updatePerfil(Request $request, $id)
    {
    if ($request->role == 'user'){
        if(!$user = User::where('id', $id)->find($id));
            if($user->perfil && Storage::exists($user->perfil)) {
                Storage ::delete($user->perfil);

                $logopath = $request->file('perfil')->store('logo');
                $data['perfil'] = $logopath;
                $user->update($data);
                return redirect()->back();

            }
            $logopath = $request->file('perfil')->store('logo');
                $data['perfil'] = $logopath;
                $user->update($data);
                return redirect()->back();
        
        }
    }
}
