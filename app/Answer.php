<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;


class Answer extends Model
{
    use Notifiable;
    protected $fillable = [
        'id','answerdescription', 'addedby','question_id','created_at'
    ];
    protected  $hidden = [
        'remember_token',
    ];
}
