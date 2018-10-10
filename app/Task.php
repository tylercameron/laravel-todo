<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    // doing this basically says only these fields will be accepted from form request
    protected $fillable = ['body', 'completed'];
}
