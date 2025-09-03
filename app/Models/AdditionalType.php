<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AdditionalType extends Model
{
    protected $table = 'additionaltypes';
    protected $fillable = ['nama', 'statusenabled','harga'];
}