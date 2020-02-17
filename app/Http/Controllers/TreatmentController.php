<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class TreatmentController extends Controller
{
    public function __invoke()
    {
        if(View::exists("static.{$this->lang}.treatments")) {
            return view("static.{$this->lang}.treatments");
        }

        return view("static.swa.treatments");
    }
}
