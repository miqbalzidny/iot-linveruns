<?php

namespace App\Models\Exports;

use App\Models\Pf;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Maatwebsite\Excel\Concerns\FromCollection;

class PfExport implements FromCollection
{
    public function collection()
    {
        return Pf::all();
    }
}
