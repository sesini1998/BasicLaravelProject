<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    // Disable the automatic timestamp columns (created_at and updated_at).
    public $timestamps = false;
}
