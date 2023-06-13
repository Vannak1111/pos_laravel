<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table ="products";
    protected $fillable = [
        'name',
        'type',
        'quantity',
    ];
    public function getSupplieName(){
        return $this->belongsTo(Supplier::class,'supplier_id');
    }
}
