<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('admin.users.index', compact('users'));
    }

    public function destroy($id)
    {
        $user = User::find($id);
        if(is_object($user)){
            $user->delete();
            return Redirect::route("users.index")->with("success","User successfully deleted!");
        }else{
            return Redirect::back()->with("error","User not found");
        }
    }
}
