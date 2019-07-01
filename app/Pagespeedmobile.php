<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pagespeedmobile extends Model
{
    protected $table = 'pagespeedMobiles';
    protected $fillable = ['score', 'first_content_paint', 'speed_meaningful_paint', 
    'speed_index','first_cpu_idle','time_to_interactive','max_potential_First_input_delay','screenshot'];

    public function pagespeed(){
        return $this->hasMany(PageSpeed::class);
    }
}
