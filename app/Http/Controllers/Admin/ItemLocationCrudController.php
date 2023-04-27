<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\ItemLocationRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class ItemLocationCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class ItemLocationCrudController extends CrudController
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
        CRUD::setModel(\App\Models\ItemLocation::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/item-location');
        CRUD::setEntityNameStrings('item location', 'item locations');
    }

    /**
     * Define what happens when the List operation is loaded.
     * 
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        CRUD::column('item_location_name');
        CRUD::column('item_location_label');
        // CRUD::addColumn(
        //     [
        //         // 1-n relationship
        //         'label'     => 'Parent', // Table column heading
        //         'type'      => 'select',
        //         'name'      => 'item_location_parent_id', // the column that contains the ID of that connected entity;
        //         'entity'    => 'parent', // the method that defines the relationship in your Model
        //         'attribute' => 'item_location_name', // foreign key attribute that is shown to user
        //         'model'     => "App\Models\ItemLocation", // foreign key model
        //      ],
        // );
        CRUD::column('item_location_descriptions');

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
        CRUD::setValidation(ItemLocationRequest::class);

        CRUD::field('item_location_name');
        CRUD::field('item_location_label');
        CRUD::field('item_location_descriptions');
        // CRUD::addField(
        //     [  // Select
        //         'label'     => "ItemLocation",
        //         'type'      => 'select',
        //         'name'      => 'item_location_parent_id', // the db column for the foreign key
        //         'entity'    => 'itemLocation',
             
        //         // optional - manually specify the related model and attribute
        //         'model'     => "App\Models\ItemLocation", // related model
        //         'attribute' => 'item_location_name', // foreign key attribute that is shown to user
        //         'options'   => (function ($query) {
        //             return $query->orderBy('created_at', 'DESC')->where('id','!=', $this->crud->getCurrentEntryId())->get();
        //         }),
        //      ],
        // );

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
