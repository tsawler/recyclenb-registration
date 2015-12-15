<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TireRegistration
 * @package App
 */
class TireRegistration extends Model {

    /**
     * @var array
     */
    protected $fillable = [
        'name_of_applicant',
        'sell_tires',
        'remittance',
        'type_of_company',
        'head_physical_location',
        'head_province_state',
        'head_mailing_address',
        'head_zip',
        'nb_physical_location',
        'nb_mailing_address',
        'nb_province_state',
        'nb_zip',
        'contact_name',
        'contact_physical_location',
        'contact_mailing_address',
        'contact_province_state',
        'contact_zip',
        'contact_phone',
        'contact_email',
        'agent_name',
        'agent_company_name',
        'agent_physical_location',
        'agent_mailing_address',
        'agent_province_state',
        'agent_zip',
        'agent_phone',
        'agent_email',
        'signature',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function officers()
    {
        return $this->hasMany('App\TireRegistrationOfficer');
    }
}
