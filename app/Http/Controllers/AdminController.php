<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\modes\User;
class AdminController extends Controller
{
    //
    //view dashborad
    public function index(){
        return view('dashborad.admin');
    }
}
