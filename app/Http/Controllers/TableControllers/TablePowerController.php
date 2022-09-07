<?php

namespace App\Http\Controllers\TableControllers;

use App\Http\Controllers\Controller;
use App\Models\Power;
use App\Models\Exports\PowerExport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class TablePowerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $power = Power::latest()->paginate(15);
        return view('tables.table-power', compact('power'));
    }

    public function export_excel()
    {
        return Excel::download(new PowerExport, 'Power.xlsx');
    }
}
