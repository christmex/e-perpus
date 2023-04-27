<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\ProductVariationOptionRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class ProductVariationOptionCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class ProductVariationOptionCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    /**
     * Configure the CrudPanel object. Apply settings to all operations.
     * 
     * @return void
     */
    public function setup()
    {
        CRUD::setModel(\App\Models\ProductVariationOption::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/product-variation-option');
        CRUD::setEntityNameStrings('product variation option', 'product variation options');
    }

    /**
     * Define what happens when the List operation is loaded.
     * 
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        // CRUD::column('product_variation_id');
        CRUD::addColumn([
            "name" => "product_variation_id",
            "entity" => "ProductVariation",
            "model" => "App\Models\ProductVariation",
            "type" => "select",
            "attribute" => "product_variation_name"
        ]);
        CRUD::column('product_variation_option_name');

        /**
         * Columns can be defined using the fluent syntax or array syntax:
         * - CRUD::column('price')->type('number');
         * - CRUD::addColumn(['name' => 'price', 'type' => 'number']); 
         */
    }

    /**
     * Define what happens when the Create operation is loaded.
     * 
     * @see https://backpackforlaravel.com/docs/crud-operation-create
     * @return void
     */
    protected function setupCreateOperation()
    {
        CRUD::setValidation(ProductVariationOptionRequest::class);

        // CRUD::field('product_variation_id');
        CRUD::addField([
            'type' => 'select',
            'name' => 'product_variation_id', // the relationship name in your Migration
            'entity' => 'ProductVariation', // the relationship name in your Model
            'attribute' => 'product_variation_name',
        ]);
        CRUD::field('product_variation_option_name');

        /**
         * Fields can be defined using the fluent syntax or array syntax:
         * - CRUD::field('price')->type('number');
         * - CRUD::addField(['name' => 'price', 'type' => 'number'])); 
         */
    }

    /**
     * Define what happens when the Update operation is loaded.
     * 
     * @see https://backpackforlaravel.com/docs/crud-operation-update
     * @return void
     */
    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }
}
