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
                            "BC" => "British Columbia",
                            "MB" => "Manitoba",
                            "NB" => "New Brunswick",
                            "NL" => "Newfoundland and Labrador",
                            "NS" => "Nova Scotia",
                            "NT" => "Northwest Territories",
                            "NU" => "Nunavut",
                            "ON" => "Ontario",
                            "PE" => "Prince Edward Island",
                            "QC" => "Quebec",
                            "SK" => "Saskatchewan",
                            "YT" => "Yukon",
                            "AL" => "Alabama",
                            "AK" => "Alaska",
                            "AZ" => "Arizona",
                            "AR" => "Arkansas",
                            "CA" => "California",
                            "CO" => "Colorado",
                            "CT" => "Connecticut",
                            "DE" => "Delaware",
                            "DC" => "District Of Columbia",
                            "FL" => "Florida",
                            "GA" => "Georgia",
                            "HI" => "Hawaii",
                            "ID" => "Idaho",
                            "IL" => "Illinois",
                            "IN" => "Indiana",
                            "IA" => "Iowa",
                            "KS" => "Kansas",
                            "KY" => "Kentucky",
                            "LA" => "Louisiana",
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
                            "NM" => "New Mexico",
                            "NY" => "New York",
                            "NC" => "North Carolina",
                            "ND" => "North Dakota",
                            "OH" => "Ohio",
                            "OK" => "Oklahoma",
                            "OR" => "Oregon",
                            "PA" => "Pennsylvania",
                            "RI" => "Rhode Island",
                            "SC" => "South Carolina",
                            "SD" => "South Dakota",
                            "TN" => "Tennessee",
                            "TX" => "Texas",
                            "UT" => "Utah",
                            "VT" => "Vermont",
                            "VA" => "Virginia",
                            "WA" => "Washington",
                            "WV" => "West Virginia",
                            "WI" => "Wisconsin",
                            "WY" => "Wyoming"],
							"NB",
							['class' => 'form-control', 'id' => 'head_province_state']) !!}
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
                            "BC" => "British Columbia",
                            "MB" => "Manitoba",
                            "NB" => "New Brunswick",
                            "NL" => "Newfoundland and Labrador",
                            "NS" => "Nova Scotia",
                            "NT" => "Northwest Territories",
                            "NU" => "Nunavut",
                            "ON" => "Ontario",
                            "PE" => "Prince Edward Island",
                            "QC" => "Quebec",
                            "SK" => "Saskatchewan",
                            "YT" => "Yukon",
                            "AL" => "Alabama",
                            "AK" => "Alaska",
                            "AZ" => "Arizona",
                            "AR" => "Arkansas",
                            "CA" => "California",
                            "CO" => "Colorado",
                            "CT" => "Connecticut",
                            "DE" => "Delaware",
                            "DC" => "District Of Columbia",
                            "FL" => "Florida",
                            "GA" => "Georgia",
                            "HI" => "Hawaii",
                            "ID" => "Idaho",
                            "IL" => "Illinois",
                            "IN" => "Indiana",
                            "IA" => "Iowa",
                            "KS" => "Kansas",
                            "KY" => "Kentucky",
                            "LA" => "Louisiana",
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
                            "NM" => "New Mexico",
                            "NY" => "New York",
                            "NC" => "North Carolina",
                            "ND" => "North Dakota",
                            "OH" => "Ohio",
                            "OK" => "Oklahoma",
                            "OR" => "Oregon",
                            "PA" => "Pennsylvania",
                            "RI" => "Rhode Island",
                            "SC" => "South Carolina",
                            "SD" => "South Dakota",
                            "TN" => "Tennessee",
                            "TX" => "Texas",
                            "UT" => "Utah",
                            "VT" => "Vermont",
                            "VA" => "Virginia",
                            "WA" => "Washington",
                            "WV" => "West Virginia",
                            "WI" => "Wisconsin",
                            "WY" => "Wyoming"],
							null,
							['class' => 'form-control', 'id' =>'nb_province_state']) !!}
</div>

<div class="form-group">
    <label for="nb_zip">{!! Lang::get('forms.zip') !!}</label>
    {!! Form::text('nb_zip', null, ['id' => 'nb_zip', 'class' => 'form-control required']) !!}
</div>

<h3>{!! Lang::get('forms.corp_blurb') !!}</h3>

<div id="corp" class="top-div">
    <h4>{!! Lang::get('forms.officer') !!} <a href="#!" class="text-danger hidden remove remove-button">Delete this officer</a></h4>
    <div class="form-group">
        <label for="officer_name">{!! Lang::get('forms.name') !!}</label>
        {!! Form::text('officer_name[]', null, ['id' => 'officer_name', 'class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        <label for="officer_title">{!! Lang::get('forms.title') !!}</label>
        {!! Form::text('officer_title[]', null, ['id' => 'officer_title', 'class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        <label for="officer_address">{!! Lang::get('forms.address_of_residence') !!}</label>
        {!! Form::text('officer_address[]', null, ['id' => 'officer_address', 'class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        <label for="officer_province">{!! Lang::get('forms.province_state') !!}</label>
        {!! Form::select('officer_province[]', array(
                                "AB" => "Alberta",
                                "BC" => "British Columbia",
                                "MB" => "Manitoba",
                                "NB" => "New Brunswick",
                                "NL" => "Newfoundland and Labrador",
                                "NS" => "Nova Scotia",
                                "NT" => "Northwest Territories",
                                "NU" => "Nunavut",
                                "ON" => "Ontario",
                                "PE" => "Prince Edward Island",
                                "QC" => "Quebec",
                                "SK" => "Saskatchewan",
                                "YT" => "Yukon",
                                "AL" => "Alabama",
                                "AK" => "Alaska",
                                "AZ" => "Arizona",
                                "AR" => "Arkansas",
                                "CA" => "California",
                                "CO" => "Colorado",
                                "CT" => "Connecticut",
                                "DE" => "Delaware",
                                "DC" => "District Of Columbia",
                                "FL" => "Florida",
                                "GA" => "Georgia",
                                "HI" => "Hawaii",
                                "ID" => "Idaho",
                                "IL" => "Illinois",
                                "IN" => "Indiana",
                                "IA" => "Iowa",
                                "KS" => "Kansas",
                                "KY" => "Kentucky",
                                "LA" => "Louisiana",
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
                                "NM" => "New Mexico",
                                "NY" => "New York",
                                "NC" => "North Carolina",
                                "ND" => "North Dakota",
                                "OH" => "Ohio",
                                "OK" => "Oklahoma",
                                "OR" => "Oregon",
                                "PA" => "Pennsylvania",
                                "RI" => "Rhode Island",
                                "SC" => "South Carolina",
                                "SD" => "South Dakota",
                                "TN" => "Tennessee",
                                "TX" => "Texas",
                                "UT" => "Utah",
                                "VT" => "Vermont",
                                "VA" => "Virginia",
                                "WA" => "Washington",
                                "WV" => "West Virginia",
                                "WI" => "Wisconsin",
                                "WY" => "Wyoming"),
                                null,
                                array('class' => 'form-control')) !!}
    </div>

    <div class="form-group">
        <label for="officer_zip">{!! Lang::get('forms.zip') !!}</label>
        {!! Form::text('officer_zip[]', null, ['id' => 'officer_zip', 'class' => 'form-control']) !!}
    </div>
</div>
<a class="btn btn-primary" onclick="addOfficer()">Add an Officer</a>



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
                            "BC" => "British Columbia",
                            "MB" => "Manitoba",
                            "NB" => "New Brunswick",
                            "NL" => "Newfoundland and Labrador",
                            "NS" => "Nova Scotia",
                            "NT" => "Northwest Territories",
                            "NU" => "Nunavut",
                            "ON" => "Ontario",
                            "PE" => "Prince Edward Island",
                            "QC" => "Quebec",
                            "SK" => "Saskatchewan",
                            "YT" => "Yukon",
                            "AL" => "Alabama",
                            "AK" => "Alaska",
                            "AZ" => "Arizona",
                            "AR" => "Arkansas",
                            "CA" => "California",
                            "CO" => "Colorado",
                            "CT" => "Connecticut",
                            "DE" => "Delaware",
                            "DC" => "District Of Columbia",
                            "FL" => "Florida",
                            "GA" => "Georgia",
                            "HI" => "Hawaii",
                            "ID" => "Idaho",
                            "IL" => "Illinois",
                            "IN" => "Indiana",
                            "IA" => "Iowa",
                            "KS" => "Kansas",
                            "KY" => "Kentucky",
                            "LA" => "Louisiana",
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
                            "NM" => "New Mexico",
                            "NY" => "New York",
                            "NC" => "North Carolina",
                            "ND" => "North Dakota",
                            "OH" => "Ohio",
                            "OK" => "Oklahoma",
                            "OR" => "Oregon",
                            "PA" => "Pennsylvania",
                            "RI" => "Rhode Island",
                            "SC" => "South Carolina",
                            "SD" => "South Dakota",
                            "TN" => "Tennessee",
                            "TX" => "Texas",
                            "UT" => "Utah",
                            "VT" => "Vermont",
                            "VA" => "Virginia",
                            "WA" => "Washington",
                            "WV" => "West Virginia",
                            "WI" => "Wisconsin",
                            "WY" => "Wyoming"],
							"NB",
							['class' => 'form-control']) !!}
</div>

<div class="form-group">
    <label>{!! Lang::get('forms.if_your_company_sells') !!}</label><br>
    <div class="checkbox">
        <label>
            {!! Form::radio('remittance', 'Remit to RNB') !!} {!! Lang::get('forms.remit_to_rnb') !!}
        </label><br>
        <label>
            {!! Form::radio('remittance', 'Remit Through Head Office') !!} {!! Lang::get('forms.remit_through_head_office') !!}
            <sup>*</sup>
        </label><br>
        <label>
            {!! Form::radio('remittance', 'Remit Through Supplier') !!} {!! Lang::get('forms.remit_through_supplier') !!}
            <sup>*</sup>
        </label>
    </div>

    <label><sup>*</sup>{!! Lang::get('forms.must_supply') !!}</label>
</div>

<div class="form-group">
    <label>{!! Lang::get('type_of_operation') !!}</label>
    <div class="checkbox">
        <label>
            {!! Form::radio('type_of_company', 'Tire Retailer') !!} {!! Lang::get('forms.tire_retailer') !!}
        </label><br>
        <label>
            {!! Form::radio('type_of_company', 'Car Dealer') !!} {!! Lang::get('forms.car_dealer') !!}
        </label><br>
        <label>
            {!! Form::radio('type_of_company', 'Solid Waste Commission') !!} {!! Lang::get('forms.solid_waste_commission') !!}
        </label><br>
        <label>
            {!! Form::radio('type_of_company', 'Garage') !!} {!! Lang::get('forms.garage') !!}
        </label><br>
        <label>
            {!! Form::radio('type_of_company', 'Trucking Company') !!} {!! Lang::get('forms.trucking_company') !!}
        </label><br>
        <label>
            {!! Form::radio('type_of_company', 'Towing Company') !!} {!! Lang::get('forms.towing_company') !!}
        </label><br>
        <label>
            {!! Form::radio('type_of_company', 'Salvage Yard') !!} {!! Lang::get('forms.salvage_yard') !!}
        </label><br>
        <label>
            {!! Form::radio('type_of_company', 'Other') !!} {!! Lang::get('forms.other') !!}

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
                            "BC" => "British Columbia",
                            "MB" => "Manitoba",
                            "NB" => "New Brunswick",
                            "NL" => "Newfoundland and Labrador",
                            "NS" => "Nova Scotia",
                            "NT" => "Northwest Territories",
                            "NU" => "Nunavut",
                            "ON" => "Ontario",
                            "PE" => "Prince Edward Island",
                            "QC" => "Quebec",
                            "SK" => "Saskatchewan",
                            "YT" => "Yukon",
                            "AL" => "Alabama",
                            "AK" => "Alaska",
                            "AZ" => "Arizona",
                            "AR" => "Arkansas",
                            "CA" => "California",
                            "CO" => "Colorado",
                            "CT" => "Connecticut",
                            "DE" => "Delaware",
                            "DC" => "District Of Columbia",
                            "FL" => "Florida",
                            "GA" => "Georgia",
                            "HI" => "Hawaii",
                            "ID" => "Idaho",
                            "IL" => "Illinois",
                            "IN" => "Indiana",
                            "IA" => "Iowa",
                            "KS" => "Kansas",
                            "KY" => "Kentucky",
                            "LA" => "Louisiana",
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
                            "NM" => "New Mexico",
                            "NY" => "New York",
                            "NC" => "North Carolina",
                            "ND" => "North Dakota",
                            "OH" => "Ohio",
                            "OK" => "Oklahoma",
                            "OR" => "Oregon",
                            "PA" => "Pennsylvania",
                            "RI" => "Rhode Island",
                            "SC" => "South Carolina",
                            "SD" => "South Dakota",
                            "TN" => "Tennessee",
                            "TX" => "Texas",
                            "UT" => "Utah",
                            "VT" => "Vermont",
                            "VA" => "Virginia",
                            "WA" => "Washington",
                            "WV" => "West Virginia",
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

<h3>{!! Lang::get('forms.signature') !!}</h3>
<div class="form-group">
    <label for="signature">{!! Lang::get('forms.signature_blurb') !!}</label>
    {!! Form::text('signature', null, ['id' => 'signature', 'class' => 'form-control required']) !!}
</div>

<hr>
<div class="form-group">
    <div class="controls">
        {!!  Form::submit(Lang::get('forms.register'), ['class' => 'btn btn-primary']) !!}
    </div>
</div>
<br><br>