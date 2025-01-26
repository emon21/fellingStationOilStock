<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CalibarationChart extends Model
{
    use HasFactory;

    protected $fillable = [
        'dip_in_mm',
        'qty_in_ltr',
        'cat_id',
    ];

    # Relationship
    public function category()
    {
        return $this->belongsTo(Category::class,'cat_id');
    }
}
