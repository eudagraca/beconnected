<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Provincia;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function profile()
    {
        if(!Auth::user()){
            return redirect()->back();
        }
        if (is_null(Auth::user()->company)) {
            return view('auth.profile.user');
        } else {

            $provincia = Provincia::all();
            $id =  Auth::user()->id;
            $id_company=Auth::user()->company->id;
            $images = DB::table('images')
            ->join('image_details', function ($join) use ($id_company) {
                $join->on('images.id', '=', 'image_details.Image_id')
                    ->where('images.company_id', '=', $id_company);
            })
            ->get();
            $users = User::where('id', '!=', Auth::id())->get();

            return view('auth.profile.company', ['image'=> $images, 'provincias_list' => $provincia, 'users'=>$users] )->with('company', Auth::user()->company, ['image'=> $images]);
        }
        return redirect()->back();
    }
}
