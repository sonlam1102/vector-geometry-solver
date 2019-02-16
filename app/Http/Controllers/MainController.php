<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helpers\ReadExcersie;
use App\Helpers\ReadSolution;
use App\Console\RunCommand;

class MainController extends Controller
{
    public function index() {
        return view('solve.solve');
    }

    public function solve(Request $request) {
        $problem = $request->post('debai');

        ReadExcersie::main($problem);

        $run_bat = new RunCommand('giaitoan.mpl');

        $run_bat->execute();

        $result = ReadSolution::main();

        return response($result);
    }

    public function info() {
        return view('info.info');
    }

    public function sample() {
        return view('sample.sample');
    }
}
