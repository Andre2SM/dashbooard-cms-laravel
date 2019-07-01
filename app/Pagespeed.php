<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pagespeed extends Model
{
    protected $table = 'pagespeeds';
    protected $fillable = ['pagespeedMobile_id', 'pagespeedDesktop_id', 'url_report'];

    public function tests(){
        return $this->hasMany(Tests::class);
    }

    public function pagespeedmobile(){
        return $this->belongsTo(Pagespeedmobile::Class);
    }
    
    public function pagespeeddesktop(){
        return $this->belongsTo(Pagespeeddesktop::Class);
    }
}
