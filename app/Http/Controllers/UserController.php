<?php


namespace App\Http\Controllers;


use App\Models\Storage;

class UserController extends Controller
{

    public function getAddUserForm()
    {
        return view("adduser");
    }

    public function insertAction(Request $request)
    {
        $firstname = $request->input('firstname');
        $lastname = $request->input('lastname');
        $email = $request->input('email');
        $birthday = $request->input('birthday');

        $user = new User();
        $user->meno = $firstname;
        $user->priezvisko = $lastname;
        $user->email = $email;
        $user->narodeniny = $birthday;
        $user->save();

        return response()->view('adduser');
    }

    public function showAllAction(){
        $users = User::all();
        return view("users", ['users'=>$users]);
    }
}