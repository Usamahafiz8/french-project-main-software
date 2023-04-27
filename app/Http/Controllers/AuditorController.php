<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Models\User;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;


class AuditorController extends Controller
{
    
    public function add_auditor(Request $req)
    {
        
        if($req->hasfile('avatar')){
            $avatarName = time().'.'.$req->avatar->getClientOriginalExtension();
            $req->avatar->move(public_path('avatars'), $avatarName);
        }
  
        $add_user = new User();
        $add_user->name = $req->name;
        $add_user->address = $req->address;
        $add_user->contact = $req->contact;
        $add_user->avatar = $avatarName;
        $add_user->email = $req->email;
        $add_user->password =  Hash::make($req->password);
        $add_user->is_admin = $req->role;
        $add_user->save();  
        return redirect('admin/home')->with('success','Auditor Created successfuly');
        // return User::create([
        //     'name' => $data['name'],
        //     'contact' => $data['contact'],
        //     'address' => $data['address'],
        //     'avatar' => $avatarName ?? NULL,
        //     'email' => $data['email'],
        //     'is_admin' => $data['role'],
        //     'password' => Hash::make($data['password']),
        // ]);
    }
}
