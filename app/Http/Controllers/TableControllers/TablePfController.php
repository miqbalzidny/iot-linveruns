<?php

namespace App\Http\Controllers\TableControllers;

use App\Http\Controllers\Controller;
use App\Models\Pf;
use App\Models\Exports\PfExport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class TablePfController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $pf = Pf::latest()->paginate(15);
        return view('tables.table-pf', compact('pf'));
    }

    public function export_excel()
    {
        return Excel::download(new PfExport, 'Pf.xlsx');
    }
}
