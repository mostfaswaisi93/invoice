<?php

namespace App\Http\Controllers\Admin;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Validation\Rule;
use Brian2694\Toastr\Facades\Toastr;

class UserController extends Controller
{
    public function edit(User $user)
    {
        return view('admin.users.edit')->with('user', $user);
    }

    public function update(Request $request, User $user)
    {
        $rules = [
            'name'          => 'required',
            'username'      => ['required', Rule::unique('users')->ignore($user->id)],
            'email'         => ['required', Rule::unique('users')->ignore($user->id)]
        ];

        $request->validate($rules);
        User::create($request->all());
        Toastr::success(__('admin.added_successfully'));
        return redirect()->route('admin.users.index');
    }

    public function change(User $user)
    {
        return view('admin.users.change')->with('user', $user);
    }
}
