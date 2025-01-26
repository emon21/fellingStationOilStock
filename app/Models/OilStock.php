<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OilStock extends Model
{
    use HasFactory;
    protected $fillable = ['tank_name', 'tank_no', 'matien_no', 'last_reading', 'fast_reading', 'fast_dip', 'fast_qty', 'last_dip', 'last_qty'];
}
