<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CompanyEvent extends Model
{
    protected $table = 'company_events';
    protected $dates = [
        'start',
        'end',
    ];

    public function users()
    {
        return $this->belongsToMany('App\User', 'user_events', 'event_id', 'user_id');
    }
}
