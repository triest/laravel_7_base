<?php

namespace App;

use Backpack\CRUD\app\Models\Traits\CrudTrait;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    //
    use CrudTrait;

    protected $fillable = [
        'name'];

    public function file(){
        return $this->belongsToMany(File::class);
    }
}
