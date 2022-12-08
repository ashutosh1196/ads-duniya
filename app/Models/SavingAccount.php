<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SavingAccount extends Model
{
    use HasFactory;

    public function bank(){
    	return $this->belongsTo(Bank::class,'bank_id');
    }
}
