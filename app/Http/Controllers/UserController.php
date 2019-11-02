<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function home_page()
    {
        return view("/layout/home");
    }

    public function insertAction(Request $request)
    {
        $firstname = $request->input('firstname');
        $lastname = $request->input('lastname');
        $email = $request->input('email');
        $birthday = $request->input('birthday');

        $user = new User();
        $user->firstname = $firstname;
        $user->lastname = $lastname;
        $user->email = $email;
        $user->birthday = $birthday;
        $user->save();

        return redirect()->back()->with('message', 'IT WORKS!');
    }

    public function editAction(){

        return redirect()->back()->with('message', 'Dáta boli <strong>úspešne</strong> aktualizované!');
    }

    public function showAllAction(){

    }

    public function insert_page()
    {
        return view("/crud_operations/insert");
    }
    public function edit_page()
    {
        return view("/crud_operations/edit");
    }
    public function delete_page()
    {
        return view("/crud_operations/delete");
    }
    public function showAll_page()
    {
        $users = User::all();
        return view("/crud_operations/show", ['users'=>$users]);
    }
}