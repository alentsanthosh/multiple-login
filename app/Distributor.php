<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Distributor extends Eloquent
{
    /**
     * The collection associated with the model.
     *
     * @var string
     */
    protected $collection = 'distributors';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', // Add other fields as necessary
    ];
}
