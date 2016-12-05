<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelKontak extends Model
{
    //
    protected $table='table_contact';
    protected $fillable = array('email', 'name', 'phonenumber','remarks','status');
    
}
