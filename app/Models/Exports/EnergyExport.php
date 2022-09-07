<?php

namespace App\Models\Exports;

use App\Models\Energy;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Maatwebsite\Excel\Concerns\FromCollection;

class EnergyExport implements FromCollection
{
    public function collection()
    {
        return Energy::all();
    }
}
