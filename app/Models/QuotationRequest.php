<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuotationRequest extends Model
{
    use HasFactory;

    protected $table = 'quotation_requests';

    protected $fillable = ['bank_id', 'rate_id', 'rate', 'amount', 'installment','requester_name','email','mobile','note'];

}