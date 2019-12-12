<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $fillable = [
        'address',
        'phone_1',
        'phone_2',
        'email_1',
        'email_2',
        'skype_1',
        'skype_2',
        'facebook',
        'twitter',
        'linkedin',
        'title',
        'history',
        'mission',
        'vision',
        ];
}
