<?php

namespace App;

use Jenssegers\Mongodb\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class Distributor extends Authenticatable implements AuthenticatableContract, CanResetPasswordContract
{
    use Notifiable;

    protected $connection = 'mongodb';
    protected $collection = 'distributors';
    // Other necessary configurations
}
