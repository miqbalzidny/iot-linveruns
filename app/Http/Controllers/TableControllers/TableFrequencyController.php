<?php

namespace App\Http\Controllers\TableControllers;

use App\Http\Controllers\Controller;
use App\Models\Frequency;
use App\Models\Exports\FrequencyExport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class TableFrequencyController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $frequency = Frequency::latest()->paginate(15);
        return view('tables.table-frequency', compact('frequency'));
    }

    public function export_excel()
    {
        return Excel::download(new FrequencyExport, 'Frequency.xlsx');
    }
}
