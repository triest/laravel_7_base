<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Illuminate\Http\Request;

class TagCrudController   extends CrudController
{
    //
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;

    public function setup()
    {
        $this->crud->setModel("App\Tag");
        $this->crud->setRoute("admin/tag");
        $this->crud->setEntityNameStrings('тег', 'теги');
    }

    public function setupListOperation()
    {
        $this->crud->setColumns(['name']);
    }

    public function setupCreateOperation()
    {
        $this->crud->addField([
            'name' => 'name',
            'type' => 'text',
            'label' => "Название"
        ]);


    }
}
