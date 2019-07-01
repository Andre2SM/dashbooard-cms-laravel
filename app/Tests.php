<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tests extends Model
{
    protected $table = 'tests';
    protected $fillable = ['website_id', 'pagespeed_id', 'gtmetrix_id', 'time_generated'];

    public function websites(){
        return $this->belongsTo(Websites::Class);
    }

    public function pagespeed(){
        return $this->belongsTo(Pagespeed::Class);
    }

    public function gtmetrix(){
        return $this->belongsTo(Gtmetrix::Class);
    }
}
