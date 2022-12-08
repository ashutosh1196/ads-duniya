<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bank extends Model
{
    use HasFactory;

    public const IMAGE_URL = 'http://localhost/ads-duniya-admin/public/banks/';
    public const ACTIVE = 1;
    public const INACTIVE = 0;
}
