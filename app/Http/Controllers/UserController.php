<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{

    public function index(){
        return view('welcome');
    }

    public function teste($id = null, $name = null){
        return view('funga', ['id' => $id,
    'name' => $name]);   
    }

}
