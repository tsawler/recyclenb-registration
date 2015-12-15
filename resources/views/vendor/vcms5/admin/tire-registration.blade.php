@extends('vcms5::base')

@section('top-white')
    <h1>{!! Lang::get('vcms.trand_registration') !!}: {!! $registration->name_of_applicant !!}</h1>
@stop

@section('content-title')

@stop

@section('content')
    <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>{!! Lang::get('vcms.tire_registration') !!}  <a href="/admin/registrations/print-tire-registration?id={!! $registration->id !!}"><i class="fa fa-file-pdf-o"></i> Download PDF</a></h5>
                <div class="ibox-tools">
                    <a class="collapse-link">
                        <i class="fa fa-chevron-up"></i>
                    </a>
                </div>
            </div>

            <div class="ibox-content">

                <div role="tabpanel">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation"
                            @if(! Input::has('tab'))
                            class="active"
                                @endif
                        ><a href="#registration" aria-controls="registration" role="tab" data-toggle="tab">Registration</a></li>
                        @if($registration->id > 0)
                            <li role="presentation"
                                @if((Input::has('tab')) && (Input::get('tab') == 'officers'))
                                class="active"
                                    @endif
                            ><a href="#officers" aria-controls="officers" role="tab" data-toggle="tab">Officers</a></li>
                        @endif
                    </ul>

                    <div class="tab-content">
                        <div role="tabpanel"
                             @if(! Input::has('tab'))
                             class="tab-pane active"
                             @else
                             class="tab-pane"
                             @endif
                             id="registration">

                            {!! Form::model($registration, [
                                'url' => '/admin/registrations/tire-registration',
                                'name' => 'bookform',
                                'id' => 'bookform',
                                ]) !!}

                            <div class="form-group">
                                <label for="name_of_applicant">{!! Lang::get('forms.name_of_applicant') !!}</label>
                                {!! Form::text('name_of_applicant', null, ['id' => 'name_of_applicant', 'class' => 'form-control']) !!}
                            </div>

                            <div class="form-group">
                                <label>{!! Lang::get('forms.does_your_company') !!}</label>

                                <div class="checkbox">
                                    <label>
                                        {!! Form::radio('sell_tires', '1') !!} {!! Lang::get('forms.yes_we_sell') !!}
                                    </label><br>
                                    <label>
                                        {!! Form::radio('sell_tires', '0') !!} {!! Lang::get('forms.no_we_do_not') !!}
                                    </label>
                                </div>
                            </div>

                            <h2>{!! Lang::get('forms.address_head_office') !!}</h2>

                            <div class="form-group">
                                <label for="head_physical_location">{!! Lang::get('forms.physical_location') !!}</label>
                                {!! Form::text('head_physical_location', null, ['id' => 'head_physical_location', 'class' => 'form-control required']) !!}
                            </div>

                            <div class="form-group">
                                <label for="head_mailing_address">{!! Lang::get('forms.mailing_address') !!}</label>
                                {!! Form::text('head_mailing_address', null, ['id' => 'head_mailing_address', 'class' => 'form-control required']) !!}
                            </div>

                            <div class="form-group">
                                <label for="head_province_state">{!! Lang::get('forms.province_state') !!}</label>
                                {!! Form::select('head_province_state', [
							"AB" => "Alberta",
                            "BC" => Lang::get('provinces.bc'),
                            "MB" => "Manitoba",
                            "NB" => Lang::get('provinces.nb'),
                            "NL" => Lang::get('provinces.nl'),
                            "NS" => Lang::get('provinces.ns'),
                            "NT" => Lang::get('provinces.nwt'),
                            "NU" => "Nunavut",
                            "ON" => "Ontario",
                            "PE" => Lang::get('provinces.pei'),
                            "QC" => Lang::get('provinces.qc'),
                            "SK" => "Saskatchewan",
                            "YT" => "Yukon",
                            "AL" => "Alabama",
                            "AK" => "Alaska",
                            "AZ" => "Arizona",
                            "AR" => "Arkansas",
                            "CA" => Lang::get('provinces.ca'),
                            "CO" => "Colorado",
                            "CT" => "Connecticut",
                            "DE" => "Delaware",
                            "DC" => "District Of Columbia",
                            "FL" => Lang::get('provinces.fl'),
                            "GA" => Lang::get('provinces.ga'),
                            "HI" => Lang::get('provinces.hi'),
                            "ID" => "Idaho",
                            "IL" => "Illinois",
                            "IN" => "Indiana",
                            "IA" => "Iowa",
                            "KS" => "Kansas",
                            "KY" => "Kentucky",
                            "LA" => Lang::get('provinces.la'),
                            "ME" => "Maine",
                            "MD" => "Maryland",
                            "MA" => "Massachusetts",
                            "MI" => "Michigan",
                            "MN" => "Minnesota",
                            "MS" => "Mississippi",
                            "MO" => "Missouri",
                            "MT" => "Montana",
                            "NE" => "Nebraska",
                            "NV" => "Nevada",
                            "NH" => "New Hampshire",
                            "NJ" => "New Jersey",
                            "NM" => Lang::get('provinces.nm'),
                            "NY" => "New York",
                            "NC" => Lang::get('provinces.nc'),
                            "ND" => Lang::get('provinces.nd'),
                            "OH" => "Ohio",
                            "OK" => "Oklahoma",
                            "OR" => "Oregon",
                            "PA" => Lang::get('provinces.pa'),
                            "RI" => "Rhode Island",
                            "SC" => Lang::get('provinces.sc'),
                            "SD" => Lang::get('provinces.sd'),
                            "TN" => "Tennessee",
                            "TX" => "Texas",
                            "UT" => "Utah",
                            "VT" => "Vermont",
                            "VA" => Lang::get('provinces.va'),
                            "WA" => "Washington",
                            "WV" => Lang::get('provinces.wv'),
                            "WI" => "Wisconsin",
                            "WY" => "Wyoming"],
                                                        "NB",
                                                        ['class' => 'form-control', 'id' => 'head_province_state']) !!}
                            </div>

                            <div class="form-group">
                                <label for="head_zip">{!! Lang::get('forms.zip') !!}</label>
                                {!! Form::text('head_zip', null, ['id' => 'head_zip', 'class' => 'form-control required']) !!}
                            </div>

                            <h2>{!! Lang::get('forms.nb_location_blurb') !!}</h2>

                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" value="" id="same_address">
                                    {!! Lang::get('forms.same_address') !!}
                                </label>
                            </div>

                            <div class="form-group">
                                <label for="nb_physical_location">{!! Lang::get('forms.physical_location') !!}</label>
                                {!! Form::text('nb_physical_location', null, ['id' => 'nb_physical_location', 'class' => 'form-control required']) !!}
                            </div>

                            <div class="form-group">
                                <label for="head_mailing_address">{!! Lang::get('forms.mailing_address') !!}</label>
                                {!! Form::text('nb_mailing_address', null, ['id' => 'nb_mailing_address', 'class' => 'form-control required']) !!}
                            </div>

                            <div class="form-group">
                                <label for="nb_province_state">{!! Lang::get('forms.province_state') !!}</label>
                                {!! Form::select('nb_province_state', [
							"AB" => "Alberta",
                            "BC" => Lang::get('provinces.bc'),
                            "MB" => "Manitoba",
                            "NB" => Lang::get('provinces.nb'),
                            "NL" => Lang::get('provinces.nl'),
                            "NS" => Lang::get('provinces.ns'),
                            "NT" => Lang::get('provinces.nwt'),
                            "NU" => "Nunavut",
                            "ON" => "Ontario",
                            "PE" => Lang::get('provinces.pei'),
                            "QC" => Lang::get('provinces.qc'),
                            "SK" => "Saskatchewan",
                            "YT" => "Yukon",
                            "AL" => "Alabama",
                            "AK" => "Alaska",
                            "AZ" => "Arizona",
                            "AR" => "Arkansas",
                            "CA" => Lang::get('provinces.ca'),
                            "CO" => "Colorado",
                            "CT" => "Connecticut",
                            "DE" => "Delaware",
                            "DC" => "District Of Columbia",
                            "FL" => Lang::get('provinces.fl'),
                            "GA" => Lang::get('provinces.ga'),
                            "HI" => Lang::get('provinces.hi'),
                            "ID" => "Idaho",
                            "IL" => "Illinois",
                            "IN" => "Indiana",
                            "IA" => "Iowa",
                            "KS" => "Kansas",
                            "KY" => "Kentucky",
                            "LA" => Lang::get('provinces.la'),
                            "ME" => "Maine",
                            "MD" => "Maryland",
                            "MA" => "Massachusetts",
                            "MI" => "Michigan",
                            "MN" => "Minnesota",
                            "MS" => "Mississippi",
                            "MO" => "Missouri",
                            "MT" => "Montana",
                            "NE" => "Nebraska",
                            "NV" => "Nevada",
                            "NH" => "New Hampshire",
                            "NJ" => "New Jersey",
                            "NM" => Lang::get('provinces.nm'),
                            "NY" => "New York",
                            "NC" => Lang::get('provinces.nc'),
                            "ND" => Lang::get('provinces.nd'),
                            "OH" => "Ohio",
                            "OK" => "Oklahoma",
                            "OR" => "Oregon",
                            "PA" => Lang::get('provinces.pa'),
                            "RI" => "Rhode Island",
                            "SC" => Lang::get('provinces.sc'),
                            "SD" => Lang::get('provinces.sd'),
                            "TN" => "Tennessee",
                            "TX" => "Texas",
                            "UT" => "Utah",
                            "VT" => "Vermont",
                            "VA" => Lang::get('provinces.va'),
                            "WA" => "Washington",
                            "WV" => Lang::get('provinces.wv'),
                            "WI" => "Wisconsin",
                            "WY" => "Wyoming"],
                                                        null,
                                                        ['class' => 'form-control', 'id' => 'nb_province_state']) !!}
                            </div>

                            <div class="form-group">
                                <label for="nb_zip">{!! Lang::get('forms.zip') !!}</label>
                                {!! Form::text('nb_zip', null, ['id' => 'nb_zip', 'class' => 'form-control required']) !!}
                            </div>


                            <h2>{!! Lang::get('forms.contact_blurb') !!}</h2>

                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" value="" id="same_address">
                                    {!! Lang::get('forms.same_address') !!}
                                </label>
                            </div>

                            <div class="form-group">
                                <label for="contact_name">{!! Lang::get('forms.name') !!}</label>
                                {!! Form::text('contact_name', null, ['id' => 'contact_name', 'class' => 'form-control required']) !!}
                            </div>

                            <div class="form-group">
                                <label for="contact_email">{!! Lang::get('forms.email_address') !!}</label>
                                {!! Form::text('contact_email', null, ['id' => 'contact_email', 'class' => 'form-control required email']) !!}
                            </div>

                            <div class="form-group">
                                <label for="contact_mailing_address">{!! Lang::get('forms.mailing_address') !!}</label>
                                {!! Form::text('contact_mailing_address', null, ['id' => 'contact_mailing_address', 'class' => 'form-control required']) !!}
                            </div>

                            <div class="form-group">
                                <label for="contact_province">{!! Lang::get('forms.province_state') !!}</label>
                                {!! Form::select('contact_province', [
							"AB" => "Alberta",
                            "BC" => Lang::get('provinces.bc'),
                            "MB" => "Manitoba",
                            "NB" => Lang::get('provinces.nb'),
                            "NL" => Lang::get('provinces.nl'),
                            "NS" => Lang::get('provinces.ns'),
                            "NT" => Lang::get('provinces.nwt'),
                            "NU" => "Nunavut",
                            "ON" => "Ontario",
                            "PE" => Lang::get('provinces.pei'),
                            "QC" => Lang::get('provinces.qc'),
                            "SK" => "Saskatchewan",
                            "YT" => "Yukon",
                            "AL" => "Alabama",
                            "AK" => "Alaska",
                            "AZ" => "Arizona",
                            "AR" => "Arkansas",
                            "CA" => Lang::get('provinces.ca'),
                            "CO" => "Colorado",
                            "CT" => "Connecticut",
                            "DE" => "Delaware",
                            "DC" => "District Of Columbia",
                            "FL" => Lang::get('provinces.fl'),
                            "GA" => Lang::get('provinces.ga'),
                            "HI" => Lang::get('provinces.hi'),
                            "ID" => "Idaho",
                            "IL" => "Illinois",
                            "IN" => "Indiana",
                            "IA" => "Iowa",
                            "KS" => "Kansas",
                            "KY" => "Kentucky",
                            "LA" => Lang::get('provinces.la'),
                            "ME" => "Maine",
                            "MD" => "Maryland",
                            "MA" => "Massachusetts",
                            "MI" => "Michigan",
                            "MN" => "Minnesota",
                            "MS" => "Mississippi",
                            "MO" => "Missouri",
                            "MT" => "Montana",
                            "NE" => "Nebraska",
                            "NV" => "Nevada",
                            "NH" => "New Hampshire",
                            "NJ" => "New Jersey",
                            "NM" => Lang::get('provinces.nm'),
                            "NY" => "New York",
                            "NC" => Lang::get('provinces.nc'),
                            "ND" => Lang::get('provinces.nd'),
                            "OH" => "Ohio",
                            "OK" => "Oklahoma",
                            "OR" => "Oregon",
                            "PA" => Lang::get('provinces.pa'),
                            "RI" => "Rhode Island",
                            "SC" => Lang::get('provinces.sc'),
                            "SD" => Lang::get('provinces.sd'),
                            "TN" => "Tennessee",
                            "TX" => "Texas",
                            "UT" => "Utah",
                            "VT" => "Vermont",
                            "VA" => Lang::get('provinces.va'),
                            "WA" => "Washington",
                            "WV" => Lang::get('provinces.wv'),
                            "WI" => "Wisconsin",
                            "WY" => "Wyoming"],
                                                        "NB",
                                                        ['class' => 'form-control']) !!}
                            </div>

                            <div class="form-group">
                                <label>{!! Lang::get('forms.if_your_company_sells') !!}</label><br>
                                <div class="checkbox">
                                    <label>
                                        {!! Form::radio('remittance', '1') !!} {!! Lang::get('forms.remit_to_rnb') !!}
                                    </label><br>
                                    <label>
                                        {!! Form::radio('remittance', '2') !!} {!! Lang::get('forms.remit_through_head_office') !!}
                                        <sup>*</sup>
                                    </label><br>
                                    <label>
                                        {!! Form::radio('remittance', '3') !!} {!! Lang::get('forms.remit_through_supplier') !!}
                                        <sup>*</sup>
                                    </label>
                                </div>

                                <label><sup>*</sup>{!! Lang::get('forms.must_supply') !!}</label>
                            </div>

                            <div class="form-group">
                                <label>{!! Lang::get('forms.type_of_operation') !!}</label>
                                <div class="checkbox">
                                    <label>
                                        {!! Form::radio('type_of_company', '1') !!} {!! Lang::get('forms.tire_retailer') !!}
                                    </label><br>
                                    <label>
                                        {!! Form::radio('type_of_company', '3') !!} {!! Lang::get('forms.car_dealer') !!}
                                    </label><br>
                                    <label>
                                        {!! Form::radio('type_of_company', '3') !!} {!! Lang::get('forms.solid_waste_commission') !!}
                                    </label><br>
                                    <label>
                                        {!! Form::radio('type_of_company', '4') !!} {!! Lang::get('forms.garage') !!}
                                    </label><br>
                                    <label>
                                        {!! Form::radio('type_of_company', '5') !!} {!! Lang::get('forms.trucking_company') !!}
                                    </label><br>
                                    <label>
                                        {!! Form::radio('type_of_company', '6') !!} {!! Lang::get('forms.towing_company') !!}
                                    </label><br>
                                    <label>
                                        {!! Form::radio('type_of_company', '7') !!} {!! Lang::get('forms.salvage_yard') !!}
                                    </label><br>
                                    <label>
                                        {!! Form::radio('type_of_company', '8') !!} {!! Lang::get('forms.other') !!}

                                    </label>
                                </div>

                            </div>

                            <div class="form-group">
                                <label for="contact_zip">{!! Lang::get('forms.zip') !!}</label>
                                {!! Form::text('contact_zip', null, ['id' => 'contact_zip', 'class' => 'form-control required']) !!}
                            </div>

                            <div class="form-group">
                                <label for="contact_phone">{!! Lang::get('forms.telephone') !!}</label>
                                {!! Form::text('contact_phone', null, ['id' => 'contact_phone', 'class' => 'form-control required']) !!}
                            </div>

                            <h2>{!! Lang::get('forms.agent_blurb') !!}</h2>

                            <div class="form-group">
                                <label for="agent_name">{!! Lang::get('forms.name') !!}</label>
                                {!! Form::text('agent_name', null, ['id' => 'agent_name', 'class' => 'form-control']) !!}
                            </div>

                            <div class="form-group">
                                <label for="agent_company_name">{!! Lang::get('forms.company_name') !!}</label>
                                {!! Form::text('agent_company_name', null, ['id' => 'agent_company_name', 'class' => 'form-control']) !!}
                            </div>

                            <div class="form-group">
                                <label for="agent_email">{!! Lang::get('forms.email_address') !!}</label>
                                {!! Form::text('agent_email', null, ['id' => 'agent_email', 'class' => 'form-control']) !!}
                            </div>

                            <div class="form-group">
                                <label for="agent_mailing_address">{!! Lang::get('forms.mailing_address') !!}</label>
                                {!! Form::text('agent_mailing_address', null, ['id' => 'agent_mailing_address', 'class' => 'form-control']) !!}
                            </div>

                            <div class="form-group">
                                <label for="agent_province">{!! Lang::get('forms.province_state') !!}</label>
                                {!! Form::select('agent_province', [
							"AB" => "Alberta",
                            "BC" => Lang::get('provinces.bc'),
                            "MB" => "Manitoba",
                            "NB" => Lang::get('provinces.nb'),
                            "NL" => Lang::get('provinces.nl'),
                            "NS" => Lang::get('provinces.ns'),
                            "NT" => Lang::get('provinces.nwt'),
                            "NU" => "Nunavut",
                            "ON" => "Ontario",
                            "PE" => Lang::get('provinces.pei'),
                            "QC" => Lang::get('provinces.qc'),
                            "SK" => "Saskatchewan",
                            "YT" => "Yukon",
                            "AL" => "Alabama",
                            "AK" => "Alaska",
                            "AZ" => "Arizona",
                            "AR" => "Arkansas",
                            "CA" => Lang::get('provinces.ca'),
                            "CO" => "Colorado",
                            "CT" => "Connecticut",
                            "DE" => "Delaware",
                            "DC" => "District Of Columbia",
                            "FL" => Lang::get('provinces.fl'),
                            "GA" => Lang::get('provinces.ga'),
                            "HI" => Lang::get('provinces.hi'),
                            "ID" => "Idaho",
                            "IL" => "Illinois",
                            "IN" => "Indiana",
                            "IA" => "Iowa",
                            "KS" => "Kansas",
                            "KY" => "Kentucky",
                            "LA" => Lang::get('provinces.la'),
                            "ME" => "Maine",
                            "MD" => "Maryland",
                            "MA" => "Massachusetts",
                            "MI" => "Michigan",
                            "MN" => "Minnesota",
                            "MS" => "Mississippi",
                            "MO" => "Missouri",
                            "MT" => "Montana",
                            "NE" => "Nebraska",
                            "NV" => "Nevada",
                            "NH" => "New Hampshire",
                            "NJ" => "New Jersey",
                            "NM" => Lang::get('provinces.nm'),
                            "NY" => "New York",
                            "NC" => Lang::get('provinces.nc'),
                            "ND" => Lang::get('provinces.nd'),
                            "OH" => "Ohio",
                            "OK" => "Oklahoma",
                            "OR" => "Oregon",
                            "PA" => Lang::get('provinces.pa'),
                            "RI" => "Rhode Island",
                            "SC" => Lang::get('provinces.sc'),
                            "SD" => Lang::get('provinces.sd'),
                            "TN" => "Tennessee",
                            "TX" => "Texas",
                            "UT" => "Utah",
                            "VT" => "Vermont",
                            "VA" => Lang::get('provinces.va'),
                            "WA" => "Washington",
                            "WV" => Lang::get('provinces.wv'),
                            "WI" => "Wisconsin",
                            "WY" => "Wyoming"],
                                                        "NB",
                                                        ['class' => 'form-control']) !!}
                            </div>

                            <div class="form-group">
                                <label for="agent_zip">{!! Lang::get('forms.zip') !!}</label>
                                {!! Form::text('agent_zip', null, ['id' => 'agent_zip', 'class' => 'form-control']) !!}
                            </div>

                            <div class="form-group">
                                <label for="agent_phone">{!! Lang::get('forms.telephone') !!}</label>
                                {!! Form::text('agent_phone', null, ['id' => 'agent_phone', 'class' => 'form-control']) !!}
                            </div>

                            <h2>{!! Lang::get('forms.signature') !!}</h2>
                            <div class="form-group">
                                <label for="signature">{!! Lang::get('forms.signature_blurb') !!}</label>
                                {!! Form::text('signature', null, ['id' => 'signature', 'class' => 'form-control required']) !!}
                            </div>

                            <br><br>

                            <hr>
                            <div class="form-group">
                                <div class="controls">
                                    {!!  Form::submit("Save", array('class' => 'btn btn-primary')) !!}
                                    <a href="#!" onclick="saveAndContinue()" class="btn btn-info">Save and Continue</a>
                                </div>
                            </div>
                            <br><br>
                            <input type="hidden" id="action" name="action" value="0">
                            {!! Form::hidden('id', $registration->id) !!}
                            {!! Form::close() !!}

                        </div>

                        @if($registration->id > 0)
                            <div role="tabpanel"
                                 @if((Input::has('tab')) && (Input::get('tab') == 'officers'))
                                 class="tab-pane active"
                                 @else
                                 class="tab-pane"
                                 @endif
                                 id="officers">
                                {!! Form::open(['id' => 'officerform', 'name' => 'officerform', 'url' => '/admin/registrations/tire-officers', 'method' => 'post']) !!}

                                @foreach($officers as $index => $officer)

                                    <h3>{!! Lang::get('forms.officer') !!} # {!! $index + 1 !!} <small><a href="#!" onclick="deleteOfficer({!! $officer->id !!})" class="text-danger remove remove-button">Delete this officer</a></small></h3>
                                    <div class="form-group">
                                        <label for="officer_name_{!! $officer->id !!}">{!! Lang::get('forms.name') !!}</label>
                                        {!! Form::text('officer_name_' . $officer->id, $officer->officer_name, ['id' => 'officer_name', 'class' => 'form-control']) !!}
                                    </div>

                                    <div class="form-group">
                                        <label for="officer_title_{!! $officer->id !!}">  {!! Lang::get('forms.title') !!}</label>
                                        {!! Form::text('officer_title_' . $officer->id, $officer->officer_title, ['id' => 'officer_title', 'class' => 'form-control']) !!}
                                    </div>

                                    <div class="form-group">
                                        <label for="officer_address_{!! $officer->id !!}">{!! Lang::get('forms.address_of_residence') !!}</label>
                                        {!! Form::text('officer_address_' . $officer->id, $officer->officer_address, ['id' => 'officer_address', 'class' => 'form-control']) !!}
                                    </div>

                                    <div class="form-group">
                                        <label for="officer_province_{!! $officer->id !!}">{!! Lang::get('forms.province_state') !!}</label>
                                        {!! Form::select('officer_province_' . $officer->id, [
							"AB" => "Alberta",
                            "BC" => Lang::get('provinces.bc'),
                            "MB" => "Manitoba",
                            "NB" => Lang::get('provinces.nb'),
                            "NL" => Lang::get('provinces.nl'),
                            "NS" => Lang::get('provinces.ns'),
                            "NT" => Lang::get('provinces.nwt'),
                            "NU" => "Nunavut",
                            "ON" => "Ontario",
                            "PE" => Lang::get('provinces.pei'),
                            "QC" => Lang::get('provinces.qc'),
                            "SK" => "Saskatchewan",
                            "YT" => "Yukon",
                            "AL" => "Alabama",
                            "AK" => "Alaska",
                            "AZ" => "Arizona",
                            "AR" => "Arkansas",
                            "CA" => Lang::get('provinces.ca'),
                            "CO" => "Colorado",
                            "CT" => "Connecticut",
                            "DE" => "Delaware",
                            "DC" => "District Of Columbia",
                            "FL" => Lang::get('provinces.fl'),
                            "GA" => Lang::get('provinces.ga'),
                            "HI" => Lang::get('provinces.hi'),
                            "ID" => "Idaho",
                            "IL" => "Illinois",
                            "IN" => "Indiana",
                            "IA" => "Iowa",
                            "KS" => "Kansas",
                            "KY" => "Kentucky",
                            "LA" => Lang::get('provinces.la'),
                            "ME" => "Maine",
                            "MD" => "Maryland",
                            "MA" => "Massachusetts",
                            "MI" => "Michigan",
                            "MN" => "Minnesota",
                            "MS" => "Mississippi",
                            "MO" => "Missouri",
                            "MT" => "Montana",
                            "NE" => "Nebraska",
                            "NV" => "Nevada",
                            "NH" => "New Hampshire",
                            "NJ" => "New Jersey",
                            "NM" => Lang::get('provinces.nm'),
                            "NY" => "New York",
                            "NC" => Lang::get('provinces.nc'),
                            "ND" => Lang::get('provinces.nd'),
                            "OH" => "Ohio",
                            "OK" => "Oklahoma",
                            "OR" => "Oregon",
                            "PA" => Lang::get('provinces.pa'),
                            "RI" => "Rhode Island",
                            "SC" => Lang::get('provinces.sc'),
                            "SD" => Lang::get('provinces.sd'),
                            "TN" => "Tennessee",
                            "TX" => "Texas",
                            "UT" => "Utah",
                            "VT" => "Vermont",
                            "VA" => Lang::get('provinces.va'),
                            "WA" => "Washington",
                            "WV" => Lang::get('provinces.wv'),
                            "WI" => "Wisconsin",
                            "WY" => "Wyoming"],
                                                                $officer->province,
                                                                array('class' => 'form-control')) !!}
                                    </div>

                                    <div class="form-group">
                                        <label for="officer_zip_{!! $officer->id !!}">{!! Lang::get('forms.zip') !!}</label>
                                        {!! Form::text('officer_zip_' . $officer->id, $officer->officer_zip, ['id' => 'officer_zip', 'class' => 'form-control']) !!}
                                    </div>
                                    <input type="hidden" name="officerid_{!! $officer->id !!}" value="{!! $officer->id !!}">
                                    <hr>
                                @endforeach

                                <h2>Add an Officer</h2>
                                <div class="form-group">
                                    <label for="officer_name_0">{!! Lang::get('forms.name') !!}</label>
                                    {!! Form::text('officer_name_0', null, ['id' => 'officer_name', 'class' => 'form-control']) !!}
                                </div>

                                <div class="form-group">
                                    <label for="officer_title_0">  {!! Lang::get('forms.title') !!}</label>
                                    {!! Form::text('officer_title_0', null, ['id' => 'officer_title', 'class' => 'form-control']) !!}
                                </div>

                                <div class="form-group">
                                    <label for="officer_address_0">{!! Lang::get('forms.address_of_residence') !!}</label>
                                    {!! Form::text('officer_address_0', null, ['id' => 'officer_address', 'class' => 'form-control']) !!}
                                </div>

                                <div class="form-group">
                                    <label for="officer_province_0">{!! Lang::get('forms.province_state') !!}</label>
                                    {!! Form::select('officer_province_0', [
							"AB" => "Alberta",
                            "BC" => Lang::get('provinces.bc'),
                            "MB" => "Manitoba",
                            "NB" => Lang::get('provinces.nb'),
                            "NL" => Lang::get('provinces.nl'),
                            "NS" => Lang::get('provinces.ns'),
                            "NT" => Lang::get('provinces.nwt'),
                            "NU" => "Nunavut",
                            "ON" => "Ontario",
                            "PE" => Lang::get('provinces.pei'),
                            "QC" => Lang::get('provinces.qc'),
                            "SK" => "Saskatchewan",
                            "YT" => "Yukon",
                            "AL" => "Alabama",
                            "AK" => "Alaska",
                            "AZ" => "Arizona",
                            "AR" => "Arkansas",
                            "CA" => Lang::get('provinces.ca'),
                            "CO" => "Colorado",
                            "CT" => "Connecticut",
                            "DE" => "Delaware",
                            "DC" => "District Of Columbia",
                            "FL" => Lang::get('provinces.fl'),
                            "GA" => Lang::get('provinces.ga'),
                            "HI" => Lang::get('provinces.hi'),
                            "ID" => "Idaho",
                            "IL" => "Illinois",
                            "IN" => "Indiana",
                            "IA" => "Iowa",
                            "KS" => "Kansas",
                            "KY" => "Kentucky",
                            "LA" => Lang::get('provinces.la'),
                            "ME" => "Maine",
                            "MD" => "Maryland",
                            "MA" => "Massachusetts",
                            "MI" => "Michigan",
                            "MN" => "Minnesota",
                            "MS" => "Mississippi",
                            "MO" => "Missouri",
                            "MT" => "Montana",
                            "NE" => "Nebraska",
                            "NV" => "Nevada",
                            "NH" => "New Hampshire",
                            "NJ" => "New Jersey",
                            "NM" => Lang::get('provinces.nm'),
                            "NY" => "New York",
                            "NC" => Lang::get('provinces.nc'),
                            "ND" => Lang::get('provinces.nd'),
                            "OH" => "Ohio",
                            "OK" => "Oklahoma",
                            "OR" => "Oregon",
                            "PA" => Lang::get('provinces.pa'),
                            "RI" => "Rhode Island",
                            "SC" => Lang::get('provinces.sc'),
                            "SD" => Lang::get('provinces.sd'),
                            "TN" => "Tennessee",
                            "TX" => "Texas",
                            "UT" => "Utah",
                            "VT" => "Vermont",
                            "VA" => Lang::get('provinces.va'),
                            "WA" => "Washington",
                            "WV" => Lang::get('provinces.wv'),
                            "WI" => "Wisconsin",
                            "WY" => "Wyoming"],
                                                            null,
                                                            array('class' => 'form-control')) !!}
                                </div>

                                <div class="form-group">
                                    <label for="officer_zip_0">{!! Lang::get('forms.zip') !!}</label>
                                    {!! Form::text('officer_zip_0', null, ['id' => 'officer_zip', 'class' => 'form-control']) !!}
                                </div>
                                <hr>
                                <div class="form-group">
                                    <div class="controls">
                                        {!!  Form::submit("Save", array('class' => 'btn btn-primary')) !!}
                                        <a href="#!" onclick="saveAndContinueOfficers()" class="btn btn-info">Save and Continue</a>
                                    </div>
                                </div>
                                <br><br>
                                <input type="hidden" id="oaction" name="action" value="0">


                                {!! Form::hidden('id', $registration->id) !!}
                                {!! Form::close() !!}
                            </div>
                        @endif
                    </div>
                </div>


            </div>
        </div>
    </div>
@stop

@section('bottom-js')
    <script>
        $(document).ready(function() {

        });

        function deleteOfficer(x){
            bootbox.confirm("Are you sure you want to delete this officer?", function(result) {
                if (result==true)
                {
                    window.location.href = '/admin/registrations/delete-tire-registration-officer?rid={!! $registration->id !!}&id='+x;
                }
            });
        }

        function saveAndContinue()
        {
            $("#action").val(1);
            $("#bookform").submit();
        }

        function saveAndContinueOfficers()
        {
            $("#oaction").val(1);
            $("#officerform").submit();
        }

        $("#same_address").change(function(){
            if(document.getElementById('same_address').checked) {
                $("#nb_physical_location").val($("#head_physical_location").val());
                $("#nb_mailing_address").val($("#head_mailing_address").val());
                $("#nb_province_state").val($("#head_province_state").val());
                $("#nb_zip").val($("#head_zip").val());
            } else {
                $("#nb_physical_location").val('');
                $("#nb_mailing_address").val('');
                $("#nb_province_state").val('');
                $("#nb_zip").val('');
            }
        });

    </script>
@stop