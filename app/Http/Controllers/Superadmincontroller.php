<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class Superadmincontroller extends Controller
{
    //public function __construct()
    //{
    //    $this->middleware('role:superadmin');
    //}

    public function index()
    {
        return view('superadmin.index');
    }
}
