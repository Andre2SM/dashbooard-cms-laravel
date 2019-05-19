<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Issues extends Model
{
    protected $table = 'issues';
    protected $fillable = ['detail', 'severity', 'evidence', 'status'];
}
