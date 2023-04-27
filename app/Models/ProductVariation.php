<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductVariation extends Model
{
    use CrudTrait;
    use HasFactory;

    protected $fillable = [
        'product_category_id',
        'product_variation_name'
    ];

    public function ProductCategory()
    {
        return $this->belongsTo('App\Models\ProductCategory', 'product_category_id','id');
    }
}
