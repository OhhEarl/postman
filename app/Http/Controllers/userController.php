<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class userController extends Controller
{


public function index(){
    return User::all();
}

public function store(Request $request){
    $request->validate([
        'fname' => 'required',
        'mname' => 'required',
        'lname' => 'required',
        'email' => 'required',
        'password' => 'required'
    ]);
    return User::create($request->all());
}


public function show($id){
    return User::find($id);
}

public function update(Request $request ,$id){
    $post = User::find($id);
    return $post->update($request->all());
}

public function destroy($id){
    return User::destroy($id);
}



}
