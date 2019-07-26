<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class TaskController extends Controller
{
    public function index(User $usr) {
        //dd($usr);
        return view('home', compact('usr'));
    }
}
