<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;


class Register extends Eloquent
{
    protected $connection = 'mongodb';
    protected $collection = 'register';
}
