<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Websites extends Model
{
    protected $table = 'websites';
    protected $fillable = ['domain', 'user_id'];

    public function user(){
        return $this->belongsTo(User::Class);
    }
}
