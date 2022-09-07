<?php

namespace App\Models\Exports;

use App\Models\Power;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Maatwebsite\Excel\Concerns\FromCollection;

class PowerExport implements FromCollection
{
    public function collection()
    {
        return Power::all();
    }
}
