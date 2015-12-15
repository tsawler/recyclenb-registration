<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class BrandRegistration
 * @package App
 */
class BrandRegistration extends Model {

    /**
     * @var array
     */
    protected $fillable = [
        'name_of_applicant',
        'type',
        'head_physical_location',
        'head_mailing_address',
        'head_province_state',
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
        return $this->hasMany('App\BrandRegistrationOfficer');
    }


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function brandType()
    {
        return $this->hasOne('App\BrandType', 'id', 'type');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function OilNumber()
    {
        return $this->hasOne('App\OilNumber');
    }


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function PaintNumber()
    {
        return $this->hasOne('App\PaintNumber');
    }


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function ElectronicsNumber()
    {
        return $this->hasOne('App\ElectronicsNumber');
    }

}
