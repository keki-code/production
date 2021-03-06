<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Suppliers extends Model
{
    use HasFactory;

    protected $fillable = [
        'supplier_name',
        'supplier_transportation_form',
        'supplier_produce_coast',
        'supplier_material_type'

    ];

    public function users() { return $this->hasMany(User::class); }
}
