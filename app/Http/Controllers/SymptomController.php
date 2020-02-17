<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class SymptomController extends Controller
{
    public function __invoke()
    {
        if(View::exists("static.{$this->lang}.symptoms")) {
            return view("static.{$this->lang}.symptoms");
        }

        return view("static.swa.symptoms");
    }
}
