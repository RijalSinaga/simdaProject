<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\ta_kegiatan;

class Ta_spd_rinc extends Model
{
    Protected $table = 'ta_spd_rinc';

    Public function ta_kegiatan (){
        $table->belongsTo('App\ta_kegiatan');
    }
}
