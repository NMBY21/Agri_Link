<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    // use HasFactory;

    protected $table = 'customers'; // Change this to your actual table name

    protected $fillable = ['name', 'email', 'number_phone', 'status_user']; // Define the fields you can mass assign
}
