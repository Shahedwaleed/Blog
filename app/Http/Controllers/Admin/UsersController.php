<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UsersController extends Controller
{
 
    public function index(){
        $users = User::all();
     //  return($Users);
       return view('admin.users.index',[
        'users'=> $users
    ]);
     }
}
