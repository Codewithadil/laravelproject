<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $table = "customers";
    protected $primaryKey = "customer_id";

    public function setNameAttribute($value)
    {
        $this->attributes['name'] = ucwords($value); // mutator is use to name capitalize formate display
    }


    //Accessor 
    // public function getDobAttribute($value)
    // {
    //     return date("d-M-Y", strtotime($value));
    // }
}
