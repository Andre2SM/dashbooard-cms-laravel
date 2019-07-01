<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gtmetrix extends Model
{
    protected $table = 'gtmetrixes';
    protected $fillable = ['page_speed_score', 'yslow_score', 'fully_load_time',
    'total_page_size','requests','screenshot','url_report'];

    public function tests(){
        return $this->hasMany(Tests::class);
    }
}
