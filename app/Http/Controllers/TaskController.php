<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class TaskController extends Controller
{
    public function index() {
        $user = User::paginate(1);
        //return $user;
        return view('home', compact('user'));
    }
}
