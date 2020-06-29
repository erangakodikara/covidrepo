<?php

namespace App\Model;

use App\User;
use Illuminate\Database\Eloquent\Model;

class DeviceActivitie extends Model
{
    //
    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
