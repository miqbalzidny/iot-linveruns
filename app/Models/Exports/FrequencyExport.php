<?php

namespace App\Models\Exports;

use App\Models\Frequency;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Maatwebsite\Excel\Concerns\FromCollection;

class FrequencyExport implements FromCollection
{
    public function collection()
    {
        return Frequency::all();
    }
}
