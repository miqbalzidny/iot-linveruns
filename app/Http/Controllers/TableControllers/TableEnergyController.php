<?php

namespace App\Http\Controllers\TableControllers;

use App\Http\Controllers\Controller;
use App\Models\Energy;
use App\Models\Exports\EnergyExport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class TableEnergyController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $energy = Energy::latest()->paginate(15);
        return view('tables.table-energy', compact('energy'));
    }

    public function export_excel()
    {
        return Excel::download(new EnergyExport, 'Energy.xlsx');
    }
}
