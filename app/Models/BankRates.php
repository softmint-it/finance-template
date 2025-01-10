<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BankRates extends Model
{
    use HasFactory;

    protected $table = 'bank_rates';

    protected $fillable = ['bank_id', 'vehicle_type', 'year', 'min_rate','max_rate','note','status'];

}
