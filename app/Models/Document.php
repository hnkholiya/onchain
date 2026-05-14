<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    protected $fillable = [
        'unique_id',
        'file_name',
        'hash',
        'tx_hash'
    ];
}
