<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class subscriberModel extends Model
{
    use HasFactory;


  protected $table = 'subtable';

    protected $fillable = [
        'name',
        'address',
        'contract',
        'subscriptions',
    ];

}
