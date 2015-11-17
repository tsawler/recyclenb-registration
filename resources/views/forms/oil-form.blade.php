<div class="form-group">
    <label for="name_of_applicant">Name of Applicant:</label>
    {!! Form::text('name_of_applicant', null, ['id' => 'name_of_applicant', 'class' => 'form-control']) !!}
</div>

<div class="form-group">
    <label>Register For:</label>

    <div class="checkbox">
        <label>
            {!! Form::checkbox('paint', '1') !!} Paint
        </label><br>
        <label>
            {!! Form::checkbox('oil', '1') !!} Oil
        </label><br>
        <label>
            {!! Form::checkbox('antifreeze', '1') !!} Antifreeze/Glycol
        </label>
    </div>
</div>

<h3>Address and Location of Head Office of the Applicant:</h3>

<div class="form-group">
    <label for="head_physical_location">Physical Location:</label>
    {!! Form::text('head_physical_location', null, ['id' => 'head_physical_location', 'class' => 'form-control']) !!}
</div>

<div class="form-group">
    <label for="head_mailing_address">Mailing Address:</label>
    {!! Form::text('head_mailing_address', null, ['id' => 'head_mailing_address', 'class' => 'form-control']) !!}
</div>

<div class="form-group">
    <label for="head_province_state">Province/State:</label>
    {!! Form::select('head_province_state', array(
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
							"NB",
							array('class' => 'form-control')) !!}
</div>

<div class="form-group">
    <label for="head_zip">Postal/Zip Code:</label>
    {!! Form::text('head_zip', null, ['id' => 'head_zip', 'class' => 'form-control']) !!}
</div>

<h3>Address and Location of Main Place of Business in New Brunswick:</h3>

<div class="form-group">
    <label for="nb_physical_location">Physical Location:</label>
    {!! Form::text('nb_physical_location', null, ['id' => 'nb_physical_location', 'class' => 'form-control']) !!}
</div>

<div class="form-group">
    <label for="head_mailing_address">Mailing Address:</label>
    {!! Form::text('nb_mailing_address', null, ['id' => 'nb_mailing_address', 'class' => 'form-control']) !!}
</div>

<div class="form-group">
    <label for="nb_province_state">Province/State:</label>
    {!! Form::select('nb_province_state', array(
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
    <label for="nb_zip">Postal/Zip Code:</label>
    {!! Form::text('nb_zip', null, ['id' => 'nb_zip', 'class' => 'form-control']) !!}
</div>

<h3>If a Corporation, provide the following information relating to all the officers of the
    corporation</h3>

<h4>Officer #1</h4>
<div class="form-group">
    <label for="officer_1_name">Name:</label>
    {!! Form::text('officer_1_name', null, ['id' => 'officer_1_name', 'class' => 'form-control']) !!}
</div>

<div class="form-group">
    <label for="officer_1_title">Title:</label>
    {!! Form::text('officer_1_title', null, ['id' => 'officer_1_title', 'class' => 'form-control']) !!}
</div>

<div class="form-group">
    <label for="officer_1_address">Address of Place of Residence:</label>
    {!! Form::text('officer_1_address', null, ['id' => 'officer_1_address', 'class' => 'form-control']) !!}
</div>

<div class="form-group">
    <label for="officer_1_province">Province/State:</label>
    {!! Form::select('officer_1_province', array(
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
    <label for="officer_1_zip">Postal/Zip Code:</label>
    {!! Form::text('officer_1_zip', null, ['id' => 'officer_1_zip', 'class' => 'form-control']) !!}
</div>

<h4>Officer #2</h4>
<div class="form-group">
    <label for="officer_2_name">Name:</label>
    {!! Form::text('officer_2_name', null, ['id' => 'officer_2_name', 'class' => 'form-control']) !!}
</div>

<div class="form-group">
    <label for="officer_2_title">Title:</label>
    {!! Form::text('officer_2_title', null, ['id' => 'officer_2_title', 'class' => 'form-control']) !!}
</div>

<div class="form-group">
    <label for="officer_2_address">Address of Place of Residence:</label>
    {!! Form::text('officer_2_address', null, ['id' => 'officer_2_address', 'class' => 'form-control']) !!}
</div>

<div class="form-group">
    <label for="officer_2_province">Province/State:</label>
    {!! Form::select('officer_2_province', array(
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
    <label for="officer_2_zip">Postal/Zip Code:</label>
    {!! Form::text('officer_2_zip', null, ['id' => 'officer_2_zip', 'class' => 'form-control']) !!}
</div>


<h4>Officer #3</h4>
<div class="form-group">
    <label for="officer_3_name">Name:</label>
    {!! Form::text('officer_3_name', null, ['id' => 'officer_3_name', 'class' => 'form-control']) !!}
</div>

<div class="form-group">
    <label for="officer_3_title">Title:</label>
    {!! Form::text('officer_3_title', null, ['id' => 'officer_3_title', 'class' => 'form-control']) !!}
</div>

<div class="form-group">
    <label for="officer_3_address">Address of Place of Residence:</label>
    {!! Form::text('officer_3_address', null, ['id' => 'officer_3_address', 'class' => 'form-control']) !!}
</div>

<div class="form-group">
    <label for="officer_3_province">Province/State:</label>
    {!! Form::select('officer_3_province', array(
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
    <label for="officer_3_zip">Postal/Zip Code:</label>
    {!! Form::text('officer_3_zip', null, ['id' => 'officer_3_zip', 'class' => 'form-control']) !!}
</div>

<h3>Name, Address and Telephone Number of Person to whom any correspondence or
    inquiries should be directed:</h3>

<div class="form-group">
    <label for="contact_name">Contact Name:</label>
    {!! Form::text('contact_name', null, ['id' => 'contact_name', 'class' => 'form-control']) !!}
</div>

<div class="form-group">
    <label for="contact_email">Email Address:</label>
    {!! Form::text('contact_email', null, ['id' => 'contact_email', 'class' => 'form-control']) !!}
</div>

<div class="form-group">
    <label for="contact_mailing_address">Mailing Address:</label>
    {!! Form::text('contact_mailing_address', null, ['id' => 'contact_mailing_address', 'class' => 'form-control']) !!}
</div>

<div class="form-group">
    <label for="contact_province">Province/State:</label>
    {!! Form::select('contact_province', array(
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
							"NB",
							array('class' => 'form-control')) !!}
</div>

<div class="form-group">
    <label for="contact_zip">Postal/Zip Code:</label>
    {!! Form::text('contact_zip', null, ['id' => 'contact_zip', 'class' => 'form-control']) !!}
</div>

<div class="form-group">
    <label for="contact_phone">Telephone Number:</label>
    {!! Form::text('contact_phone', null, ['id' => 'contact_phone', 'class' => 'form-control']) !!}
</div>

<h3>Name, Company Name, Address and Telephone of any AGENT acting on behalf of the
    Applicant:</h3>

<div class="form-group">
    <label for="agent_name">Name:</label>
    {!! Form::text('agent_name', null, ['id' => 'agent_name', 'class' => 'form-control']) !!}
</div>

<div class="form-group">
    <label for="agent_company_name">Company Name:</label>
    {!! Form::text('agent_company_name', null, ['id' => 'agent_company_name', 'class' => 'form-control']) !!}
</div>

<div class="form-group">
    <label for="agent_email">Email Address:</label>
    {!! Form::text('agent_email', null, ['id' => 'agent_email', 'class' => 'form-control']) !!}
</div>

<div class="form-group">
    <label for="agent_mailing_address">Mailing Address:</label>
    {!! Form::text('agent_mailing_address', null, ['id' => 'agent_mailing_address', 'class' => 'form-control']) !!}
</div>

<div class="form-group">
    <label for="agent_province">Province/State:</label>
    {!! Form::select('agent_province', array(
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
							"NB",
							array('class' => 'form-control')) !!}
</div>

<div class="form-group">
    <label for="agent_zip">Postal/Zip Code:</label>
    {!! Form::text('agent_zip', null, ['id' => 'agent_zip', 'class' => 'form-control']) !!}
</div>

<div class="form-group">
    <label for="agent_phone">Telephone Number:</label>
    {!! Form::text('agent_phone', null, ['id' => 'agent_phone', 'class' => 'form-control']) !!}
</div>