<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Websites extends Model
{
    protected $table = 'websites';
    protected $fillable = ['domain', 'user_id'];

    public function issues(){
        return $this->hasMany(Issues::class);
    }

    public function user(){
        return $this->belongsTo(User::Class);
    }
}
