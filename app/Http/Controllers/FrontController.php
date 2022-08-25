<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use App\Models\Posts;


class FrontController extends Controller
{

    public function index()
    {
        return view('front.index');
    }

}
