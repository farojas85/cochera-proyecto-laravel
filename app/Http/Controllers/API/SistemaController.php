<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SistemaController extends Controller
{
    public function index()
    {
        return view('sistema.index');
    }
}
