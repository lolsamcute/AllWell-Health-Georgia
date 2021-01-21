<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
                                         /**
    * The table associated with the model.
    *
    * @var string
    */
    protected $table = 'appointment';

    protected $fillable=['name', 'email', 'service', 'phone',];

}
