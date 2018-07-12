<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Event extends Model
{
    use Notifiable;
    protected $table='events';
    protected  $fillable =[
        'image','eventsname','eventsdescription','eventslocation','eventsdatetime','created_at','updated_at',

    ];
    protected  $hidden = [
        'remember_token',
    ];
}
