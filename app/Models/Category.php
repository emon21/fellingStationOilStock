<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable = [
        'tank_name',
    ];

    # Relationship
    public function calibaration()
    {
        return $this->hasMany(CalibarationChart::class,'cat_id');
    }
}
