<?php

namespace App\Models;

use DateTimeInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Frequency extends Model
{
    use HasFactory;
    protected $table = 'frequencies';
    protected $fillable = ['id', 'frequency_value'];
    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('H:i:s d-m-Y');
    }
}
