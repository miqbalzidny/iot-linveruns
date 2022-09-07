<?php

namespace App\Models\Exports;

use App\Models\Voltage;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Maatwebsite\Excel\Concerns\FromCollection;

class VoltageExport implements FromCollection
{
    public function collection()
    {
        return Voltage::all();
    }
}
