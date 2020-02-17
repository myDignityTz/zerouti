<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class WelcomeController extends Controller
{
    public function __invoke(Request $request)
    {
        if(View::exists("static.{$this->lang}.welcome")) {
            return view("static.{$this->lang}.welcome");
        }

        return view("static.swa.welcome");
    }
}
