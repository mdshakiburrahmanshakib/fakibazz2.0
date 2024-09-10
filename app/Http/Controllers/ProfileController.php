<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Container\Attributes\Auth;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index(){
        return view('dashboard.profile.index');
    }

    public function name_update(Request $request){
        $request->validate([
            'name' => 'required',
        ]);

        User::find(Auth::user()->id)->update([
            'name' => $request->name,
            'update_at' => now(),
        ]);

        return back();
    }
}
