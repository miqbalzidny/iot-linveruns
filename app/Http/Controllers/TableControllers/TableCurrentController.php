<?php

namespace App\Http\Controllers\TableControllers;

use App\Http\Controllers\Controller;
use App\Models\Current;
use App\Models\Exports\CurrentExport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class TableCurrentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $current = Current::latest()->paginate(15);
        return view('tables.table-current', compact('current'));
    }

    public function export_excel()
    {
        return Excel::download(new CurrentExport, 'Current.xlsx');
    }
}
