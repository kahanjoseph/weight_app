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
        'user_id',
        'weight',
        'date',
        'remarks',
    ];

    /**
     * The user that the weight entry belongs to.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
