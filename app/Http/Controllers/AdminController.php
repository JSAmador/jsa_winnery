<?php

namespace App\Http\Controllers;

class AdminController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('isAdmin');
    }
    public function index(){
        return "you are an administrator";
    }
}