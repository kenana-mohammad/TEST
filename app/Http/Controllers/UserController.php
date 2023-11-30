<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
class UserController extends Controller
{
    //
    public function index(){
        $user = User::get();
        return view('dashborad.users.show_User',compact('user'));
    }
}
