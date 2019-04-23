<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function static(Request $request)
    {
        $name = $request->route()->getName();

        return view('pages.'.$name);
    }
}
