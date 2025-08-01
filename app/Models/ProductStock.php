<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductStock extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['product_id', 'sku_code', 'quantity'];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
    
    public function attributeOptions()
    {
        return $this->hasMany(AttributeProductOption::class, 'product_stock_id');
    }

}