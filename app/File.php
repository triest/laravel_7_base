<?php

namespace App;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class File extends Model
{
    //
    use Notifiable;

    use CrudTrait;

    protected $fillable = [
        'name'
    ];
}
