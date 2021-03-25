<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function profile()
    {

        if (is_null(Auth::user()->company)) {
            return view('auth.profile.user');
        } else {
            $id =  Auth::user()->id;
            $id_company=Auth::user()->company->id;
            $images = DB::table('Images')
            ->join('image__details', function ($join) use ($id_company) {
                $join->on('Images.id', '=', 'image__details.Image_id')
                    ->where('Images.company_id', '=', $id_company);
            })
            ->get();
            $users = User::where('id', '!=', Auth::id())->get();

            return view('auth.profile.company', ['image'=> $images, 'users'=>$users] )->with('company', Auth::user()->company, ['image'=> $images]);
        }
    }
}
