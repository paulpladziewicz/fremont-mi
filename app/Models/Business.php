<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Business extends Model
{
    use HasFactory;

    protected $table = 'business';
    protected $primaryKey = 'business_id';

    protected $fillable = [
        'name',
        'description'
    ];

}
