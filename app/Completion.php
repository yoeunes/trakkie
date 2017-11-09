<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Completion extends Model
{
    /**
     * Fillable fields for a completion.
     *
     * @var array
     */
    protected $fillable = ['user_id'];
}
