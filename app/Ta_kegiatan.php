<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\ta_spd_rinc;

class Ta_kegiatan extends Model
{
    Protected $table = 'ta_kegiatan';

    Public function ta_spd_rinc (){
        $table->hasMany('App\ta_spd_rinc');
    }
}
