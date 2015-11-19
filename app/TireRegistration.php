<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TireRegistration extends Model
{
    public function officers()
    {
        return $this->hasMany('TireRegistrationOfficer');
    }
}
