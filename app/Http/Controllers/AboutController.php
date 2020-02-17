<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class AboutController extends Controller
{
    public function __invoke(Request $request)
    {
        if(View::exists("static.{$this->lang}.about")) {
            return view("static.{$this->lang}.about");
        }

        return view("static.swa.about");
    }
}
