<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'content', 'image'];

    // Specify the table if it's not the plural form of the model name
    protected $table = 'educations'; // Uncomment if needed
}
