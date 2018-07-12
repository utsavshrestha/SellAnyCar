<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Feedback extends Model
{
    use Notifiable;
    protected $table='feedbacks';
    protected  $fillable =[
        'feedbacks','addedby','created_at',

    ];
    protected  $hidden = [
        'remember_token',
    ];

}
