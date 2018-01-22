<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    protected $fillable = array('file_id', 'note', 'file', 'name', 'size');
}
