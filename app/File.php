<?php

namespace App;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class File extends Model
{
    //
   // use Notifiable;

    use CrudTrait;

    protected $fillable = [
        'name','image'
    ];

    public function setImageAttribute($value){
        $attribute_name = "image";
        $disk = "uploads";
        $destination_path = "image";

        $this->uploadFileToDisk($value, $attribute_name, $disk, $destination_path);
    }


}
