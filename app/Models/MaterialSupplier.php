<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MaterialSupplier extends Model
{
    use HasFactory;

    protected $fillable = [
        'material_supplier_type',
        'material_supplier_amount',
        'material_supplier_price'

    ];
}
