<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class PreventionController extends Controller
{
    public function __invoke()
    {
        if(View::exists("static.{$this->lang}.preventions")) {
            return view("static.{$this->lang}.preventions");
        }

        return view("static.swa.preventions");
    }
}
