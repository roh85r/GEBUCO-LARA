<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard'); // Assurez-vous que le nom de la vue correspond à votre vue de tableau de bord
    }
}
