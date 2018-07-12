<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Booking extends Model
{
    use Notifiable;
    protected $fillable=[
        'id','firstname','lastname','address','addedby','phonenumber','carname','carprice','cardescription',
    ];
    protected  $hidden = [
        'remember_token',
    ];
}
