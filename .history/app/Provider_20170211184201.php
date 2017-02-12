<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;


class Provider extends Eloquent
{
    public $operators;
    protected $connection = 'mongodb';
    protected $collection = 'register';
}
