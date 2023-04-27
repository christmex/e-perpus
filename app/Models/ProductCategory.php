<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductCategory extends Model
{
    use CrudTrait;
    use HasFactory;

    protected $fillable = [
        'product_category_parent_id',
        'product_category_name'
    ];

    public function ProductCategory()
    {
        return $this->belongsTo('App\Models\ProductCategory', 'product_category_parent_id','id');
    }

    public function parent(){
        return $this->ProductCategory();
    }
}
