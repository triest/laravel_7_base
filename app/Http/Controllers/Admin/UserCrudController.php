<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


use Backpack\CRUD\app\Http\Controllers\CrudController;


class UserCrudController extends CrudController
{
    //

    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;

    public function setup()
    {
        $this->crud->setModel("App\User");
        $this->crud->setRoute("admin/user");
        $this->crud->setEntityNameStrings('Пользователь', 'Пользователи');
    }

    public function setupListOperation()
    {
        $this->crud->setColumns(['name', 'slug']);
    }

    public function setupCreateOperation()
    {


        $this->crud->addField([
            'name' => 'name',
            'type' => 'text',
            'label' => "Tag name"
        ]);
        $this->crud->addField([
            'name' => 'slug',
            'type' => 'text',
            'label' => "URL Segment (slug)"
        ]);

        $this->crud->addField([
            'name' => 'email',
            'type' => 'text',
            'label' => "email"
        ]);

        $this->crud->addField([
            'name' => 'password',
            'type' => 'text',
            'label' => "password"
        ]);
    }

    public function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }
}
