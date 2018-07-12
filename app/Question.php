<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Question extends Model
{
    use Notifiable;
    protected $fillable = [
        'id','questiondescription', 'addedby','created_at'
    ];
    protected  $hidden = [
        'remember_token',
    ];
}



