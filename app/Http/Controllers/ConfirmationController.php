<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConfirmationController extends Controller
{
    public function show($matricule)
    {
        return view('confirmation', ['matricule' => $matricule]);
    }
}
