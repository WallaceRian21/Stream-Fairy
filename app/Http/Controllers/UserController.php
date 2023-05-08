<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;


class UserController extends Controller
{
    public function users()
    {
        return view('admin.users', ['users' => User::all()]);
    }

    public function edit($id) 
    {
       if(!$users = $users = User::where('id', $id)->first()) 
        {
            return back();
        }

        return view('admin/edit', ['users' => $users]);
    }

    public function update(Request $request, User $users, $id)
    {
        if(!$users = $users->find($id)) 
            {
                return back();
            }

        $users->update($request->only([
            'email', 'name'
        ]));   
        
        return redirect()->route('users');
    }

}
