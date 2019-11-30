<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SymptomController extends Controller
{
    public function __invoke()
    {
        return view("static.{$this->lang}.symptoms");
    }
}
