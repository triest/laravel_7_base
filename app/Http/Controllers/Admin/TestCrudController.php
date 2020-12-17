<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Illuminate\Http\Request;

class TestCrudController extends CrudController
{
    //

    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;

    public function setup()
    {
        $this->crud->setModel("App\File");
        $this->crud->setRoute("admin/test");
        $this->crud->setEntityNameStrings('файл', 'файлы');
    }

    public function setupListOperation()
    {
        $this->crud->addColumn(['name' => 'name', 'label' => 'Название', 'type' => 'Text']);
        $this->crud->addColumn(['name' => 'tag', 'label' => 'Тег', 'type' => 'relationship',
        ]);
    }

    public function setupCreateOperation()
    {
        $this->crud->addField([
            'name' => 'name',
            'type' => 'text',
            'label' => "Название"
        ]);

        $this->crud->addField([
            'name' => 'image',
            'type' => 'upload',
            'label' => "Изображение",
            'upload' => true,
            'disk' => 'uploads',
        ]);

        $this->crud->addField([
            'label' => 'Тег',
            'name' => 'tag',
            'entity' => 'tag',
            'type' => 'select2_multiple',
            'attribute' => 'name',
            'pivot' => true,
            'model' => 'App\Tag',
            'options' => (function ($query) {
                return $query->orderBy('name', 'ASC')->get();
            })

        ]);
    }

    public function setupUpdateOperation()
    {
        $this->crud->addField([
            'name' => 'name',
            'type' => 'text',
            'label' => "Название"
        ]);

        $this->crud->addField([
            'name' => 'image',
            'type' => 'upload',
            'label' => "Изображение",
            'upload' => true,
            'disk' => 'uploads',
        ]);

        $this->crud->addField([
            'label' => 'Тег',
            'name' => 'tag',
            'entity' => 'tag',
            'type' => 'select2_multiple',
            'attribute' => 'name',
            'pivot' => true,
            'model' => 'App\Tag',
            'options' => (function ($query) {
                return $query->orderBy('name', 'ASC')->get();
            })

        ]);
    }
}
