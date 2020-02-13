<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{


    public function show($name){
        //$user = \DB::table('users')->where('name', $name)->first();
        return view('users', ['user' => User::where('name', $name)->firstOrFail()]);
    }

    public function index(){
        $users = User::all();
        return view ('users', ['users'=>$users]);
    }

    public function countUser(){
        return $users = User::all()->count();
    }

    public function showProfile(){
        $users = User::all();
        return view('profile',['users'=>$users]);
    }

    /**
     * Method create a new user
     */
    public function create(){

    }

    public function store(){

    }

    

    public function edit(){

    }

    public function update(){

    }

    public function destroy(){

    }
}
