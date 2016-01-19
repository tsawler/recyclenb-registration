{!! Form::hidden('type', $type) !!}

<div class="form-group">
    <label for="name_of_applicant">{!! Lang::get('forms.name_of_applicant') !!}</label>
    {!! Form::text('name_of_applicant', null, ['id' => 'name_of_applicant', 'class' => 'form-control required']) !!}
</div>

<h3>{!! Lang::get('forms.address_head_office') !!}</h3>

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
							array('class' => 'form-control', 'id' => 'head_province_state')) !!}
</div>

<div class="form-group">
    <label for="head_zip">{!! Lang::get('forms.zip') !!}</label>
    {!! Form::text('head_zip', null, ['id' => 'head_zip', 'class' => 'form-control required']) !!}
</div>

<h3>{!! Lang::get('forms.nb_location_blurb') !!}</h3>

<div class="checkbox">
    <label>
        <input type="checkbox" value="" id="same_address">
        {!! Lang::get('forms.same_address') !!}
    </label>
</div>

<div class="checkbox">
    <label>
        <input type="checkbox" value="" id="no_location">
        {!! Lang::get('forms.no_location') !!}
    </label>
</div>

<div id="nb_loc">
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
                                array('class' => 'form-control', 'id' => 'nb_province_state')) !!}
    </div>

    <div class="form-group">
        <label for="nb_zip">{!! Lang::get('forms.zip') !!}</label>
        {!! Form::text('nb_zip', null, ['id' => 'nb_zip', 'class' => 'form-control required']) !!}
    </div>
</div>

<h3>{!! Lang::get('forms.corp_blurb') !!}</h3>

<div id="corp" class="top-div">
    <h4>{!! Lang::get('forms.officer') !!} <a href="#!"
                                              class="text-danger hidden remove remove-button">{!! Lang::get('forms.delete_this_officer') !!}</a>
    </h4>
    <div class="form-group">
        <label for="officer_name">{!! Lang::get('forms.name') !!}</label>
        {!! Form::text('officer_name[]', null, ['id' => 'officer_name', 'class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        <label for="officer_title">{!! Lang::get('forms.title') !!}</label>
        {!! Form::select('officer_title[]', [
            'President' => Lang::get('forms.president'),
            'Vice President' => Lang::get('forms.vice_president'),
            'Treasurer' => Lang::get('forms.treasurer'),
            'Secretary' => Lang::get('forms.secretary'),
        ],
        null,
        array('class' => 'form-control')) !!}

    </div>

    <div class="form-group">
        <label for="officer_address">{!! Lang::get('forms.address_of_residence') !!}</label>
        {!! Form::text('officer_address[]', null, ['id' => 'officer_address', 'class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        <label for="officer_province">{!! Lang::get('forms.province_state') !!}</label>
        {!! Form::select('officer_province[]', [
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
        <label for="officer_zip">{!! Lang::get('forms.zip') !!}</label>
        {!! Form::text('officer_zip[]', null, ['id' => 'officer_zip', 'class' => 'form-control']) !!}
    </div>
</div>
<a class="btn btn-primary" onclick="addOfficer()">{!! Lang::get('forms.add_an_officer') !!}</a>


<h3>{!! Lang::get('forms.contact_blurb') !!}</h3>

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
							array('class' => 'form-control')) !!}
</div>

<div class="form-group">
    <label for="contact_zip">{!! Lang::get('forms.zip') !!}</label>
    {!! Form::text('contact_zip', null, ['id' => 'contact_zip', 'class' => 'form-control required']) !!}
</div>

<div class="form-group">
    <label for="contact_phone">{!! Lang::get('forms.telephone') !!}</label>
    {!! Form::text('contact_phone', null, ['id' => 'contact_phone', 'class' => 'form-control required']) !!}
</div>

<h3>{!! Lang::get('forms.agent_blurb') !!}</h3>

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
							array('class' => 'form-control')) !!}
</div>

<div class="form-group">
    <label for="agent_zip">{!! Lang::get('forms.zip') !!}</label>
    {!! Form::text('agent_zip', null, ['id' => 'agent_zip', 'class' => 'form-control']) !!}
</div>

<div class="form-group">
    <label for="agent_phone">{!! Lang::get('forms.telephone') !!}</label>
    {!! Form::text('agent_phone', null, ['id' => 'agent_phone', 'class' => 'form-control']) !!}
</div>

<h3>{!! Lang::get('forms.signature') !!}</h3>
<div class="form-group">
    <label for="signature">{!! Lang::get('forms.signature_blurb') !!}</label>
    {!! Form::text('signature', null, ['id' => 'signature', 'class' => 'form-control required']) !!}
</div>

<hr>
<div class="form-group">
    <div class="controls">
        {!!  Form::submit(Lang::get('forms.register'), array('class' => 'btn btn-primary')) !!}
    </div>
</div>
<br><br>
