<?php

namespace App;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
<<<<<<< HEAD
=======
use Backpack\CRUD\app\Models\Traits\SpatieTranslatable\HasTranslations;
use Backpack\CRUD\app\Models\Traits\SpatieTranslatable\Sluggable;
use Backpack\CRUD\app\Models\Traits\SpatieTranslatable\SluggableScopeHelpers;
>>>>>>> remotes/origin/master
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;


class User extends Authenticatable
{
    use CrudTrait;
    use Sluggable, SluggableScopeHelpers;
    use HasTranslations;

    protected $table = 'users';
    protected $primaryKey = 'id';
    // public $timestamps = false;
    // protected $guarded = ['id'];

    // protected $hidden = [];
    // protected $dates = [];
    protected $translatable = ['name', 'slug'];

    use CrudTrait;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'slug_or_name',
            ],
        ];
    }
}
