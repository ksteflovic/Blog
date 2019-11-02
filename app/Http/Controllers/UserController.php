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

    public function editAction($id, Request $request){

        $user = User::where("id", "=", $id)->first();
        $user->update(['firstname' => $request->input('firstname'),
            'lastname' => $request->input('lastname'),
            'email' => $request->input('email'),
            'birthday' => $request->input('birthday')]);

        $msg = 'Dáta boli <strong>úspešne</strong> aktualizované!';

        return redirect()->action('UserController@showAll_page')->with('message', $msg);
    }

    public function deleteAction($id){

        User::where('id', '=', $id)->delete();

        $msg = 'Údaj bol <strong>úspešne</strong> vymazaný!';
        return redirect()->action('UserController@showAll_page')->with('message', $msg);
    }

    public function insert_page()
    {
        return view("/crud_operations/insert");
    }
    public function edit_page($id)
    {
        $user = User::find($id);
        return view("/crud_operations/edit",  ['user'=>$user]);
    }
    public function delete_page($id)
    {
        $user = User::find($id);
        return view("/crud_operations/delete",  ['user'=>$user]);
    }
    public function showAll_page()
    {
        $users = User::all();
        return view("/crud_operations/show", ['users'=>$users]);
    }
}