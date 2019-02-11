<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helpers\ReadExcersie;
use App\Helpers\ReadSolution;

class MainController extends Controller
{
    public function index() {
        return view('index');
    }

    public function solve(Request $request) {
        $problem = $request->post('debai');

        dd($problem);
    }
}
