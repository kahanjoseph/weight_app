<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Weight extends Model
{
    use HasFactory;

    // Specify the table name
    protected $table = 'weight_table';

    // Specify the fields that can be mass-assigned
    protected $fillable = [
        'choices',
        'stack',
        'complete',
    ];
}
