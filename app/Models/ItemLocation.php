<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItemLocation extends Model
{
    use CrudTrait;
    use HasFactory;
    protected $fillable = [
        'item_location_name',
        'item_location_label',
        'item_location_descriptions',
        // 'item_location_parent_id'
    ];

    // public function itemLocation()
    // {
    //     // dd($this->belongsTo('App\Models\ItemLocation', 'item_location_parent_id','id')->whereNotIn('id',[1])->get());
    //     return $this->belongsTo('App\Models\ItemLocation', 'item_location_parent_id','id');
    // }

    // public function parent(){
    //     return $this->itemLocation();
    // }

    // public function children()
    // {
    //     return $this->hasMany('App\Models\ItemLocation', 'item_location_parent_id', 'id');
    // }
}
