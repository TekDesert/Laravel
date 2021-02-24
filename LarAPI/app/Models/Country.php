<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    #use HasFactory;

    protected $table = 'country'; #definy reference table

    public $timestamps = false; #There is no Timestamp column in this table
}
