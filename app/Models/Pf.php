<?php

namespace App\Models;

use DateTimeInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pf extends Model
{
    use HasFactory;
    protected $table = 'pfs';
    protected $fillable = ['id', 'powerfactor_value'];
    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('H:i:s d-m-Y');
    }
}
