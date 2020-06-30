<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TemplateController extends Controller
{
    public function template()
    {
        return view('stack30-temp.default');
    }
}
