<?php

namespace App\Http\Controllers\ChartControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ChartPowerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('charts.chart-power');
    }
}
