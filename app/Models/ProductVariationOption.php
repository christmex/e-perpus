<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductVariationOption extends Model
{
    use CrudTrait;
    use HasFactory;

    protected $fillable = [
        'product_variation_id',
        'product_variation_option_name'
    ];

    public function ProductVariation()
    {
        return $this->belongsTo('App\Models\ProductVariation', 'product_variation_id','id');
    }
}
