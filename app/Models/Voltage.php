<?php

namespace App\Models;

use DateTimeInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Voltage extends Model
{
    use HasFactory;
    protected $table = 'voltages';
    protected $fillable = ['id', 'voltage_value'];
    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('H:i:s d-m-Y');
    }
}
