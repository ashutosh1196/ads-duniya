<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CreditCard extends Model
{
    use HasFactory;

    public const IMAGE_URL = 'http://localhost/ads-duniya-admin/public/credit-cards/';

    public function bank(){
    	return $this->belongsTo(Bank::class,'bank_id');
    }

    public function creditCardType(){
    	return $this->belongsTo(CreditCardType::class,'type');
    }
}
