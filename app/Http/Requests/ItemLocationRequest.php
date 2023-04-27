<?php

namespace App\Http\Requests;

use App\Models\ItemLocation;
use Illuminate\Validation\Rule;
use Illuminate\Database\Query\Builder;
use Illuminate\Foundation\Http\FormRequest;

class ItemLocationRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // only allow updates if the user is logged in
        return backpack_auth()->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        // dd($this->route('model'));
        // $rule = null;
        // if(!empty(request('id')) and request('item_location_parent_id') != null){
        //     $parentId = ItemLocation::find(request('id'))->children()->get('item_location_parent_id')->toArray();
        //     dd($parentId);
        //     $rule = Rule::in([$parentId]);
        // }
        return [
            'item_location_name' => 'required|unique:item_locations,item_location_name,'.request('id'),
            // 'item_location_parent_id' => [
            //    $rule
            // ]
            // apakah id dari item_location_parent_id ada di dalam child dari current location, kalo ada ga bisa di save 
        ];
    }

    /**
     * Get the validation attributes that apply to the request.
     *
     * @return array
     */
    public function attributes()
    {
        return [
            //
        ];
    }

    /**
     * Get the validation messages that apply to the request.
     *
     * @return array
     */
    public function messages()
    {
        return [
            //
        ];
    }
}
