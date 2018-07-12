<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Cars extends Model
{
    use Notifiable;

    protected  $fillable = [
          'carimage','carname','cardescription','cartype','carprice','addedby','carusedfor','status',
        ];

    protected  $hidden = [
        'remember_token',
    ];
}
