<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AutoSeller extends Model
{
    use HasFactory;
    protected $table = 'sellers';

    public const IMAGE_URL = 'http://localhost/ads-duniya-admin/public/seller/';
}
