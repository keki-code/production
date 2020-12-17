<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Material_consumptions extends Model
{
    use HasFactory;

    protected $fillable = [
        'material_consumption_type',
        'material_consumption_amount'

    ];
}
