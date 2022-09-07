<?php

namespace App\Http\Controllers\TableControllers;

use App\Http\Controllers\Controller;
use App\Models\Voltage;
use App\Models\Exports\VoltageExport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class TableVoltageController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $voltage = Voltage::latest()->paginate(15);
        return view('tables.table-voltage', compact('voltage'));
    }
    
    public function export_excel()
    {
        return Excel::download(new VoltageExport, 'Voltage.xlsx');
    }
}
