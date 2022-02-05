<?php

declare(strict_types=1);


namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show(Request $req){
        return User::all()->toArray();
    }

    public function create(Request $req){
        User::create([
            'name' => $req->get('name'),
            'email' => $req->get('email'),
            'password' => '123',
        ])->toArray();
        return 'User successfully created';
    }

    public function delete(Request $req, $id){
        User::find($id)->delete();
        return 'User successfully deleted';
    }
}
