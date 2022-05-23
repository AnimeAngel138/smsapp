<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    use HasFactory;
    // table name
    protected $table= 'accounts';
     // Primary key
     public $primaryKey = 'AccountID';
     // Timestamps
     public $timestamps = true;

}
