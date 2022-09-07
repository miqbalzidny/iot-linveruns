<?php

namespace App\Models\Exports;

use App\Models\Current;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Maatwebsite\Excel\Concerns\FromCollection;

class CurrentExport implements FromCollection
{
    public function collection()
    {
        return Current::all();
    }
}
