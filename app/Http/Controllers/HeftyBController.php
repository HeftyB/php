<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HeftyBController extends Controller
{
    public function index() {
        return view("landing");
    }

    public function contact() {
        return view("contact");
    }

    public function register() {
        return view("auth.register");
    }
}
