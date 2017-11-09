<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hoard extends Model
{
    /**
     * Fillable fields for a hoard.
     *
     * @var array
     */
    protected $fillable = ['user_id'];
}
